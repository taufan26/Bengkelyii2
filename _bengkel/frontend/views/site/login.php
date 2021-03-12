<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login" style="background-color: #FFFFFF">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
        <p>Please fill out the following fields to login:</p>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'type' => ActiveForm::TYPE_HORIZONTAL,
                'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
            ]); ?>

                <?= $form->field($model, 'username')->textInput(['id' => 'username-cbx']) ?>
                <?= $form->field($model, 'password')->passwordInput(['id' => 'password-cbx']) ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>           
                    <?= Html::a('Klik disi Jika anda Lupa Password.', ['site/request-password-reset']) ?><br>
                    <?= Html::a('Klik disi Jika anda belum verifikasi akun.', ['site/resend-verification-email']) ?>
                <div class="form-group row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-9">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
