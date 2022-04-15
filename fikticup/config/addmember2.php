<?php 
    session_start();
    include "../../koneksi.php";
    if (isset($_POST['submit'])){
        $npm2 =  mysqli_real_escape_string($conn, $_POST['npm2']);
        $nama2 = mysqli_real_escape_string($conn, $_POST['nama2']);
        $kelas2 = mysqli_real_escape_string($conn, $_POST['kelas2']);
        $instansi2 = mysqli_real_escape_string($conn, $_POST['instansi2']);
        $jurusan2 = mysqli_real_escape_string($conn, $_POST['jurusan2']);


        $update     = mysqli_query($conn, "UPDATE `tambah` 
                                            SET `npm2` = '$npm2',
                                            `nama2` = '$nama2',
                                            `kelas2` = '$kelas2',
                                            `instansi2` = '$instansi2',
                                            `jurusan2` = '$jurusan2'
                                            WHERE username='$_SESSION[username]'");

if ($update) {

    echo "<script>alert('Register sukses');
             location.href='../page/myteam.php';</script>";
    }else {
    echo "<script>alert('Gagal register');
    location.href='../page/addmember.php';</script>";
    }
}

?> 