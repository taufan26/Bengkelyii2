<?php
use yii\helpers\html;
use yii\helpers\Url;

$this->title='Cart';
$this->params['breadcrumbs'][]=$this->title;
$url=Url::to(['site/sparepart']);
?>

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?=$url?>">Back</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Deskripsi</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $cart) { ?>
						<tr>
							<td class="cart_product">
								<a href=""><img height="70px" src="../../backend/web/uploads/<?=$cart->image?>" alt=""/></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$cart->nama?></a></h4>
								<p><?=$cart->deskripsi?></p>
							</td>
							<td class="cart_price">
								<p>RP.<?=$cart->harga?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">RP.<?=$cart->harga?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
							<br>
						</tr>
					<?php } ?>
					</tbody>

				</table>
				<div style="text-align:right; float:right; width:50%;">
				<?=Html::a('Checkout',['checkout']) ?>
				</div>
			</div>
		</div>
	</section> <!--/#cart_items--> 