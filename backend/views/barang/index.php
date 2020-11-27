<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sparepart';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id_barang',
            'nama',
            'deskripsi',
            'quantity',
            'harga',
            'stock',
            'merek',
            'model',
            //'kondisi_barang',
            //'image',
            //'create_at',

              ['class' => 'yii\grid\ActionColumn',

                          'template'=>'{view} {update} {delete}',
                          'header'=>'Action Colomn'
                      ],

        ],
    ]); ?>


</div>
