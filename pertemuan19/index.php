<?php 
// mulai session
session_start();

if ( !isset($_SESSION["login"]) ){
    header('Location: login.php');
    exit;
}

require 'functions.php';

//pagination
// konfigurasi
$jumlahDataPerHalaman = 4;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumalahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

if( isset($_GET["halaman"]) ){
    $halamanAktif = $_GET["halaman"];
} else {
    $halamanAktif = 1;
}

$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

// Untuk menampilkan seluruh data dari tabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// ketika tombol cari ditekan
if (isset($_POST["cari"])){
    if( $_POST["keyword"] != "" ){
    $mahasiswa = cari($_POST["keyword"]);            
    } else {
        header('Location: index.php');
        exit;
    }
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
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan16/index.php">Pertemuan 16</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan17/index.php">Pertemuan 17</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan18/index.php">Pertemuan 18</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan19/index.php">Pertemuan 19</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan20/index.php">Pertemuan 20</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://localhost/phpdasar/pertemuan21/index.php">Pertemuan 21</a>
            </div>
            
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="" method="POST">
        
        <!-- elemen search -->
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" autofocus autocomplete="off" id="keyword">
        <!-- end elemen search -->

        <!-- elemen button search -->
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="cari" id="tombol-cari">Search</button>
        <!-- end elemen button search -->

        <a class="btn btn-primary ml-2" href="logout.php">Logout</a>
        </form>
    </div>
  </div>
</nav>
    <!-- End Navbar -->

    <!-- Note Alert -->
    <div class="container pt-5 mt-2">
    <div class="alert alert-dark alert-dismissible fade show mt-3" role="alert">
    <strong>INI NOTE !!</strong> Pertemuan 19 Menambahkan Live Search Dengan AJAX
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
    <!-- END Form -->

    <!-- PAGINATION -->  
            <?php if( !isset( $_POST["cari"] ) ) : ?>
                <div class="container">
                    <div class="row">
                        <div class="col">
                        <nav aria-label="page navigation example">
                            <ul class="pagination pagination-md justify-content-center">

                            <?php if( $halamanAktif > 1 ) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?halaman=<?=$halamanAktif -1; ?>">Previous</a>
                            </li>
                            <?php endif; ?>

                            <?php for( $a = 1; $a <= $jumalahHalaman; $a++) : ?>
                                <?php if( $a == $halamanAktif ) : ?>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link float-left" href="?halaman=<?= $a; ?>"><?= $a; ?></a>
                                    </li>
                                <?php else : ?>
                                    <li class="page-item">
                                        <a class="page-link float-left" href="?halaman=<?= $a; ?>"><?= $a; ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <?php if( $halamanAktif < $jumalahHalaman ) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?halaman=<?=$halamanAktif +1; ?>">Next</a>
                            </li>
                            <?php endif; ?>

                            </ul>
                        </nav>
                        
                        </div>
                    </div>
                </div>
            <?php endif; ?>
    <!-- END PAGINATION -->

    <!-- Button tambah -->
    <div class="container pb-5 mb-4">
        <div class="row">
            <div class="col">
                <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
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

    <script src="js/script.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>