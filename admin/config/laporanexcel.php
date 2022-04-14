<?php
    // konvert file ke excel
    header("Content-type:application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Registrasi.xls");
?>

<?php
    include "koneksi.php";
    $tampil = mysqli_query($con, "SELECT * FROM `ficion2022`");
?>

<h3> Data Registrasi Ficion 2022</h3>

<table id="data-example" class="table table-striped table-bordered table-hover" style="width:100%">
    <thead>
        <tr>
            <th scope="col" width="25px">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col" width="85px">Profesi</th>
            <th scope="col">Asal Instansi</th>
            <th scope="col">No hp</th>
            <th scope="col">Email</th>
            <th scope="col">No hp</th>
            <th scope="col" width="130px">kota</th>

        </tr>
    </thead>
    <?php

    $no=1;
    $tampil = mysqli_query($con,"select * from ficion2022");
    while($data = mysqli_fetch_array($tampil)){

    ?>
    <tbody>
        <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['profesi'];?></td>
                <td><?php echo $data['asal_instansi'];?></td>
                <td><?php echo $data['usia'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['hp'];?></td>
                <td><?php echo $data['kota'];?></td>

        </tr>
    </tbody>
    <?php
    }
    ?>
</table>