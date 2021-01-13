<?php

use backend\models\Booking;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-index">
    <p>
        <?= Html::a('Create Booking', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]);
    $dataProvider = new ActiveDataProvider([
        'query' => Booking::find(),
        'pagination' => [
            'pageSize' => 8,
        ],
    ]);
    ?>
    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama',
            'email:email',
            'tanggal',
            'service_name',
            'jam',
            'status',
            //'create_at',

            ['class' => 'yii\grid\ActionColumn','header'=>'Action Colomn'],
        ],
    ]); ?>


</div>
