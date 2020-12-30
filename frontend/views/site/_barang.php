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
                                                <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>RP.<?=$model->harga?></h2>
                                                <p><?=$model->nama?><br><?=$model->deskripsi?></p>
                                                <a href="<?php echo \yii\helpers\Url::to(['/cart/add']) ?>" class="btn btn-primary btn-add-to-cart">
                                                Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>