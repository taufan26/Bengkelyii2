        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="uploads/<?=$model->img_profile?>"
                       alt="User profile picture"
                       width="155px"
                       height="155px">
                </div>

                <h3 class="profile-username text-center"><?=$model->nama_lengkap?></h3>

                <p class="text-muted text-center"><?=$model->email?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tentang Saya</h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong>Tanggal Lahir</strong>

                <p class="text-muted">
                <?=Yii::$app->formatter->asDate($model->tanggal_lahir)?>
                </p>

                <hr>

                <strong>Alamat</strong>

                <p class="text-muted"><?=$model->alamat?></p>

                <hr>

                <strong>jenis Kelamin</strong>

                <p class="text-muted"><?=$model->jenis_kelamin?></p>

                <hr>

                <strong>Notes</strong>

                <p class="text-muted"><?=$model->note?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>