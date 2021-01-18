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
            <img src="images/main-logo.png" style="height: 70px; display: inline-block; 
            margin-left:20px; float:left">  
            <h3 style="color: black;"><b>BENGKEL MASTER</b></h3>
            <br>
                <?php
                NavBar::begin([
                    'options' => [
                        'class' => 'navbar navbar-default navbar-inverse',
                    ],
                ]);
                $menuItems = [
                    ['label' => '<span class="glyphicon glyphicon-home"></span> HOME',
                    'url' => ['/site/index']],
                    ['label' => '<span class="glyphicon glyphicon-book"></span> ABOUT',
                     'url' => ['/site/about']],
                    ['label' => '<span class="glyphicon glyphicon-phone-alt"></span> CONTACT',
                     'url' => ['/site/contact']],
                    ['label' => '<span class="glyphicon glyphicon-wrench"></span> SERVICE',
                     'url' => ['/site/service']],
                ];
                if (Yii::$app->user->isGuest) {
                    $menuItems[]=
                    ['label' =>'<span class="glyphicon glyphicon-time"></span> Booking Online',
                     'url' => ['/site/login']];
                     $menuItems[]=
                    ['label' => '<span class="glyphicon glyphicon-shopping-cart"></span> Beli Sparepart',
                    'url' => ['/site/login']];
                    $menuItems[]=
                    ['label' => '<span class="fa fa-user-plus"></span> Signup',
                    'url' => ['/site/signup']];
                    $menuItems[]=
                    ['label' => '<span class="glyphicon glyphicon-phone">
                    </span> Login', 'url' => ['/site/login']];
                } else {
                    $menuItems[] = ['label' => '<span class="glyphicon glyphicon-time"></span> Booking Online', 'url' => ['/site/booking']];
                    $menuItems[] = ['label' => '<span class="glyphicon glyphicon-shopping-cart"></span> Beli Sparepart', 'url' => ['/site/sparepart']];
                    $menuItems[] = ['label' => '<span class="glyphicon glyphicon-user"></span> Profile(' . Yii::$app->user->identity->username . ')', 'url' => ['/profile/index']];
                    $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>';
                }
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-left'],
                    'items' => $menuItems,
                    'encodeLabels' => false,
                ]);
                NavBar::end();
            ?>
        </div>                            
    </div>
</div>