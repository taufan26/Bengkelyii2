 <?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

$urll = Url::to(['site/cart']);
 ?>

 <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li><a href="checkout.html">Checkout</a></li> 
                                        <li><a href="<?=$urll?>">Cart</a></li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->

    <section id="slider" style="background-color: #FFFFFF"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1>Bengkel<span>Master</span></h1>
                                    <h2>Menjual Sparepart</h2>
                                    <p>Menyediakan Berbagai barang yang terjamin Kebagusanya</p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?=Url::to('@web/')?>images/sparepart.jpg" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1>Bengkel<span>Master</span></h1>
                                    <h2>Menjual Aksesoris</h2>
                                    <p>Menyediakan Berbagai barang yang terjamin Kebagusanya</p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?=Url::to('@web/')?>images/aksesoris.png" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Promo Terbaru</h2>
                        <div class="shipping text-center"><!--shipping-->
							<img src="images/home/promo2.jpg" alt="" style="width:250px;height:250px;"/>
                        </div><!--/shipping-->
                        <div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt=""/>
						</div><!--/shipping-->
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tshirt" data-toggle="tab">Toyota</a></li>
                                <li><a href="#blazers" data-toggle="tab">Honda</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tshirt" >
                                <?php
                            echo \yii\widgets\ListView::Widget([
                                'dataProvider'=>$barangMerek1,
                                'layout'=> "<div class\"items\">{items}</div>",
                                //'intemOptions'=>['class'=>'item'],
                                'itemView'=>'_barangMerek',
                            ])
                            ?>
                            </div>
                            
                            <div class="tab-pane fade" id="blazers" >
                                <?php
                            echo \yii\widgets\ListView::Widget([
                                'dataProvider'=>$barangMerek2,
                                'layout'=> "<div class\"items\">{items}</div>",
                                //'intemOptions'=>['class'=>'item'],
                                'itemView'=>'_barangMerek',
                            ])
                            ?>
                            </div>
                        </div>
                    </div><!--/category-tab-->
                    <div class="features_items" class="tab-pane fade active in"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        <?php //foreach ($products as $product){ ?>
                            <?php
                            echo \yii\widgets\ListView::Widget([
                                'dataProvider'=>$barang,
                                'layout'=> "<div class\"items\">{items}</div>",
                                //'intemOptions'=>['class'=>'item'],
                                'itemView'=>'_barang',
                            ])
                            ?>
                    <?php //}?>
                <div class="row">
                <div class="well col-md-12" >
                    <?php echo LinkPager::widget([
                    'pagination'=> $barang->pagination
                    ]);
                    ?>
                </div>
                </div>
                    </div><!--features_items-->
                    
                </div>
            </div>
        </div>
    </section>