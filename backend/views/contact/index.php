<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Complaint & Feedback';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-form-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'email:email',
            'subject',
            'body:ntext',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {delete}' ],
        ],
    ]); ?>


</div>
