<?php
$title = "Beranda";
$judul = $title;
$session->pull("info")

?>

<?= content_open($title = 'Informasi Beranda') ?>

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>1000</h3>

                <p>Daftar Mahasiswa</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>

        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>

        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>

        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
<br>

<!-- <?= content_open() ?>
<center> <img src="assets/LogoUnimalBaru.png" style="width: 20%; opacity: 50%;"> </center> 

<?= content_close() ?>