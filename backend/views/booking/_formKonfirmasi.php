<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use kartik\time\TimePicker;


/* @var $this yii\web\View */
/* @var $model backend\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

     <?= $form->field($model, 'status')->dropDownList(
            ['Menunggu Konfirmasi' => 'Menunggu Konfirmasi', 'Terkonfirmasi' => 'Terkonfirmasi', 'Di Tolak' => 'Di Tolak']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
