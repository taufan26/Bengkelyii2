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

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model,'tanggal')->input('date')?> 

    <?= $form->field($model, 'service_name')->dropDownList(
            ['Car Checks' => 'Car Checks', 'Ganti Ban' => 'Ganti Ban', 'Ganti Oli & Rem' => 'Ganti Oli & Rem', 'Ganti Aki Baterai'=>'Ganti Aki Baterai', 'Derek service' => 'Derek service', 'Service Lainnya' => 'Service Lainnya']) ?>

    <?= $form->field($model, 'jam')->input('time') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
