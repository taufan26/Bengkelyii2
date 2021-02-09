<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Sparepart', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="barang-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
            [
                'attribute'=>'image',
                'format'    => 'raw',
                'value'     => function ($model)
                {
                    $foto =$model->image;
                    return "<img src='uploads/$foto' width='100'>"; 
                }
            ],
            'status',
            'create_at',
        ],
    ]) ?>

</div>
