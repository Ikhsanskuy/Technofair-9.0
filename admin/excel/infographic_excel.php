<?php
    // konvert file ke excel
    header("Content-type:application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Big Data.xls");
?>
<?php
    include "../config/koneksi.php";
    $tampil = mysqli_query($conn, "SELECT * FROM `tambah`");
?>


<h3>Pendaftar Infographic</h3>

<table id="data-example" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
        <th>NPM</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>No HP</th>
                                                <th>Instansi</th>
                                                <th>Idline</th>
                                                <th>email</th>
                                                <th>jurusan</th>
        </tr>
    </thead>
    <?php

    $no=1;
    $tampil = mysqli_query($conn,"SELECT * FROM tambah");
    while($data = mysqli_fetch_array($tampil)){

    ?>
    <tbody>
        <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['npm'] ?></td>
                                                <td><?php echo $data['nama'] ?></td>
                                                <td><?php echo $data['kelas'] ?></td>
                                                <td><?php echo $data['nohp'] ?></td>
                                                <td><?php echo $data['instansi'] ?></td>
                                                <td><?php echo $data['idline'] ?></td>
                                                <td><?php echo $data['email'] ?></td>
                                                <td><?php echo $data['jurusan'] ?></td>
        </tr>
    </tbody>
    <?php
    }
    ?>
</table>
