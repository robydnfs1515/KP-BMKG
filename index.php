<?php
#load file _loader.php
#mengecek apakah ada parameter "halaman" di dalam url
include '_loader.php';
$setTemplate = true;
if (isset($_GET['halaman'])) {
    #pemanggilan halaman
    $halaman = $_GET['halaman'];
} else {
    #jika tidak ada, maka akan di ganti dengan "Beranda"
    $halaman = 'Beranda';
}
# Mengubah parameter halaman menjadi file
# Teknik Buffering dan di tamplak di bagian body (echo $halaman)
ob_start();
$file = '_halaman/' . $halaman . '.php';
if (!file_exists($file)) {
    include '_halaman/error.php';
} else {
    include $file;
}
$content = ob_get_contents();
ob_end_clean();
?>
<!DOCTYPE html>
<html lang="en">
<?php include '_layouts/head.php' ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php
        include '_layouts/header.php';
        include '_layouts/sidebar.php';
        ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <b><?= $judul ?></b>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?= url('beranda') ?>"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li><a href="#"> <?= $judul ?> </a></li>
                </ol>
            </section>

            <?php
            echo $content;
            ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
        include '_layouts/footer.php';
        include '_layouts/js.php';
        ?>
    </div>
</body>

</html>