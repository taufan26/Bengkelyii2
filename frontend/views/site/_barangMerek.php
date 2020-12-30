<?php
use yii\helpers\Url;
use yii\helpers\Html;
 ?>
<div class="col-sm-3">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img height="150px" src="../../backend/web/uploads/<?=$model->image?>" alt="" />
                <h2>RP.<?=$model->harga?></h2>
                <p><?=$model->nama?></p>
                <?=Html::a('Add to cart',['add-to-cart','id'=>$model->id], ['class'=>'btn btn-success']) ?>
            </div>
            
        </div>
    </div>
</div>