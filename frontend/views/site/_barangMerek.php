<?php
use yii\helpers\Url;
use yii\helpers\Html;
 ?>
<div class="col-sm-3">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img height="150px" src="../../backend/web/uploads/<?=$model->image?>" alt="" />
                <h2>RP <?=$model->harga?></h2>
                <p><?=$model->nama?></p>
                <a class="btn btn-default add-to-cart" href="<?=Url::to(['/barang','id'=>$model->id])?>">
                    <i class="fa fa-info"></i>
                    Barang Detail
                </a>
            </div>            
        </div>
    </div>
</div>