<?php 
    session_start();
    include "../../koneksi.php";
    if (isset($_POST['submit'])){
        $npm3 =  mysqli_real_escape_string($conn, $_POST['npm3']);
        $nama3 = mysqli_real_escape_string($conn, $_POST['nama3']);
        $kelas3 = mysqli_real_escape_string($conn, $_POST['kelas3']);
        $instansi3 = mysqli_real_escape_string($conn, $_POST['instansi3']);
        $jurusan3 = mysqli_real_escape_string($conn, $_POST['jurusan3']);


        $update     = mysqli_query($conn, "UPDATE `tambah` 
                                            SET `npm3` = '$npm3',
                                            `nama3` = '$nama3',
                                            `kelas3` = '$kelas3',
                                            `instansi3` = '$instansi3',
                                            `jurusan3` = '$jurusan3'
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