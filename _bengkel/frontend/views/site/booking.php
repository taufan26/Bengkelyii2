<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

?>
<div class="container-fluid" style="background-color: #ECF0F1" >
	
<div class="container">
	<center><h1>BOOKING ONLINE</h1></center>

	<div class="container" >
		<div class="row">
			<div class="col-md-3">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="<?=Url::to('@web/')?>images/carChecks.PNG" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Service Berkala</h3>
								<input type="hidden" name="service_id" value="1">
								<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>

			
			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="<?=Url::to('@web/')?>images/tire_change.PNG" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Ganti Ban</h3>
								<input type="hidden" name="service_id" value="2">
								<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>


			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="<?=Url::to('@web/')?>images/oil_and_break_checks.png" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Ganti Oli & Rem</h3>
								<input type="hidden" name="service_id" value="3">
								<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="<?=Url::to('@web/')?>images/battery_change.png" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Ganti Aki Baterai</h3>
								<input type="hidden" name="service_id" value="4">
								<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>

			
			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="<?=Url::to('@web/')?>images/breakDownService.PNG" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Derek Servis</h3>
								<input type="hidden" name="service_id" value="5">
								<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>


			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="<?=Url::to('@web/')?>images/other_services.png" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Servis Lainnya</h3>
								<input type="hidden" name="service_id" value="6">
								<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>
		</div>
	</div>

	
</div>