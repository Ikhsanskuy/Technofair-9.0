<?php
include_once "../../sesi.php";
include_once "../../../../koneksi.php"; 

$nama_tim =  $_POST['nama_tim'];
$npm_ketua = $_POST['npm_ketua'];
$nama_ketua = $_POST['nama_ketua'];


if($_FILES['berkas1']['name']){

  $nama_file = $_FILES['berkas1']['name'];
  $ukuran_file = $_FILES['berkas1']['size'];
  $tipe_file = $_FILES['berkas1']['type'];
  $tmp_file = $_FILES['berkas1']['tmp_name'];

  $path = "../berkas/".$nama_file;

    if($tipe_file == "application/pdf" ){
        if(move_uploaded_file($tmp_file, $path)){
            $query="UPDATE kompetisi SET berkas1='$nama_file', status_berkas1='1' WHERE npm_ketua = '$npm_ketua'";
            $result= mysqli_query($conn, $query);

            echo "<script>
                    alert('Sussces - Upload Proposal Berhasil');
                    document.location.href = '../dashboard.php';
                </script>";
            
        }else{
            echo "<script>
                    alert('Failed - Upload Proposal Gagal. Harap input ulang kembali');
                    document.location.href = '../dashboard.php';
                    <script>";
            
        }
    }else{
      echo "<script>
            alert('Failed - Upload Proposal Gagal. File tidak berupa PDF, harap input ulang kembali');
            document.location.href = '../dashboard.php';
        </script>";
      
    }
}
   
header ("location: ../dashboard.php");
?>