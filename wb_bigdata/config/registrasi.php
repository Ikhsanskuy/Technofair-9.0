<?php

    include "../../koneksi.php";

    if (isset($_POST['submit'])){

    $nama = mysqli_real_escape_string($conn,$_POST['nama']);
    $asal = mysqli_real_escape_string($conn,$_POST['asal']);
    $institusi = mysqli_real_escape_string($conn,$_POST['institusi']);
    $status = mysqli_real_escape_string($conn,$_POST['status']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $nohp = mysqli_real_escape_string($conn,$_POST['nohp']);
    $idline = mysqli_real_escape_string($conn,$_POST['idline']);


    

        $insertquery    = mysqli_query($conn, "INSERT INTO `wb_bigdata` (`nama`,`asal`,`institusi`,`email`,`nohp`,`idline`,`status`) 
                                                            VALUES ('$nama','$asal','$institusi','$email','$nohp','$idline','$status')");
    
    if ($insertquery) {
        echo "<script>alert('Register sukses');
        location.href='../index.php';</script>";
    }else{
        echo "<script>alert('Gagal register');
        location.href='../';</script>";
    }

}

?>