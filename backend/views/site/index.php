<?php
use yii\helpers\Url;

$this->title = 'Dashboard';
$this->params['breadcrumbs'] = [['label' => $this->title]];
$url = Url::to(['booking/index']);
$surl = Url::to(['barang/index']);
$feedback = Url::to(['contact/index']);
$urll = Url::to(['booking/create']);
$urlll = Url::to(['barang/create']);
$uurl = Url::to(['user/index']);
?>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$booking['cms']?></h3>

                <p>Jumlah Booking</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=$url?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$barang['brg']?></h3>

                <p>Jumlah Sparepart</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=$surl?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=$mail['mal']?></h3>

                <p>Complaint & Feedback</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?=$feedback?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$model['mdl']?></h3>

                <p>Jumlah User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
              <a href="<?=$uurl?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Booking Terbaru</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th> 
                      <th>Email</th>
                      <th>Nama Service</th>
                      <th>Tanggal Service</th>
                      <th>Jam Service</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                          echo \yii\widgets\ListView::Widget([
                            'dataProvider'=>$bookingList,
                            'layout'=> "<div class\"items\">{items}</div>",
                            //'intemOptions'=>['class'=>'item'],
                            'itemView'=>'_bookingList',
                          ])
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="<?=$urll?>" class="btn btn-sm btn-info float-left">Tambah Booking Baru</a>
                <a href="<?=$url?>" class="btn btn-sm btn-secondary float-right">Lihat Semua Booking</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Sparepart yang Baru Ditambahkan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th> 
                      <th>Deskripsi</th>
                      <th>Harga</th>
                      <th>Jumlah Barang</th>
                      <th>Stok Barang</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                          echo \yii\widgets\ListView::Widget([
                            'dataProvider'=>$barangList,
                            'layout'=> "<div class\"items\">{items}</div>",
                            //'intemOptions'=>['class'=>'item'],
                            'itemView'=>'_barangList',
                          ])
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="<?=$urlll?>" class="btn btn-sm btn-info float-left">Tambah Sparepart Baru</a>
                <a href="<?=$surl?>" class="btn btn-sm btn-secondary float-right">Lihat Semua Sparepart</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->