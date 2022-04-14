<?php
// krs diganti jadi KTM/KRS/ surat keterangan aktif

include_once "../koneksi.php";
// include_once "../sesi.php";

$email_ketua = $_SESSION['email_ketua'];
$level = $_SESSION['lomba']; 
if($level == 'IT Business' || $level == 'UX Design'){


$result = mysqli_query($conn, "SELECT * FROM kompetisi WHERE email_ketua='$email_ketua'");

$status_berkas1 = 0;

while ($c = mysqli_fetch_array ($result)){
    $id_tim = $c['id'];
    $nama_tim = $c['nama_tim'];
    $lomba = $c['lomba'];
    $status_krs = $c['status_krs'];
    $status_berkas1 = $c['status_berkas1'];
    $status_pembayaran = $c['status_pembayaran'];
    $status_tim = $c['status_tim'];

}

$sql = mysqli_query($conn, "SELECT * FROM anggota_tim WHERE id_tim='$id_tim'");
$anggota_ke = 0;
while ($d = mysqli_fetch_array ($sql)){
    $id_tim = $d['id_tim'];
    $anggota_ke = $d['anggota_ke'];
}



?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" href="../../../assets/pictures/logo/tf.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../../assets/img/maskot.png" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <span class="simple-text"> 
                        <?php echo $nama_tim ?>
                    </span>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./profil_tim.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Profil Tim</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./input_anggota.php">
                            <i class="nc-icon nc-badge"></i>
                            <p>Input Anggota</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./upload_berkas.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Upload Berkas</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./upload_pembayaran.php">
                            <i class="nc-icon nc-money-coins"></i>
                            <p>Upload Pembayaran</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo" data-toggle="modal" data-target="#myModal1">
                                    <span class="no-icon">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 order-md-2">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title"><?php echo $nama_tim ?></h4>
                                    <p class="card-category"><?php echo $lomba ?></p>
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <!--untuk info terbaru-->
                                    <p>Pastikan memasukan data dan berkas yang sudah valid, karena tidak ada update data</p><hr>
                                    <p>Jika salah memasukan data dan berkas hubungi rubenwernerhutapea (line) atau 08982215812 (whatsapp)</p><hr>
                                    <p>Biaya pendaftaran sebesar Rp. 75.000,-/Tim dan dikirimkan ke No.Rek : 5211235251 (BCA) | a.n Liyana Kartina</p><hr>
                                    <?php 
                                        if($lomba == 'IT Business'){
                                    ?>
                                        <p><a href="https://chat.whatsapp.com/ElerSZJpqkpHQePT2i2PsO">Klik disini</a> untuk bergabung dengan grup whatsapp IT Business. Setiap ketua tim wajib masuk ke dalam grup.</p><hr>
                                    <?php } else{ ?>
                                        <p><a href="https://chat.whatsapp.com/Dz465whNf6S1t7wTUyDJ7j">Klik disini</a> untuk bergabung dengan grup whatsapp UX Design. Setiap ketua tim wajib masuk ke dalam grup.</p><hr>
                                    <?php } ?>
                                    <p>Pengumpulan berkas dan bukti pembayaran sampai 21 Maret 2021</p><hr>
                                    <?php
                                        if($status_tim == 2){
                                    ?>
                                    <p>[UPDATE] Selamat Tim Anda Lolos ke Babak Final</p><hr>
                                    <?php 
                                        } elseif($status_tim == 3){ 
                                    ?>
                                    <p>[UPDATE] Maaf, Tim Anda Tidak Lolos ke Babak Final</p><hr>
                                    <?php
                                        } else{}
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <div class="card  card-tasks">
                                <div class="card-header ">
                                    <h4 class="card-title">Progress</h4>
                                    <p class="card-category">Berikut data yang harus dilengkapi</p>
                                </div>
                                <div class="card-body ">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?php
                                                            if($status_krs == 1){
                                                        ?>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                        <?php } else{ ?>
                                                            <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                        <?php } ?>
                                                    </td>
                                                    <td>Upload KTM / KRS / Surat Keterangan Aktif Ketua Tim</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php
                                                            if($anggota_ke >= 1){
                                                        ?>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                        <?php } else{ ?>
                                                            <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                        <?php } ?>
                                                    </td>
                                                    <td>Input Data Diri Anggota Tim</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php
                                                            if($status_berkas1 == 1){
                                                        ?>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                        <?php } else{ ?>
                                                            <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                        <?php } ?>
                                                    </td>
                                                    <td>Upload Berkas Persyaratan Babak Penyisihan</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php
                                                            if($status_pembayaran == 1){
                                                        ?>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" checked>
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                        <?php } else{ ?>
                                                            <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                        <?php } ?>
                                                    </td>
                                                    <td>Upload Bukti Pembayaran Kompetisi</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <?php
                        require('tabel.php');
                    ?>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright text-center">
                        Copyright &copy; 2021 All right reserved | Biro PTI
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <!-- Mini Modal -->
    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="modal-profile">
                        <i class="nc-icon nc-lock-circle-open"></i>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <p>Yakin Ingin Keluar?</p>
                </div>
                <div class="modal-footer">
                    <a href="?aksi=logout"><button type="button" class="btn btn-lbtn-simple">Sure</button></a>
                    <button type="button" class="btn btn-lbtn-simple" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
    
</body>
<!--   Core JS Files   -->
<script src="../../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../../assets/js/plugins/bootstrap-switch.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>

</html>

<?php 

}else{
    echo "Anda Tidak Punya Akses Pada Halaman IT Business atau UX Design";
    exit;
}
?>