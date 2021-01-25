<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Promo */

$this->title = 'Update Promo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Promos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->nama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="promo-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
