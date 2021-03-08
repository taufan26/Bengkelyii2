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
			<div class="col-md-4">
			<div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
					<div style="text-align:center;">
					<h4>Daftar Booking</h4>
					</div>
                    <tr>
                      <th>Nama</th> 
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                          echo \yii\widgets\ListView::Widget([
                            'dataProvider'=>$bookingList,
                            'layout'=> "<div class\"items\">{items}</div>",
                            //'intemOptions'=>['class'=>'item'],
                            'itemView'=>'_bookinglist',
                          ])
                      ?>  
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>				
			</div>			
			<div class="col-md-4">							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
					<img src="<?=Url::to('@web/')?>images/tire_change.png" style="width:400px;height:300px;">
					<div class="caption" align="center">
						<h3 style="text-align: center;color:white"> Ganti Ban</h3>
						<input type="hidden" name="service_id" value="2">
						<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-default add-to-cart'] ) ?>
					</div>						
				</div>				
			</div>
			<div class="col-md-3">							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
					<img src="<?=Url::to('@web/')?>img/service.jpg" style="width:400px;height:300px;">
					<div class="caption" align="center">
						<h3 style="text-align: center;color:white">Servis Berkala</h3>
						<input type="hidden" name="service_id" value="3">
						<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-default add-to-cart']) ?>
					</div>						
				</div>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">			
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
					<img src="<?=Url::to('@web/')?>images/battery_change.png" style="width:400px;height:300px;">
					<div class="caption" align="center">
						<h3 style="text-align: center;color:white"> Ganti Aki Baterai</h3>
						<input type="hidden" name="service_id" value="4">
						<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-default add-to-cart']) ?>
					</div>						
				</div>				
			</div>		
			<div class="col-md-4">							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
					<img src="<?=Url::to('@web/')?>images/oil_and_break_checks.png" style="width:400px;height:300px;">
					<div class="caption" align="center">
						<h3 style="text-align: center;color:white">Ganti Oli & Rem</h3>
						<input type="hidden" name="service_id" value="5">
						<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-default add-to-cart']) ?>
					</div>						
				</div>				
			</div>
			<div class="col-md-3">							
				<div class="thumbnail" style="background-color: #333;margin-top: 15px;">
					<img src="<?=Url::to('@web/')?>images/other_services.png" style="width:400px;height:300px;">
					<div class="caption" align="center">
						<h3 style="text-align: center;color:white"> Servis Lainnya</h3>
						<input type="hidden" name="service_id" value="6">
						<?= Html::a('Booking', ['booking/create'], ['class' => 'btn btn-default add-to-cart']) ?>
					</div>						
				</div>			
			</div>
		</div>
	</div>
</div>