<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data (fetch) didalam tabel mahasiswa
//ada 4 cara dalam mengambil data (fetch)
//1. mysqli_fetch_row() //mengembalikan nilai array numerik
//2. mysqli_fetch_assoc() //mengembalikan nilai array assosiatip
//3. mysqli_fetch_array() //mengembalikan nilai array numerik/assosiatip
//4. mysqli_fetch_ocject() //mengembalikan nilai dengan cara object

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

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

    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td>1</td>
            <td>
                <a href="">Ubah</a> 
                |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>"></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
    <?php endwhile; ?>

    </table>

</body>
</html>