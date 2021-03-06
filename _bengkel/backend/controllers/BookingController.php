<?php

namespace backend\controllers;

use Yii;
use backend\models\Booking;
use backend\models\BookingSearch;
use cakebake\actionlog\model\ActionLog;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * BookingController implements the CRUD actions for Booking model.
 */
class BookingController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    
    /**
     * Lists all Booking models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookingSearch();
        $listBooking = new ActiveDataProvider(['query'=>Booking::find()
        ->from('booking'),
        'pagination'=>['pageSize'=>5,]
        ]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $listBooking,
        ]);
    }

    /**
     * Displays a single Booking model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Booking model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Booking();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            ActionLog::add('success Insert', Yii::$app->user->identity->username);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Booking model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            ActionLog::add('success Update', Yii::$app->user->identity->username);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Booking model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        ActionLog::add('success Delete', Yii::$app->user->identity->username);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Booking model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Booking the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Booking::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionKonfirmasi()
    {
        $bookingList = new ActiveDataProvider(['query'=>Booking::find()
        ->from(['booking'])
        ->orderBy('create_at DESC'),
         'pagination'=>['pageSize'=>10,]
    ]);

        return $this->render('konfirmasi', ['bookingList'=>$bookingList,]);
    }

    public function actionUkonfirmasi($id)
    {
         $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            ActionLog::add('success Insert', Yii::$app->user->identity->username);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('ukonfirmasi', [
            'model' => $model,
        ]);
    }
}

