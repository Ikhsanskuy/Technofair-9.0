<?php
include_once "../../sesi.php";
include_once "../../../../koneksi.php"; 
$email_ketua = $_SESSION['email_ketua'];

$id_tim = $_POST['id_tim'];
$anggota_ke = $_POST['anggota_ke'];
$npm_anggota =  $_POST['npm_anggota'];
$nama_anggota =  $_POST['nama_anggota'];
$jurusan_anggota =  $_POST['jurusan_anggota'];
$kelas_anggota =  $_POST['kelas_anggota'];
$no_hp_anggota =  $_POST['no_hp_anggota'];
$id_line_anggota =  $_POST['id_line_anggota'];

$sql = mysqli_query($conn, "INSERT INTO anggota_tim (id_tim,anggota_ke,npm_anggota,nama_anggota,jurusan_anggota,kelas_anggota,no_hp_anggota,id_line_anggota) VALUES ('$id_tim','$anggota_ke','$npm_anggota','$nama_anggota','$jurusan_anggota','$kelas_anggota','$no_hp_anggota','$id_line_anggota')");




//KRS KETUA
if($_FILES['krs_anggota']['name']){

  $nama_file_krs = $_FILES['krs_anggota']['name'];
  $ukuran_file_krs = $_FILES['krs_anggota']['size'];
  $tipe_file_krs = $_FILES['krs_anggota']['type'];
  $tmp_file_krs = $_FILES['krs_anggota']['tmp_name'];

  $nama_acak_krs = round(microtime(true)) . '.';
  $nama_baru_krs = $nama_acak_krs.$id_tim.'.'.$nama_file_krs;
  $path_krs = "../krs/".$nama_baru_krs;

    if($tipe_file_krs == "application/pdf"){
        if(move_uploaded_file($tmp_file_krs, $path_krs)){
            $query_krs="UPDATE anggota_tim SET krs_anggota='$nama_baru_krs' WHERE id_tim='$id_tim' AND anggota_ke='$anggota_ke'";
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