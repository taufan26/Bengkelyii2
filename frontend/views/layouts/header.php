<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
?>
<div class="wrap">
    <div class="row">
            <div class="col-md-12">
                <img src="images/main-logo.png" style="height: 70px; display: inline-block; margin-left:20px; float:left">  
                <h3 style="color: black;"><b>BENGKEL MASTER</b></h3>
                 <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        ['label' => 'Service', 'url' => ['/site/service']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Booking Online', 'url' => ['/site/login']];
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Booking Online', 'url' => ['/site/booking']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
            </div>                            
        </div>