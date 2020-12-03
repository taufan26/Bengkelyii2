<?php
use yii\helpers\Html;
use yii\grid\GridView;
?>
<div class="container-fluid" style="background-color: #ccccb3" >
	
<div class="container">
	<center><h1>BOOKING</h1></center>

	<div class="container" >
		<div class="row">
			<div class="col-md-3">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/carChecks.PNG" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> CAR CHECKS</h3>
								<input type="hidden" name="service_id" value="1">
								<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>

			
			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/tire_change.PNG" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Ganti Ban</h3>
								<input type="hidden" name="service_id" value="2">
								<?= Html::a('Booking', ['create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>


			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/oil_and_break_checks.png" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Ganti Oli & Rem</h3>
								<input type="hidden" name="service_id" value="3">
								<?= Html::a('Booking', ['create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/battery_change.png" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Ganti Aki Baterai</h3>
								<input type="hidden" name="service_id" value="4">
								<?= Html::a('Booking', ['create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>

			
			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/breakDownService.PNG" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Derek Servis</h3>
								<input type="hidden" name="service_id" value="5">
								<?= Html::a('Booking', ['create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>


			<div class="col-md-4">
			  <form action="serviceBookingHandler.php" method="post">
							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
							<img src="images/other_services.png" style="width:400px;height:300px;">
							<div class="caption" align="center">
								<h3 style="text-align: center;color:white"> Servis Lainnya</h3>
								<input type="hidden" name="service_id" value="6">
								<?= Html::a('Booking', ['create'], ['class' => 'btn btn-success']) ?>
							</div>
						
				</div>
			  </form>
				
			</div>
		</div>
	</div>

	
</div>