<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Booking */

$this->title = 'Create Booking';
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
