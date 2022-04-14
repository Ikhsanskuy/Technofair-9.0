<?php
    // konvert file ke excel
    header("Content-type:application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Big Data.xls");
?>
<?php
    include "../config/koneksi.php";
    $tampil = mysqli_query($conn, "SELECT * FROM `wb_bigdata`");
?>


<h3>Pendaftar Big Data</h3>

<table id="data-example" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Asal daerah</th>
            <th scope="col">Institusi</th>
            <th scope="col">Email</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">ID Line</th>
        </tr>
    </thead>
    <?php

    $no=1;
    $tampil = mysqli_query($conn,"SELECT * FROM wb_bigdata");
    while($data = mysqli_fetch_array($tampil)){

    ?>
    <tbody>
        <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['asal'];?></td>
                <td><?php echo $data['institusi'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['nohp'];?></td>
                <td><?php echo $data['idline'];?></td>
        </tr>
    </tbody>
    <?php
    }
    ?>
</table>
