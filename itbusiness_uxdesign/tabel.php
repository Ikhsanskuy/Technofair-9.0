<?php
    $sdd = "SELECT * FROM anggota_tim WHERE id_tim='$id_tim'";
    $hasil = $conn->query($sdd);
    
    //kelas diganti jadi semester
?>

<div class="card strpied-tabled-with-hover">
    <div class="card-header ">
        <h4 class="card-title">Anggota Tim</h4>
    </div>
    <div class="card-body table-full-width table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Semester/Tingkat/Kelas</th>
                <th>No. HP</th>
                <th>ID Line</th>
            </thead>
            <tbody>
            <?php
                $no = 0;
                while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {
                    $no++;
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['npm_anggota']; ?></td>
                    <td><?= $row['nama_anggota']; ?></td>
                    <td><?= $row['jurusan_anggota']; ?></td>
                    <td><?= $row['kelas_anggota']; ?></td>
                    <td><?= $row['no_hp_anggota']; ?></td>
                    <td><?= $row['id_line_anggota']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>