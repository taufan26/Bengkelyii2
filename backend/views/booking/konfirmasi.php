<?php
use yii\helpers\Url;

$this->title = 'Konfirmasi';
$this->params['breadcrumbs'] = [['label' => $this->title]];
$url = Url::to(['booking/index']);
$urll = Url::to(['booking/create']);
?>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
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
                      <th>Status</th>
                      <th>Konfirmasi</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                          echo \yii\widgets\ListView::Widget([
                            'dataProvider'=>$bookingList,
                            'layout'=> "<div class\"items\">{items}</div>",
                            //'intemOptions'=>['class'=>'item'],
                            'itemView'=>'_konfirmasi',
                          ])
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
            </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->