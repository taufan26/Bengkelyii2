<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Booking */

$this->title = 'Update Konfirmasi: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-update">

    <?= $this->render('_formKonfirmasi', [
        'model' => $model,
    ]) ?>

</div>
