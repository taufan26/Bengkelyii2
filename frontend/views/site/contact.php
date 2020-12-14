<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
     <div id="contact-page" class="container-fluid" style="background-color: #FFFFFF">
        <div class="bg">
            <div class="row">           
                <div class="col-sm-12">                         
                    <h2 class="title text-center">Hubungi <strong>Kami</strong></h2>
                    <div id="gmap" class="contact-map">
                                    <div class="row">   
                <div class="col-sm-8">
                    <div class="contact-form">
                        <div class="status alert alert-success" style="display: none"></div>

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ])?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Info Kontak</h2>
                        <address>
                            <p>Bengkel Master Inc.</p>
                            <p>Lohbener no 10, Indramayu, 45252</p>
                            <p>Indramyu, Jawa Barat, Indonesia</p>
                            <p>Mobile: +628987737688</p>
                            <p>Fax: (021) 3851193, 34830261,3846430</p>
                            <p>Email: bengkelmaster@gmail.com</p>
                        </address>
                    </div>
                </div> 
            </div>
        </div>                  
    </div>                   
</div>  
</div> 
 </div>

    