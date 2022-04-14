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

        $nomor_acak = round(microtime(true));
            $pembayaran = $_FILES['pembayaran']['name']; 
            $file_tmp = $_FILES['pembayaran']['tmp_name'];
            $tipe_pembayaran = $_FILES['pembayaran']['type'];
            // $size_foto = $_FILES['pembayaran']['size'];

            $berkas = $_FILES['berkas']['name']; 
            $file_tmp1 = $_FILES['berkas']['tmp_name'];
            $tipe_berkas = $_FILES['berkas']['type'];
    
            $pembayaran_baru = $nomor_acak. '_' .$pembayaran;
            $berkas_baru = $nomor_acak. '_' .$berkas;
            
            $insertdata     = mysqli_query($conn, "INSERT INTO `lomba_infographic1` (`npm`,`nama`,`kelas`,`nohp`,`instansi`,`idline`,`email`,`jurusan`,`nama_tim`,`pembayaran`,`berkas`) 
                                                                   VALUES ('$npm','$nama','$kelas','$nohp','$instansi','$idline','$email','$jurusan','$nama_tim','$pembayaran_baru','$berkas_baru')");

            if ($insertdata) {

                if($tipe_pembayaran == "image/jpeg" || $tipe_pembayaran == "image/png" || $tipe_pembayaran == "image/jpg"){ //okeypaham2 bay syiippp lanjut san application/pdf yessss<<ganti disini ya ?salah vaiabel disini buat cek kondisi tipe file ohh paham2 bay
                    @move_uploaded_file($file_tmp, "../assets/foto/".$pembayaran_baru);
                }else {
                    echo "Maaf format file berkas selain JPG/JPEG/PNG tidak di dukung";
                }
                
                if($tipe_berkas == "application/pdf"){ 
                    @move_uploaded_file($file_tmp1, "../assets/pdf/".$berkas_baru);
                }else {
                    echo "Maaf format file berkas selain PDF tidak di dukung";
                }
                echo "<script>alert('Register sukses');
                         location.href='../dashboard.php';</script>";
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