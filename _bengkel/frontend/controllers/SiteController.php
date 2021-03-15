<?php
namespace frontend\controllers;

//yii 
use Yii;
use yii\helpers\Url;
use yii\data\ActiveDataProvider;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

//common model
use common\models\LoginForm;

//frontend model
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

//backend model
use backend\models\Barang;
use backend\models\Booking;
use cakebake\actionlog\model\ActionLog;
use common\models\Promo;
//cart
use \yz\shoppingcart\Shoppingcart;


/**
 * Site controller
 */

 class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
       return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            ActionLog::add('success Login', Yii::$app->user->identity->username);
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        ActionLog::add('success Logout', Yii::$app->user->identity->username);
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success',
                 'Terima kasih sudah menghubungi kami. Kami akan membalas Anda sesegera mungkin.');
            } else 
            {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionService()
    {
        return $this->render('service');
    }
    public function actionBooking()
    {
        $bookingList = new ActiveDataProvider([
            'query'=>Booking::find()
            ->from(['booking'])
            ->orderBy('create_at DESC'), 
            'pagination'=>['pageSize'=>10,]
        ]);
        return $this->render('booking', ['bookingList'=>$bookingList,]);
    }
    public function actionSparepart()
    {
    //$products = Products::find()->where(['status'=>1])->all();
    $barang = new ActiveDataProvider([
        'query'=>Barang::find()
        ->where(['status'=>1])
        ->orderBy('create_at DESC'),
        'pagination'=>['pageSize'=>6,]
    ]);

    $barangMerek1 = new ActiveDataProvider([
        'query'=>Barang::find()
        ->where(['merek'=>'Toyota'])
        ->orderBy('create_at DESC'),
         'pagination'=>['pageSize'=>4,]
    ]);

    $barangMerek2 = new ActiveDataProvider([
        'query'=>Barang::find()
        ->where(['merek'=>'Honda'])
        ->orderBy('create_at DESC'),
         'pagination'=>['pageSize'=>4,]
    ]);

    $promo = new ActiveDataProvider([
        'query'=>Promo::find()
        ->from('promo')
        ->orderBy('create_at DESC'),
        'pagination'=>['pageSize'=>3,]
    ]);

        return $this->render(
            'sparepart', ['barang'=>$barang,
            'barangMerek1'=>$barangMerek1,
            'barangMerek2'=>$barangMerek2,
            'promo'=>$promo,
            ]);
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Silakan Cek Email untuk verify akun');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Periksa email Anda untuk instruksi lebih lanjut.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error',
                 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'Password Baru Telah Di simpan.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Email Anda telah dikonfirmasi!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error',
        'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success',
                'Periksa email Anda untuk instruksi lebih lanjut.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error',
            'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
