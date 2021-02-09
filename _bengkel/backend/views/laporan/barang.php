<?php
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Laporan Sparepart';
$this->params['breadcrumbs'][] = $this->title;

$gridbarang = [
    ['class' => 'kartik\grid\SerialColumn'],
    'id',
    'nama',
    'deskripsi:ntext',
    'quantity',
    [
        'attribute'=>'harga',
        'format'=>['decimal']
        ],
    'stock',
    'merek',
    'model',
    'kondisi_barang',
    //'image',
    //'status',
    'create_at',


    ['class' => 'kartik\grid\ActionColumn','urlCreator'=>function(){return '#';}]
];

echo ExportMenu::widget([
    'dataProvider' => $listBarang,
    'columns' => $gridbarang,
    'exportConfig' => [
        ExportMenu::FORMAT_TEXT => false,
        ExportMenu::FORMAT_HTML => false,
        ExportMenu::FORMAT_EXCEL => false,
        ExportMenu::FORMAT_PDF => ['filename' => 'Laporan_Sparepart'.date('d-M-Y H:i a')],
    ],
    'filename' => 'Laporan_Sparepart'.date('d-M-Y H:i a'),
    'dropdownOptions' => [
        'label' => 'Export All',
        'class' => 'btn btn-outline-secondary'
    ]
]) . "<hr>\n".
GridView::widget([
    'dataProvider' => $listBarang,
    'columns' => $gridbarang,
]);
