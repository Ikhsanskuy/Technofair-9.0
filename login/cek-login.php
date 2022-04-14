<?php
session_start();
include "../koneksi.php";
@$username = mysqli_real_escape_string($conn,$_POST['username']);
@$password = mysqli_real_escape_string($conn,($_POST['password']));

$login = mysqli_query($conn, "SELECT * FROM tambah WHERE username ='$username' AND `password`= ('$password')");

$cek= mysqli_num_rows($login);

if ($cek == 1){
    $data = mysqli_fetch_assoc($login);
}
    if($data['username']=="$username"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = "$password";
        
        echo "<script>alert('Berhasil Login, Selamat datang $_SESSION[username] '); 
            location.href='../infographic/page/home.php' </script>";
        
        // header("location:../infographic/page/home.php");
    }
        $kategori = $data['competition'];

        if( $kategori =='infographic'){
            $_SESSION['competition'] = $data['competition'];
            header("location:../infographic/page/home.php");
        }
        elseif( $kategori =='ctf'){
            $_SESSION['competition'] = $data['competition'];
            header("location:../infographic/page/home.php");
        }
        elseif( $kategori =='fikticup'){
            $_SESSION['competition'] = $data['competition'];
            header("location:../infographic/page/home.php");
        }
        elseif( $kategori =='uxdesign'){
            $_SESSION['competition'] = $data['competition'];
            header("location:../infographic/page/home.php");
        }
//     }
//     else{
//         header("location:../../");//kategori tidak ada
//     }
// }
// elseif( $email == 'admintf' && $password == 'akademikTF21'){
//     $_SESSION['admintf'] = $email;
//     $_SESSION['akademikTF21'] = "$password";
//     header("location:../../Admin/page/dashboard.php");
// }
else{
    header("location:./passalah.php");//email atau password salah
}
?>