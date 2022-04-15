<?php

    include "../../koneksi.php";

    if (isset($_POST['submit'])) {
        
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nohp = $_POST['nohp'];
        $instansi = $_POST['instansi'];
        $idline = $_POST['idline'];
        $email = $_POST['email'];
        $jurusan = $_POST['jurusan'];
        $nama_tim = $_POST['nama_tim'];

            
            $insertdata     = mysqli_query($conn, "INSERT INTO `lomba_infographic1` (`npm`,`nama`,`kelas`,`nohp`,`instansi`,`idline`,`email`,`jurusan`,`nama_tim`) 
                                                                   VALUES ('$npm','$nama','$kelas','$nohp','$instansi','$idline','$email','$jurusan','$nama_tim')");

            if ($insertdata) {

                echo "<script>alert('Register sukses');
                         location.href='../page/home.php';</script>";
            }else {
                echo "<script>alert('Gagal register');
                location.href='../regist.php';</script>";
            }
    

    //     if ($insertdata) {
    //         echo "<script>alert('Register sukses');
    //         location.href='../index.php';</script>";
    //     }else{
    //         echo "<script>alert('Gagal register');
    //         location.href='../regist.php';</script>";

    // }

    }

?>