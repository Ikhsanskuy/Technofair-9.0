<?php
include_once "../../sesi.php";
include_once "../../../../koneksi.php"; 
$email_ketua = $_SESSION['email_ketua'];

$nama_tim =  $_POST['nama_tim'];
$npm_ketua = $_POST['npm_ketua'];
$nama_ketua = $_POST['nama_ketua'];

//KRS KETUA
if($_FILES['krs_ketua']['name']){

  $nama_file_krs = $_FILES['krs_ketua']['name'];
  $ukuran_file_krs = $_FILES['krs_ketua']['size'];
  $tipe_file_krs = $_FILES['krs_ketua']['type'];
  $tmp_file_krs = $_FILES['krs_ketua']['tmp_name'];

  $nama_acak_krs = round(microtime(true)) . '.';
  $nama_baru_krs = $nama_acak_krs.$nama_ketua.'.'.$nama_file_krs;
  $path_krs = "../krs/".$nama_baru_krs;

    if($tipe_file_krs == "application/pdf" ){
        if(move_uploaded_file($tmp_file_krs, $path_krs)){
            $query_krs="UPDATE kompetisi SET krs_ketua='$nama_baru_krs', status_krs='1' WHERE npm_ketua = '$npm_ketua'";
            $result_krs= mysqli_query($conn, $query_krs);

            echo "<script>
                    alert('Sussces - Upload KTM / KRS / Surat Keterangan Berhasil');
                    document.location.href = '../dashboard.php';
                </script>";
            
        }else{
            echo "<script>
                    alert('Failed - Upload KTM / KRS / Surat Keterangan Gagal. Harap input ulang kembali');
                    document.location.href = '../dashboard.php';
                    <script>";
            
        }
    }else{
      echo "<script>
        alert('Failed - Upload KTM / KRS / Surat Keterangan Gagal. File tidak berupa PDF, harap input ulang kembali');
        document.location.href = '../dashboard.php';
        </script>";
      
    }
}



header ("location: ../dashboard.php");
?>