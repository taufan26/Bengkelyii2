<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Service';
$this->params['breadcrumbs'][] = $this->title;
?>

<div style="background-color: #FFFFFF">
		<center><h1 style="margin-top: 100px;">LAYANAN MANA YANG ANDA BUTUHKAN?</h1></center>
		<center><h4 style="margin-top: 50px;">Setiap jenis layanan akan kami berikan untuk Anda.<br> Sebutkan saja jenis layanan mobil <br> yang Anda inginkan saat memesan.<br> Layanan itu akan kami berikan untuk Anda.</h4></center>
	</div>
	<div class="container" style="background-color: #FFFFFF">
		<div class="row">
			<div class="col-md-4">
				<center>
					<div style="height: 100px;">
						<img src="<?=Url::to('@web/')?>images/dedicatedMechanics.png">
						<h3>MEKANIK BERDEDIKASI</h3>
					</div>
					<h4 style="margin-top: 100px;">Servis mobil berat bisa dilakukan<br> jika Anda membutuhkan. <br> Untuk itu kami mendedikasikan <br> mekanik untuk tugas Anda.</h4>
				</center>
			</div>
			<div class="col-md-4">
				<center>
					<div style="height: 100px;">
						<img src="<?=Url::to('@web/')?>images/carChecks.png">
						<h3>PERIKSA MOBIL</h3>
					</div>
					<h4 style="margin-top: 100px;">Jenis pemeriksaan mobil <br> yang Anda inginkan. <br>Kami juga akan menyediakannya.</h4>
				</center>
			</div>
			<div class="col-md-4">
				<center>
					<div style="height: 100px;">
						<img src="<?=Url::to('@web/')?>images/oilAndBreakChecks.png">
						<h3>OLI & PENGECEKAN REM</h3>
					</div>
					<h4 style="margin-top: 100px;">Oli mesin, Oli Kemudi, layanan rotasi ban <br> juga kami sediakan.</h4>
					
				</center>
				
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-4">
				<center>
					<div style="height: 100px;">
						<img src="<?=Url::to('@web/')?>images/breakdownService.png">
						<h3>LAYANAN KERUSAKAN</h3>
					</div>
					<h4 style="margin-top: 100px;">Jika Anda terjebak di suatu tempat, Cukup hubungi <be> yang digunakan untuk layanan derek</h4>
					
				</center>
				
			</div>
			<div class="col-md-4">
				<center>
					<div style="height: 100px;">
						<img src="<?=Url::to('@web/')?>images/tireChange.png">
						<h3>PENGGANTIAN BAN</h3>
					</div>
					<h4 style="margin-top: 100px;">Kami juga menyediakan pergantian ban dan rotasi ban</h4>
					
				</center>
				
			</div>
			<div class="col-md-4">
				<center>
					<div style="height: 100px;">
						<img src="<?=Url::to('@web/')?>images/batteryChange.png">
						<h3>PENGGANTIAN AKI BATERAI</h3>
					</div>
					<h4 style="margin-top: 100px;">Kami menyediakan aki baterai berkualitas untuk pertukaran</h4>
					
				</center>
				
			</div>
		</div>
	</div>