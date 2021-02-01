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
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <h2><?=$barang->nama?></h2>
                            <h2><?=$barang->deskripsi?></h2>
                            <p>Stock: <?=$barang->stock?></p>
                            <span>
                                <span>Rp <?=Yii::$app->formatter->asDecimal($barang->harga)?></span>
                            </span>
                            <p><b>QTY:</b> <?=$barang->quantity?></p>  
                            <p><b>Deskripsi:</b> <?=$barang->deskripsi?></p>
                            <p><b>Condition:</b> <?=$barang->kondisi_barang?></p>
                            <p><b>Merek:</b> <?=$barang->merek?></p>
                            <p><b>Model:</b> <?=$barang->model?></p>    
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
            </div>
        </div>
    </div>
</section>