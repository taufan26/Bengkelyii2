<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
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
                    ['label' => 'Dassboard Page', 'url' => ['site/index'], 'iconStyle' => 'far'],
                    [
                        'label' => 'Booking online',
                        'items' => [
                            ['label' => 'Lihat Antrian', 'iconStyle' => 'far'],
                            ['label' => 'Konfirmasi Antrian', 'iconStyle' => 'far'],
                            ['label' => 'Tabah/Hapus Antrian', 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Penjualan Sparepart',
                        'items' => [
                            ['label' => 'List Sparepart', 'url' => ['/barang/index'], 'iconStyle' => 'far'],
                            ['label' => 'Tambah Sparepart', 'url' => ['/barang/create'], 'iconStyle' => 'far'],
                            ['label' => 'Sparepart', 'iconStyle' => 'far'],
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