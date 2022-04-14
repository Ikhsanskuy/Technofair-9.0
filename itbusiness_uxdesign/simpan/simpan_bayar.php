<?php
include_once "../../sesi.php";
include_once "../../../../koneksi.php"; 

$nama_tim =  $_POST['nama_tim'];
$npm_ketua = $_POST['npm_ketua'];
$nama_ketua = $_POST['nama_ketua'];


if($_FILES['pembayaran']['name']){

  $nama_file = $_FILES['pembayaran']['name'];
  $ukuran_file = $_FILES['pembayaran']['size'];
  $tipe_file = $_FILES['pembayaran']['type'];
  $tmp_file = $_FILES['pembayaran']['tmp_name'];

  $nama_acak = round(microtime(true)) . '.';
  $nama_baru = $nama_acak.$nama_tim.$nama_ketua.'.'.$nama_file;
  $path = "../pembayaran/".$nama_baru;

    if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
        if(move_uploaded_file($tmp_file, $path)){
            $query="UPDATE kompetisi SET pembayaran='$nama_baru', status_pembayaran='1' WHERE npm_ketua = '$npm_ketua'";
            $result= mysqli_query($conn, $query);

            echo "<script>
                    alert('Sussces - Upload Pembayaran Berhasil');
                    document.location.href = '../dashboard.php';
                </script>";
            
        }else{
            echo "<script>
                    alert('Failed - Upload Pembayaran Gagal. Harap input ulang kembali');
                    document.location.href = '../dashboard.php';
                    <script>";
            
        }
    }else{
      echo "<script>
        alert('Failed - Upload Pembayaran Gagal. File tidak berupa JPG / JPEG / PNG, harap input ulang kembali');
        document.location.href = '../dashboard.php';
        </script>";
      
    }
}  
header ("location: ../dashboard.php");
?>