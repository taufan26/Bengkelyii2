<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\AdminLoginForm;
use backend\models\Booking;
use backend\models\Barang;
use cakebake\actionlog\model\ActionLog;
use yii\data\ActiveDataProvider;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $booking['cms'] = Booking::find()->count();
        $barang['brg'] = Barang::find()->count();
        $model['mdl'] = (new \yii\db\Query())
        ->select(['id'])
        ->from('user')
        ->count();
        $mail['mal'] = (new \yii\db\Query())
        ->select(['id'])
        ->from('contact_form')
        ->count();

        $bookingList = new ActiveDataProvider([
            'query'=>Booking::find()
            ->from(['booking'])
            ->orderBy('create_at DESC'), 
            'pagination'=>['pageSize'=>3,]
        ]);
        $barangList = new ActiveDataProvider([
            'query'=>Barang::find()
            ->where(['status'=>1])
            ->orderBy('create_at DESC'), 
            'pagination'=>['pageSize'=>3,]
        ]);

        return $this->render('index', ['booking'=>$booking,
        'barang'=>$barang,
        'model'=>$model,
        'mail'=>$mail,
        'bookingList'=>$bookingList,
        'barangList'=>$barangList
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new AdminLoginForm();
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
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        ActionLog::add('success Logout', Yii::$app->user->identity->username);
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
