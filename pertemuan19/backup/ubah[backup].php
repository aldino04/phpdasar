<?php
    require 'functions.php';

    //ambil data dari url
    $id = $_GET["id"];

    //query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    //cek apakah tombol submit ditekan
    if (isset($_POST["submit"])) {

        //interaksi ketika data ingin ditambahkan
        if ( ubah($_POST) > 0){
            echo "
                <script>
                    alert('data BERHASIL diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data GAGAL diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nim"> NIM :</label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama"> Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email"> Email :</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan"> Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar"> Gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
            </li>
            <li><button type="submit" name="submit">Ubah</button></li>
        </ul>
    </form>
    <a href="index.php">KEMBALI</a>
</body>
</html>