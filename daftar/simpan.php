<?php
include '../koneksi.php';
if (isset($_POST['daftar'])) {
    // $username           =mysqli_real_escape_string($conn,$_POST['username']);
    $username     =mysqli_real_escape_string($conn,$_POST['username']);
    $password      =mysqli_real_escape_string($conn,$_POST['password']);
    $competition      =mysqli_real_escape_string($conn,$_POST['competition']);
    $nama_tim      =mysqli_real_escape_string($conn,$_POST['nama_tim']);


    $query = mysqli_query($conn, "INSERT INTO tambah (username,`password`,competition,nama_tim) VALUES ('$username','$password','$competition','$nama_tim')");

    // $check = mysqli_query($conn, "SELECT * FROM daftar WHERE email = '".$_POST['email']."'");
    // if(mysqli_num_rows($check)) {
    // exit('This email address is already used!');
}

    if ($query) {
     header("location:./sukses.php");
    }else{
    header("location:./emailterdaftar.php");
    }
?>