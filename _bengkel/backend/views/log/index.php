<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use kartik\grid\GridView;
use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Log';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'level',
            // 'category',
            // 'log_time:datetime',
            [
                'attribute' => 'log_time',
                'value'     => function ($model) {
                    if ($model->log_time == 0) {
                        return "00-00-0000";
                    } else {
                        return Yii::$app->formatter->asDate($model->log_time, 'php:d M Y H:i:s');;
                    }
                },
                'filter' => DateRangePicker::widget([

                    'model' => $searchModel,

                    'attribute' => 'log_time',

                    'convertFormat' => true,

                    'pluginOptions' => [

                        'locale' => [

                            'format' => 'Y-m-d'

                        ],

                    ],

                ]),

            ],
            // [
            //     'attribute' => 'log_time',
            //     'value'     => function ($model)
            //     {
            //         if ($model->log_time == 0) {
            //             return "00-00-0000 00:00:00";
            //         } else {
            //             return Yii::$app->formatter->asDate($model->log_time, 'php:d M Y H:i:s');;
            //         }
            //     }
            // ],
            'prefix:ntext',
            'message:ntext',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
        'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
        'headerRowOptions' => ['class' => 'kartik-sheet-style'],
        'filterRowOptions' => ['class' => 'kartik-sheet-style'],
        //'pjax' => true, // pjax is set to always true for this demo
        // set your toolbar
        'toolbar' =>  [

            '{export}',
            '{toggleData}',
        ],
        'toggleDataContainer' => ['class' => 'btn-group mr-2'],
        // set export properties
        'export' => [
            'fontAwesome' => true
        ],
        // parameters from the demo form
        //'bordered' => $bordered,
        //'striped' => $striped,
        //'condensed' => $condensed,
        //'responsive' => $responsive,
        //'hover' => $hover,
        //'showPageSummary' => $pageSummary,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '',
        ],
        'persistResize' => false,
        'toggleDataOptions' => ['minCount' => 100],
        'exportConfig' => [
            GridView::EXCEL =>  [
                'filename' => 'Data_Log',
                'showPageSummary' => true,
            ]

        ],
    ]); ?>
</div>