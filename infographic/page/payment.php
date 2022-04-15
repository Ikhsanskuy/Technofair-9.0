<?php
session_start();
include "../../koneksi.php";
$login = mysqli_query($conn, "SELECT * FROM tambah WHERE username ='$_SESSION[username]'");
$data = mysqli_fetch_array($login);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - SB Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="../page.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="home.php">TECHNOFAIR 9.0</a>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
      <label style="color:aliceblue;"><?php
          echo $data['nama_tim'];
          ?>
          </label>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <!-- <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li> -->
          <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
            <!-- <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
              </a> -->
            <a class="nav-link" href="home.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
              Home
            </a>
            <a class="nav-link" href="myteam.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
              My Team
            </a>
            <a class="nav-link" href="payment.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill-wave"></i></div>
              Payment
            </a>
            <a class="nav-link" href="file.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
              File
            </a>
          </div>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">ini payment</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">ini payment</li>
          </ol>
          <div class="timeline">

          
            <h1>status pembayaran</h1>
            

            
        
        <?php
        
        $pembayaran = $data['pembayaran'];

            $kategori = $data['stat_tf'];

            if($kategori =='1'){

                echo '<h3>pembayaran telah berhasil silahkan klik link ini</h3>
                <a href="registered.php">link</a>';        
            }

            elseif($kategori =='0'){
              echo '<h3>silahkan upload pembayaran</h3>';

              if($pembayaran ){
                echo '<h1 style="color:green;">Pembayaran berhasil di upload, mohon ditunggu</h1>';
              }
            }

            else{
              echo '<h3>pembayaran gagal mohon hubungi admin</h3>
              <a href="report.php">admin</a>';
            }
        ?>

<form action="../config/addpayment.php" method="post" id="msform" enctype="multipart/form-data">

<label for="KRS">Input Pembayaran</label>
<h3 class="fs-subtitle">JPG | JPEG | PNG</h3>
<h3 class="fs-subtitle">*Mohon kirim bukti pembayaran dengan jelas</h3>
<input type="file" name="pembayaran" placeholder="KRS1"/>
<button type="submit" name="submit" class="action-button">Kirim</button>

</form> 

          </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>