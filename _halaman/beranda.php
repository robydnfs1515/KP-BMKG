<?php
$title = "Beranda";
$judul = $title;
$session->pull("info")

?>
<?= $session->pull("info") ?>

<?= content_open($title = 'Informasi Beranda') ?>

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <a href="#"></a>
                <h3>14</h3>
                <p>Total Pegawai</p>
            </div>
            <div class="icon">
                <i class="ion ion-fork-repo"></i>
            </div>

        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>00</h3>

                <p>...</p>
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
                <h3>00</h3>

                <p>...</p>
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

<?= content_open() ?>
<center> <img src="./assets/Logo_BMKG_(2010).png" style="width: 20%; opacity: 50%;"> </center>

<?= content_close() ?>