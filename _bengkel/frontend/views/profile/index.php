<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\LinkPager;

//use yii\web\View; 
//use  frontend\models\Profile; 
/* @var $form yii\widgets\ActiveForm */
?>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #FFFFFF">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <?php
            echo \yii\widgets\ListView::Widget([
              'dataProvider'=>$tentangSaya,
              'layout'=> "<div class\"items\">{items}</div>",
              //'intemOptions'=>['class'=>'item'],
              'itemView'=>'_tentangSaya',
            ])
          ?>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Booking</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Profile</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="card">
                       <div class="card-header border-transparent">
                          <h3 class="card-title">Daftar Booking Saya</h3>
                        </div>
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table m-0">
                            <thead>
                            <tr>
                              <th>Nama</th> 
                              <th>Email</th>
                              <th>Nama Service</th>
                              <th>Tanggal Service</th>
                              <th>Jam Service</th>
                              <th>Status</th>
                              <th>Create At</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                                  echo \yii\widgets\ListView::Widget([
                                    'dataProvider'=>$listBooking,
                                    'layout'=> "<div class\"items\">{items}</div>",
                                    //'intemOptions'=>['class'=>'item'],
                                    'itemView'=>'_bookingList',
                                  ])
                              ?>
                            </tbody>
                          </table>
                          <?php echo LinkPager::widget([
                    'pagination'=> $listBooking->pagination
                    ]);
                    ?>
                        </div>
                        <!-- /.table-responsive -->
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                    <?php
                                  echo \yii\widgets\ListView::Widget([
                                    'dataProvider'=>$tentangSaya,
                                    'layout'=> "<div class\"items\">{items}</div>",
                                    //'intemOptions'=>['class'=>'item'],
                                    'itemView'=>'_profile',
                                  ])
                    ?>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->