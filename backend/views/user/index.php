<?php

use backend\models\User;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;

$gridColumns = [
    'id',
    'username',
    //'auth_key',
    //'password_hash',
    //'password_reset_token',
    'email:email',
    //'status',
    //'created_at',
    //'updated_at',
    //'verification_token',

    ['class' => 'kartik\grid\ActionColumn'],
];
?>
<div class="user-index">

<?= GridView::widget([
        'dataProvider'=> $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'resizableColumns'=>true,
        'exportConfig'=> [
            GridView::EXCEL => [
                'label' => Yii::t('app', 'Excel'),
                'iconOptions' => ['class' => 'text-success'],
                'showHeader' => true,
                'showPageSummary' => true,
                'showFooter' => true,
                'showCaption' => true,
                'filename' => Yii::t('app', 'Export_User'),
                'alertMsg' => Yii::t('app', 'The EXCEL export file will be generated for download.'),
                'options' => ['title' => Yii::t('app', 'Microsoft Excel 95+')],
                'mime' => 'application/vnd.ms-excel',
                'config' => [
                    'worksheet' => Yii::t('app', 'ExportWorksheet'),
                    'cssFile' => ''
                ]
            ],
            GridView::PDF => [
                'label' => Yii::t('app', 'PDF'),
                'showHeader' => true,
                'showPageSummary' => true,
                'showFooter' => true,
                'showCaption' => true,
                'filename' => Yii::t('app', 'Export_User'),
                'alertMsg' => Yii::t('app', 'The PDF export file will be generated for download.'),
                'options' => ['title' => Yii::t('app', 'Portable Document Format')],
                'mime' => 'application/pdf',
                'config' => [
                    'mode' => 'c',
                    'format' => 'A4-L',
                    'destination' => 'D',
                    'marginTop' => 20,
                    'marginBottom' => 20,
                    'cssInline' => '.kv-wrap{padding:20px;}' .
                        '.kv-align-center{text-align:center;}' .
                        '.kv-align-left{text-align:left;}' .
                        '.kv-align-right{text-align:right;}' .
                        '.kv-align-top{vertical-align:top!important;}' .
                        '.kv-align-bottom{vertical-align:bottom!important;}' .
                        '.kv-align-middle{vertical-align:middle!important;}' .
                        '.kv-page-summary{border-top:4px double #ddd;font-weight: bold;}' .
                        '.kv-table-footer{border-top:4px double #ddd;font-weight: bold;}' .
                        '.kv-table-caption{font-size:1.5em;padding:8px;border:1px solid #ddd;border-bottom:none;}',
                    'options' => [
                        'title' => Yii::t('app', 'Laporan User'),
                        'subject' => Yii::t('app', 'PDF export generated by kartik-v/yii2-grid extension'),
                        'keywords' => Yii::t('app', 'krajee, grid, export, yii2-grid, pdf')
                    ],
                    'contentBefore'=>'',
                    'contentAfter'=>''
                ]
            ],
        ],       
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
          'heading'=>'<h3 class="panel-title"><i class="fa fa-user-circle "></i> Customer</h3>',
          'type'=>'success',
      ],
    ]); ?>

</div>
