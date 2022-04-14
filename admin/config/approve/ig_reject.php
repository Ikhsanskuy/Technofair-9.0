<?php
include "../../../koneksi.php";

$id = $_GET['id'];

$queries = mysqli_query($conn, "UPDATE `tambah` SET stat_tf = 2 WHERE id = '$id' ");

if($queries){

    echo "<script>alert('Account Rejected'); 
    location.href='../../pages/infographic.php'; </script>";

}else{

    echo "<script>alert('Account Failed To Rejected');
    location.href='../../pages/infographic.php'; </script>";

}
?>