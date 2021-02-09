<?php
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Laporan Booking';
$this->params['breadcrumbs'][] = $this->title;


$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
   'id',
   'nama',
   'email:email',
   [
    'attribute' => 'tanggal',
    'format' => ['date', 'd-M-Y'],
    ],
   'service_name',
   [
    'attribute'=>'jam',
    'format'=>['time','H:i a']
    ],
   'status',
   'create_at',

    ['class' => 'kartik\grid\ActionColumn','urlCreator'=>function(){return '#';}]
];

echo ExportMenu::widget([
    'dataProvider' => $listBooking,
    'columns' => $gridColumns,
    'exportConfig' => [
        ExportMenu::FORMAT_TEXT => false,
        ExportMenu::FORMAT_HTML => false,
        ExportMenu::FORMAT_EXCEL => false,
        ExportMenu::FORMAT_PDF => ['filename' => 'Laporan_Booking'.date('d-M-Y')],
    ],
    'filename' => 'Laporan_Booking '.date('d-M-Y'),
    
    'dropdownOptions' => [
        'label' => 'Export All',
        'class' => 'btn btn-outline-secondary'
    ]
]) . "<hr>\n".
GridView::widget([
    'dataProvider' => $listBooking,
    'columns' => $gridColumns,
]);
