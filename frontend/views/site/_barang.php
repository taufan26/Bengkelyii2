<?php
use yii\helpers\Url;
use yii\helpers\Html;
 ?>
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img height="250px" src="../../backend/web/uploads/<?=$model->image?>"/>
                <h2>Rp <?=Yii::$app->formatter->asDecimal($model->harga)?></h2>
                <p><?=$model->nama?></p>
            </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li>
                    <a class="btn btn-default add-to-cart" href="<?=Url::to(['/barang','id'=>$model->id])?>">
                        <i class="fa fa-info"></i>
                        Barang Detail
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>