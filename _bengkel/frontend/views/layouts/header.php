<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
?>
<?php
NavBar::begin([
    'brandLabel' => '<img src="icon/favicon-16x16.png" class="pull-left"/>Bengkel Master',]
);
$menuItems = 
[
    ['label' => '<span class="glyphicon glyphicon-home"></span> HOME',
    'url' => ['/site/index']],
    [
        'label'=> '<span class="glyphicon glyphicon-book"></span> INFO',
        'items' =>
        [
            [
                'label' =>'<span class="glyphicon glyphicon-book"></span> TENTANG KAMI', 
                'url' => ['/site/about']
            ],
            [
                'label' =>'<span class="glyphicon glyphicon-phone-alt"></span> CONTACT US', 
                'url' => ['/site/contact']
            ],
            [
                'label' => '<span class="glyphicon glyphicon-wrench"></span> SERVICE', 
                'url' => ['/site/service']
            ],
        ],
    ]
];
if (Yii::$app->user->isGuest) {
    $menuItems[]=
    [
        'label' =>'<span class="glyphicon glyphicon-time"></span> BOOKING ONLINE',
        'url' => ['/site/login']
    ];
    $menuItems[]=
    [
        'label' => '<span class="glyphicon glyphicon-shopping-cart"></span> SPAREPART',
        'url' => ['/site/login']
    ];
    $menuItems[]=
    [
        'label' => '<span class="fa fa-user-plus"></span> SIGN UP',
        'url' => ['/site/signup']
    ];
    $menuItems[]=
    [
        'label' => '<span class="glyphicon glyphicon-phone">
        </span> LOGIN', 'url' => ['/site/login']
    ];
} else {
    $menuItems[] = ['label' => '<span class="glyphicon glyphicon-time"></span> BOOKING ONLINE', 'url' => ['/site/booking']];
    $menuItems[] = ['label' => '<span class="glyphicon glyphicon-shopping-cart"></span> SPAREPART', 'url' => ['/site/sparepart']];
    $menuItems[] = ['label' => '<span class="glyphicon glyphicon-user"></span> PROFILE(' . Yii::$app->user->identity->username . ')', 'url' => ['/profile/index']];
    $menuItems[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            'LOGOUT',
            ['class' => 'btn btn-link logout']
        )
        . Html::endForm()
        . '</li>';
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav '],
    'items' => $menuItems,
    'encodeLabels' => false,
]);
NavBar::end();
?>