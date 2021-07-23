<?php 
require 'functions.php';

// Untuk menampilkan seluruh data dari tabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari ditekan
if (isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <title>Halaman Admin</title>

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Aldino Belajar PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/phpdasar/index.html">Profile</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PHP Dasar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan11/index.php">Pertemuan 11</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan12/index.php">Pertemuan 12</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan13/index.php">Pertemuan 13</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan14/index.php">Pertemuan 14</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan15/index.php">Pertemuan 15</a>
            </div>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" autofocus autocomplete="off">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="cari">Search</button>
        </form>
    </div>
  </div>
</nav>
    <!-- End Navbar -->

    <!-- Note Alert -->
    <div class="container pt-5 mt-2">
    <div class="alert alert-dark alert-dismissible fade show mt-3" role="alert">
    <strong>INI NOTE !!</strong> Pertemuan 13 Menambahkan Fungsi Upload
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    </div>
    <!-- END Note Alert -->

    <!-- Header -->
    <div class="container text-center pt-3 pb-3">
        <h3>Daftar Mahasiswa</h3>
    </div>
    <!-- END Header -->

    <!-- Form -->
    <div class="container">
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

        <?php foreach ($mahasiswa as $row) : ?>
        <tbody>
            <tr class="text-center">
                <td><?= $row["id"]; ?></td>
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
    <!-- END Form -->

    <!-- Button tambah -->
    <div class="container pb-5 mb-4">
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
    </div>
    <!-- End Button Tambah -->

    <!-- Footer -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row pt-2">
                <div class="col text-center">
                    <p>Copyright 2021.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>