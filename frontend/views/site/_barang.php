<?php
use yii\helpers\Url;
 ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img height="250px" src="../../backend/web/uploads/<?=$model->image?>"/>
                                            <h2>RP.<?=$model->harga?></h2>
                                            <p><?=$model->nama?></p>

                                            <form action="<?=Url::to(['/site/cart'])?>" method="post">
                                                <input type="text" name="pid" value="<?=$model->id?>">
                                                <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </form>

                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>RP.<?=$model->harga?></h2>
                                                <p><?=$model->nama?><br><?=$model->deskripsi?></p>

                                                <form action="<?=Url::to(['/site/cart'])?>" method="post">
                                                    <input type="text" name="pid" value="<?=$model->id?>">
                                                    <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </form>

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