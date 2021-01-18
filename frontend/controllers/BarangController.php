<?php
namespace frontend\controllers;

//yii 

use backend\models\Barang;
use Yii;
use yii\helpers\Url;
use yii\data\ActiveDataProvider;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\Controller;

/**
 * Site controller
 */

 class BarangController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex($id)
    {
        $barang = Barang::findone($id);
       return $this->render('index', ['barang'=>$barang]);
    }

}
