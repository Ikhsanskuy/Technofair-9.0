<?php
session_start();
include "../../koneksi.php";

$tampil = mysqli_query($conn, "SELECT * FROM `addmember_ig`")
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
      <!-- <div class="input-group">
          <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div> -->
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
          <h1 class="mt-4">ini myteam</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">ini myteam</li>
          </ol>
          <ul>
            <li>
              <a class="nav-link" href="addmember.php">
                <i class="nc-icon nc-badge"></i>
                <p>Anggota</p>
              </a>
            </li>
            <li>
              <a class="nav-link" href="addmember2.php">
                <i class="nc-icon nc-badge"></i>
                <p>Anggota 2</p>
              </a>
            </li>
            <li>
              <a class="nav-link" href="addmember3.php">
                <i class="nc-icon nc-badge"></i>
                <p>Anggota 3</p>
              </a>
            </li>
          </ul>
          <div class="timeline">
<h1>data ketua</h1>

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>NPM</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>No HP</th>
                                                <th>Instansi</th>
                                                <th>Idline</th>
                                                <th>email</th>
                                                <th>jurusan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                                $sql = mysqli_query($conn, "SELECT * FROM tambah WHERE username='$_SESSION[username]'");
                                                while ($data = mysqli_fetch_array($sql)){
                                            ?>
                                            <tr>
                                                <!-- <td class="text-center">1</td> -->
                                                <td><?php echo $data['npm'] ?></td>
                                                <td><?php echo $data['nama'] ?></td>
                                                <td><?php echo $data['kelas'] ?></td>
                                                <td><?php echo $data['nohp'] ?></td>
                                                <td><?php echo $data['instansi'] ?></td>
                                                <td><?php echo $data['idline'] ?></td>
                                                <td><?php echo $data['email'] ?></td>
                                                <td><?php echo $data['jurusan'] ?></td>
                                            </tr>
                                                <?php } ?>
                                                
                                        </tbody>
                                    </table>
                                    <!-- anggota 1 -->
                                    <h1>data anggota</h1>

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>NPM</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Instansi</th>
                                                <th>jurusan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                                $sql = mysqli_query($conn, "SELECT * FROM tambah WHERE username='$_SESSION[username]'");
                                                while ($data = mysqli_fetch_array($sql)){
                                            ?>
                                            <tr>
                                                <!-- <td class="text-center">1</td> -->
                                                <td><?php echo $data['npm2'] ?></td>
                                                <td><?php echo $data['nama2'] ?></td>
                                                <td><?php echo $data['kelas2'] ?></td>
                                                <td><?php echo $data['instansi2'] ?></td>
                                                <td><?php echo $data['jurusan2'] ?></td>
                                            </tr>
                                            <tr>
                                                <!-- <td class="text-center">1</td> -->
                                                <td><?php echo $data['npm3'] ?></td>
                                                <td><?php echo $data['nama3'] ?></td>
                                                <td><?php echo $data['kelas3'] ?></td>
                                                <td><?php echo $data['instansi3'] ?></td>
                                                <td><?php echo $data['jurusan3'] ?></td>
                                            </tr>
                                                <?php } ?>
                                                
                                        </tbody>
                                    </table>
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