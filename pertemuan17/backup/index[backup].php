<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">TAMBAH</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

    <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $row["id"]; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a> 
                |
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin hapus?')">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" height="50px"></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
    <?php endforeach; ?>

    </table>

</body>
</html>