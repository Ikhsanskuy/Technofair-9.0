<?php
    session_start();
    include "../../koneksi.php";

    if (isset($_POST['submit'])) {
    

        $nomor_acak = round(microtime(true));

            $pembayaran = $_FILES['pembayaran']['name']; 
            $file_tmp = $_FILES['pembayaran']['tmp_name'];
            $tipe_pembayaran = $_FILES['pembayaran']['type'];

            $pembayaran_baru = $nomor_acak. '_' .$pembayaran;
            
            $update = mysqli_query($conn, "UPDATE `tambah`
                SET pembayaran = '$pembayaran'
                WHERE username='$_SESSION[username]'");


            if ($update) {
                
                if($tipe_pembayaran == "image/jpg" || $tipe_pembayaran == "image/jpeg" || $tipe_pembayaran == "image/png" ){
                    @move_uploaded_file($file_tmp, "../assets/pembayaran/".$pembayaran_baru);
                }else {
                echo "<script>alert('Maaf format file pembayaran selain JPG/JPEG/PNG tidak di dukung');
                location.href='../page/payment.php';</script>";
                }
                
                echo "<script>alert('Register sukses');
                         location.href='../page/home.php';</script>";
            }

    }

?>