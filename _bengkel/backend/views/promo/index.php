<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PromoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Promos';
$this->params['breadcrumbs'][] = $this->title;

$gridpromo = [
    //['class' => 'kartik\grid\SerialColumn'],
    'id',
    'nama',
    //'img',
    'create_at',
    ['class' => 'kartik\grid\ActionColumn','header'=>'Action Colomn']
];

?>
<div class="promo-index">
    <?= GridView::widget([
        'dataProvider'=> $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridpromo,
        'resizableColumns'=>true,  
        'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
        'headerRowOptions' => ['class' => 'kartik-sheet-style'],
        'filterRowOptions' => ['class' => 'kartik-sheet-style'],
        'persistResize' => false,     
        'hover'=>true,
            'pager' => [
                'options'=>['class'=>'pagination'],   // set clas name used in ui list of pagination
                'prevPageLabel' => 'Previous',   // Set the label for the "previous" page button
                'nextPageLabel' => 'Next',   // Set the label for the "next" page button
                'firstPageLabel'=>'First',   // Set the label for the "first" page button
                'lastPageLabel'=>'Last',    // Set the label for the "last" page button
                'nextPageCssClass'=>'next',    // Set CSS class for the "next" page button
                'prevPageCssClass'=>'prev',    // Set CSS class for the "previous" page button
                'firstPageCssClass'=>'first',    // Set CSS class for the "first" page button
                'lastPageCssClass'=>'last',    // Set CSS class for the "last" page button
                'maxButtonCount'=>10,    // Set maximum number of page buttons that can be displayed
            ],      
      'panel' => [
          'heading'=>'<h3 class="panel-title"><i class="fa fa-image"></i> Promo</h3>',
          'type'=>'primary',
          'before'=>Html::a('<i class="fa fa-plus"></i> Tambah Promo', ['create'], ['class' => 'btn btn-primary'])         
      ],
    ]); ?>

</div>
