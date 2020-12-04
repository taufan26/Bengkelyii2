<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Booking */

$this->title = 'Booking';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
