<?php 
require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%' OR
                nim  LIKE '%$keyword%' OR
                email  LIKE '%$keyword%' OR
                jurusan  LIKE '%$keyword%'
         ";
$mahasiswa = query($query);

?>

<div class="container" id="wadah">
        <div class="table-responsive-md">
    <table class="table">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">No.</th>
                <th scope="col">Aksi</th>
                <th scope="col">Gambar</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
            </tr>
        </thead>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
        <tbody>
            <tr class="text-center">
                <td><?= $i++; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"];?>" class="btn btn-warning text-light" role="button">Ubah</a> 

                    <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin hapus?')" class="btn btn-danger text-light" role="button">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" height="35px"></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>   
        </tbody>

        <?php endforeach ; ?>
    </table>

    </div>
    </div>