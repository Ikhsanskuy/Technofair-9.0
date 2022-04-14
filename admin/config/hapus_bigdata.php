<?php

    include "koneksi.php";

    $getid = $_GET['id'];

    $deletedata = mysqli_query($conn, "DELETE FROM `wb_bigdata` WHERE id = '$getid'");

    if ($deletedata){
        header("location:../pages/bigdata.php");
    }else{
        echo "gagal";
    }


?>