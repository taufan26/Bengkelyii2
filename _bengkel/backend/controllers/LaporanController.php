<?php

namespace backend\controllers;

use Yii;
use backend\models\Booking;
use backend\models\Barang;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ContactController implements the CRUD actions for ContactForm model.
 */
class LaporanController extends Controller
{
    /**
     * Lists all ContactForm models.
     * @return mixed
     */
    public function actionIndex()
    {
        $listBooking = new ActiveDataProvider(['query'=>Booking::find()
        ->from('booking')]);
        
        return $this->render('index', ['listBooking' => $listBooking]);
    }

    public function actionBarang()
    {
        $listBarang = new ActiveDataProvider(['query'=>Barang::find()
        ->from('barang')]);
        
        return $this->render('barang', ['listBarang' => $listBarang]);
    }  
}
