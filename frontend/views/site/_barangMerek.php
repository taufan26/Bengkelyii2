<?php
use yii\helpers\Url;
 ?>
<div class="col-sm-3">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img height="150px" src="../../backend/web/uploads/<?=$model->image?>" alt="" />
                <h2>RP.<?=$model->harga?></h2>
                <p><?=$model->nama?></p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
            
        </div>
    </div>
</div>