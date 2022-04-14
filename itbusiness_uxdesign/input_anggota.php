<?php
// krs diganti jadi KTM/KRS/surat keterangan aktif
//kelas diganti jadi semester

include_once "../../../koneksi.php";
include_once "../sesi.php";

$email_ketua = $_SESSION['email_ketua'];
$level = $_SESSION['lomba']; 
if($level == 'IT Business' || $level == 'UX Design'){

$result = mysqli_query($conn, "SELECT * FROM kompetisi WHERE email_ketua='$email_ketua'");


while ($c = mysqli_fetch_array($result)){
    $id_tim = $c['id'];
    $email_ketua = $c['email_ketua'];
    $nama_tim = $c['nama_tim'];
    $lomba = $c['lomba'];
    $instansi = $c['instansi'];
    $npm_ketua = $c['npm_ketua'];
    $nama_ketua = $c['nama_ketua'];
    $sql = mysqli_query ($conn,"SELECT * FROM anggota_tim WHERE id_tim='$id_tim'");
    $anggota = mysqli_num_rows($sql);
    $hasil = $anggota + 1 ;
    $status_anggota = 0;
    while ($d = mysqli_fetch_array($sql)){
        $status_anggota = $d['status_anggota'];
    }

}
?>

<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" href="../../../assets/pictures/logo/tf.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Input Anggota Tim</title>
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
                    <a href="" class="simple-text">
                        <?php echo $nama_tim ?>
                    </a>
                </div>
                <ul class="nav">
                    <li>
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
                    <li class="nav-item active">
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
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo">Input Anggota</a>
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
                        <div class="col-md-12">
                            <div class="card">
                                <?php 
                                    if($status_anggota <= 1 ){// pendaftaran masih dibuka
                                        if($hasil < 3){ //jika anggota kurang dari 3, lakukan input anggota
                                ?>
                                <div class="card-header">
                                    <h4 class="card-title">Input Anggota ke- <?php echo $hasil; ?> </h4>
                                    <p class="text-muted">Lengkapi data yang sudah valid</p>
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <form action="simpan/simpan_anggota.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-4 px-3">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" value="<?php echo $id_tim ?>" name="id_tim" required>

                                                    <label>Nama Tim</label>
                                                    <input type="text" class="form-control" value="<?php echo $nama_tim ?>" readonly required>
                                                    
                                                    <input type="hidden" class="form-control" value="<?php echo $nama_tim ?>"required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-3">
                                                <div class="form-group">
                                                    <label>Kategori Lomba</label>
                                                    <input type="text" class="form-control" disabled=""  value="<?php echo $lomba ?>">
                                            
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-3">
                                                <div class="form-group">
                                                    <label>Anggota ke</label>
                                                    <input type="text" class="form-control" name="anggota_ke" disabled=""  value="<?php echo $hasil; ?>" required>

                                                    <input type="hidden" class="form-control" name="anggota_ke" value="<?php echo $hasil; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 px-3">
                                                <div class="form-group">
                                                    <label>NPM / NIM Anggota</label>
                                                    <input type="text"  class="form-control" name="npm_anggota" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 px-3">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama_anggota" required>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 px-3">
                                                <div class="form-group">
                                                    <label>Jurusan</label>
                                                    <input type="text" class="form-control" name="jurusan_anggota" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-3">
                                                <div class="form-group">
                                                    <label>Semester/Tingkat/Kelas</label>
                                                    <input type="text" class="form-control" name="kelas_anggota" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 px-3">
                                                <div class="form-group">
                                                    <label>No.Handphone</label>
                                                    <input type="text" class="form-control" name="no_hp_anggota" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-3">
                                                <div class="form-group">
                                                    <label>ID Line</label>
                                                    <input type="text" class="form-control" name="id_line_anggota" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 px-3">
                                                <div class="form-group">
                                                    <label>
                                                        <strong class="d-block">Upload KTM / KRS / Surat Keterangan Aktif</strong>
                                                        <small>Format File Berupa PDF</small>
                                                    </label>
                                                    <input type="file" class="form-control" name="krs_anggota" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profil</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                                <?php 
                                        } elseif($status_anggota == 2){ //anggota sama dengan 3 atau lebih maka anggota telah tercukupi
                                ?>
                                <div class="card-header">
                                    <h4 class="card-title">Anggota Telah Mencapai Batas Maksimum</h4>
                                    <p class="text-muted">Setiap tim memiliki maksimal 2 anggota dan  1 ketua</p>
                                </div>
                                <?php 
                                        } 
                                    }else{ //pengumpulan berkas telah ditutup
                                ?>
                                <div class="card-header">
                                    <h4 class="card-title">Pengisian dan Pengumpulan Berkas Data Anggota Telah Ditutup</h4>
                                    <p class="text-muted">Batas pengumpulan berkas tanggal 18 Maret 2021</p>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
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
