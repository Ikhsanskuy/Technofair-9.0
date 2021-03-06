<?php
    session_start();
    include "../../config/koneksi.php";

    if (!isset($_SESSION['username'])){
        echo "<script>alert('Log in dulu ya');
        location.href= '../'
        </script>";
    }
    
    $tampil = mysqli_query($conn, "SELECT * FROM `tf9`")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">     
            <a class="navbar-brand" href="#"><img src="../logo.jpg" style="width: 25px; border-radius:50%;" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link custom-font-home " href="../index.php">Dashboard<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="si.php"></a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="sk.php"></a>
                        
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-danger" href="../../config/logout.php" onclick="return confirm('Apakah anda ingin keluar?')">Log Out</a>
                    </li>

                </ul>
            </div>
        </nav>


    <div class="table-responsive jumbotron">
    <h2>Data pendaftar approve</h2>
    <!-- <a href="../excel/infographic_excel.php" class="btn btn-info">Report Excel</a>  -->
    <a href="../infographic.php" class="btn btn-warning" >Pending</a>
    <a href="ig_approve.php" class="btn btn-success" >Approve</a>
    <a href="ig_reject.php" class="btn btn-danger" >Reject</a>
    </br>
    </br>
    

    <table id="data-example" class="table table-striped table-bordered table-hover" style="width:100%">
    <thead>
        <tr>
        <!-- <th class= "text-center">no</th> -->
        <th class= "text-center">No</th>
            <th class= "text-center">NPM</th>
            <th class= "text-center" scope="col">Nama</th>
            <th class= "text-center" scope="col">Kelas</th>
            <th class= "text-center" height="50px">No HP</th>
            <th class= "text-center" scope="col">Instansi</th>
            <th class= "text-center" scope="col">ID Line</th>
            <th class= "text-center" scope="col">Email</th>
            <th class= "text-center" scope="col">Jurusan</th>
             
        </tr>
    </thead>
    <tbody>
    <?php

    $no=1;
    $id = $_GET['id'];
    $tampil = mysqli_query($conn,"SELECT * FROM tambah WHERE id = '$id'");
    while($data = mysqli_fetch_array($tampil)){
        $id = $data['id'];
              $npm = $data['npm'];
              $nama = $data['nama'];
              $kelas= $data['kelas'];
              $nohp = $data['nohp'];
              $instansi = $data['instansi'];
              $idline = $data['idline'];
              $email = $data['email'];
              $jurusan = $data['jurusan'];

    ?>
    <tr>
                <form action="../config/approve/ig_approve.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                  <input type="hidden" name="email" value="<?php echo $email; ?>">
                  <td><?=$no?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($conn,$npm));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($conn,$nama));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($conn,$kelas));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($conn,$nohp));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($conn,$instansi));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($conn,$idline));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($conn,$email));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($conn,$jurusan));?></td>
           

           

                  <!-- <td class="text-center">
                    <button type="submit" name="send" class="btn btn-success btn-round">
                      <i class="material-icons"></i> Approve
                    </button>

                    <a href="../config/approve/ig_reject.php?id=<?php echo $id;?>"
                      class="btn btn-danger btn-round">
                      <i class="material-icons"></i> Reject
                    </a>
                  </td> -->
                </form>
              </tr>
    <?php
    $no++;
    }
    ?>
</table>
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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        AOS.init();

        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>