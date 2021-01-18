<?php
use yii\helpers\Url;
use yii\helpers\Html;
 ?>
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img height="250px" src="../../backend/web/uploads/<?=$model->image?>"/>
                <h2>RP.<?=$model->harga?></h2>
                <p><?=$model->nama?></p>
                    <p class="btn btn-default add-to-cart">
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                </p>
            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>RP.<?=$model->harga?></h2>
                    <p><?=$model->nama?><br><?=$model->deskripsi?></p>
                    <a class="btn btn-default add-to-cart"
                        href="<?=Url::to(['add-to-cart','id'=>$model->id])?>">
                        <i class="fa fa-shopping-cart"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li>
                    <a href="#">
                    <i class="fa fa-plus-square"></i>
                    Add to wishlist
                    </a>
                </li>
                <li>
                    <a href="<?=Url::to(['/barang','id'=>$model->id])?>">
                    <i class="fa fa-info"></i>
                    Barang Detail
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>