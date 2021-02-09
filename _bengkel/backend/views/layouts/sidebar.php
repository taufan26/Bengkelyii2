<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <img src="uploads/images.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <?php
            echo \hail812\adminlte3\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Dassboard Page', 'url' => ['site/index'], 'icon' => 'tachometer-alt',],
                    [
                        'label' => 'Booking online',
                        'icon' => 'calendar-alt',
                        'items' => [
                            ['label' => 'List Booking', 'url' => ['/booking/index'], 'icon' => 'tasks'],
                            ['label' => 'Konfirmasi booking', 'url' => ['/booking/konfirmasi'], 'icon' => 'fa fa-check'],
                        ]
                    ],
                    [
                        'label' => 'Sparepart',
                        'icon' => 'shopping-cart',
                        'items' => [
                            ['label' => 'List Sparepart', 'url' => ['/barang/index'], 'icon' => 'tasks'],
                            ['label' => 'Tambah Sparepart', 'url' => ['/barang/create'],'icon'=> 'wrench'],
                            ['label' => 'List promo', 'url' => ['/promo/index'], 'icon' => 'tasks'],
                            ['label' => 'Tambah promo', 'url' => ['/promo/create'],'icon'=> 'wrench'],
                        ]
                    ],
                    ['label' => 'User', 'iconStyle' => 'far','url' => ['user/index'], 'icon' => 'user',],
                    ['label' => 'Complaint & Feedback', 'iconStyle' => 'far','url' => ['contact/index'], 'icon'=>'comments'],
                    [
                        'label' => 'Cetak Laporan',
                        'icon' => 'print',
                        'items' => [
                            ['label' => 'Laporan Booking', 'url' => ['/laporan/index'], 'icon' => 'file'],
                            ['label' => 'Laporan Sparepart', 'url' => ['/laporan/barang'],'icon'=> 'file'],
                        ]
                    ],
                    ['label' => 'Yii2 PROVIDED', 'header' => true],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>