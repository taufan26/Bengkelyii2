<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup" style="background-color: #FFFFFF">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin([
                'id' => 'form-signup',
                'type' => ActiveForm::TYPE_HORIZONTAL,
                'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
            ]); ?>

                <?= $form->field($model, 'username')->textInput(['id' => 'username-cbx']) ?>

                <?= $form->field($model, 'email') ?>
                
                <?= $form->field($model, 'password')->passwordInput(['id' => 'password-cbx']) ?>
                
                <div class="form-group row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-9">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
