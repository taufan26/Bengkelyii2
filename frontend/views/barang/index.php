<?php
use yii\helpers\html;
use yii\helpers\Url;

$this->title='Detail';
$this->params['breadcrumbs'][]=$this->title;
$url=Url::to(['site/sparepart']);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                <li><a href="<?=$url?>">Back</a></li>
                <li class="active">Barang Detail</li>
                </ol>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="../../backend/web/uploads/<?=$barang->image?>" alt="">
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">
                           
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item">
                                        <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item active">
                                        <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    
                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                                </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <h2><?=$barang->nama?></h2>
                            <p>Stock: <?=$barang->stock?></p>
                            <img src="images/product-details/rating.png" alt="">
                            <span>
                                <span>RP <?=$barang->harga ?></span>
                                <label>Quantity:</label>
                                <input type="text" value="3">
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </button>
                            </span>
                            <p><b>Deskripsi:</b> <?=$barang->deskripsi?></p>
                            <p><b>Condition:</b> <?=$barang->kondisi_barang?></p>
                            <p><b>Merek:</b> <?=$barang->merek?></p>
                            <p><b>Model:</b> <?=$barang->model?></p>
                            <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt=""></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
            </div>
        </div>
    </div>
</section>