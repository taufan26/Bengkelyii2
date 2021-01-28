<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
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
                                    <img src="<?=Url::to('@web/')?>images/slader-about1.png" style="height: 300px;" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1>Bengkel<span>Master</span></h1>
                                    <h2>Menjual Aksesoris</h2>
                                    <p>Menyediakan Berbagai barang yang terjamin Kebagusanya</p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?=Url::to('@web/')?>images/slader-about2.png" style="height: 300px;" class="girl img-responsive" alt="" />
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
					<h2 class="title text-center">CV. GARUDA SARANA SEJAHTERA</h2>
					<h4 style="text-align: center;"><b> VISI :</b></h4>

					<i> MENJADI PERUSAHAAN LAYANAN JASA SISTEM INFORMASI
					 	DAN TEKNOLOGI INFORMASI TERBAIK DAN TERPERCAYA DALAM SKALA
					  	NASIONAL MAUPUN INTERNASIONAL
					</i>
					
					<h4 style="text-align: center;"><b>MISI :</b></h4>
					
					<p> 
					- Sistem Informasi yang terintegrasi dan mudah digunakan
					<br>
					- Menyediakan sumber daya manusia terbaik dan profesional
					<br>
					- Menyediakan solusi terbaik kepada perusahaan sebagai mitra bisnis
					<br>
					- Mengembangkan kualitas sistem informasi dan teknologi informasi
					<br>
					- Memberi pelayanan yang ramah, terpercaya, dan bertanggungjawab
					<p>
				</div>
			</div>
			
			<div class="col-sm-9 padding-right">
				<div class="features_items" class="tab-pane fade active in"><!--features_items-->
					<h2 class="title text-center">CV. GARUDA SARANA SEJAHTERA</h2>
					<p>
					CV. Garuda Sarana Sejahtera (GSS) adalah Perusahaan yang bergerak di bidang Teknologi Informasi
					yang berfokus pada pelayanan Pembuatan Sistem Informasi, Pengelolaan dan pengadaan Software
					maupun Hardware IT Perusahaan. GSS berfokus pada pelayanan Perseorangan, Lembaga Organisasi,
					Lembaga Pendidikan, Lembaga Pemerintah, Usaha Mikro Kecil dan Menengah (UMKM), dan 
					perusahaan-perusahaan di dalam maupun di luar negeri. Perusahaan kami telah memiliki izin dan sudah 
					terdaftar di lembaga hukum Indonesia serta telah memiliki NIB. GSS awal dirintis sejak tahun 2010 dan 
					mengalami jatuh bangun sampai saat ini sehingga memiliki berbagai pengalaman yang sangat baik untuk 
					melaksanakan berbagai pekerjaan bidang IT pemrograman dan pada tahun 2019 GSS telah memiliki 
					team yang solid dan telah resmi memiliki Ijin Badan Usaha. Di Bidang IT Software House, Kami 
					melayani jasa pembutan website, aplikasi android, point of sales, desain grafis, sistem informasi, 
					company profile, aplikasi iOS, Iklan SEO Ads, ERP Perusahaan, Instalasi serta Maintenance Komputer 
					dan Jaringan, dan lain sebagainya. Di samping itu kami juga melayani jasa pelatihan di bidang IT serta 
					mengadakan atau menerima undangan berbagai seminar tentang IT khususnya bidang Pemrograman.
					</p>
					<br>
					<p>
					Dengan tim Profesional dan Berpengalaman, kami selalu mengutamakan kepuasan para pelanggan/mitra 
					dalam menjalankan pekerjaan dengan memberi jaminan garansi dan lain sebagainya. Dan kami terbuka 
					kerjasama dengan siapa saja untuk menjadikan Indonesia lebih maju ke depannya. Kantor kami berada di 
					Jl. Klipang Pesona Asri 3 Blok G1 No.6 Semarang
					</p>
					<br>
					<p style="text-align: center; color:blue;">Hormat Kami,</p>
					<h4 style="text-align: center; color:blue;">CV. GARUDA SARANA SEJAHTERA</h4>
				</div><!--features_items-->	
			</div>
		</div>
	</div>
</section>

