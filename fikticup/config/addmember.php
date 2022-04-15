<?php 
    session_start();
    include "../../koneksi.php";
    if (isset($_POST['submit'])){
        $npm =  mysqli_real_escape_string($conn, $_POST['npm']);
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $kelas = mysqli_real_escape_string($conn, $_POST['kelas']);
        $nohp = mysqli_real_escape_string($conn, $_POST['nohp']);
        $instansi = mysqli_real_escape_string($conn, $_POST['instansi']);
        $idline = mysqli_real_escape_string($conn, $_POST['idline']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);


        $update     = mysqli_query($conn, "UPDATE `tambah` 
                                            SET `npm` = '$npm',
                                            `nama` = '$nama',
                                            `kelas` = '$kelas',
                                            `nohp` = '$nohp',
                                            `instansi` = '$instansi',
                                            `idline` = '$idline',
                                            `email` = '$email',
                                            `jurusan` = '$jurusan'
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