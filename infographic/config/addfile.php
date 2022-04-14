<?php
    session_start();
    include "../../koneksi.php";

    if (isset($_POST['submit'])) {
    

        $nomor_acak = round(microtime(true));

            $berkas = $_FILES['berkas']['name']; 
            $file_tmp = $_FILES['berkas']['tmp_name'];
            $tipe_berkas = $_FILES['berkas']['type'];

            $berkas_baru = $nomor_acak. '_' .$berkas;
            
            $update = mysqli_query($conn, "UPDATE `tambah`
                SET berkas = '$berkas'
                WHERE username='$_SESSION[username]'");


            if ($update) {
                
                if($tipe_berkas == "application/zip"){
                    @move_uploaded_file($file_tmp, "../assets/zip/".$berkas_baru);
                }else {
                echo "<script>alert('Maaf format file berkas selain ZIP tidak di dukung');
                location.href='../page/file.php';</script>";
                }
                
                echo "<script>alert('Register sukses');
                         location.href='../page/home.php';</script>";
            }

    }

?>