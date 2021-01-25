<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Promo */

$this->title = 'Create Promo';
$this->params['breadcrumbs'][] = ['label' => 'Promos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promo-create">
    <?= $this->render('_form', [
        'model' => $model,  
    ]) ?>

</div>
