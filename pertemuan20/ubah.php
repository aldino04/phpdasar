<?php
//mulai session
session_start();

if ( !isset($_SESSION["login"]) ){
    header('Location: login.php');
    exit;
}

    require 'functions.php';

    //ambil data dari url
    $id = $_GET["id"];

    //query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    //cek apakah tombol submit ditekan
    if (isset($_POST["submit"])) {

        //interaksi ketika data ingin ditambahkan
        if ( ubah($_POST) > 0){
            $berhasil = true;
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
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <title>Ubah Data</title>
</head>
<body>
        <!-- Header -->
        <div class="container pt-4 pb-3">
        <h3 class="text-center text-danger">Mengubah Data Mahasiswa</h3>
    </div>
    <!-- End Header -->

    <!-- Isi Tabel -->
    <section id="tabel" class="tabel">
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-6 pt-3">
                <?php if(isset($berhasil)) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Data Berhasil Diubah</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif ; ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" value="<?= $mhs["id"] ;?>">
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" name="gambarLama" value="<?= $mhs["gambar"] ;?>">
                    </div>

                    <div class="form-group">
                        <label for="nim">Nim Anda</label>
                        <input type="text" class="form-control" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Anda</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Anda" name="nama" required value="<?= $mhs["nama"]; ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Anda</label>
                        <input type="text" class="form-control" id="email" placeholder="Email Anda" name="email" required value="<?= $mhs["email"]; ?>">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan Anda</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Jurusan Anda" name="jurusan" required value="<?= $mhs["jurusan"]; ?>">
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Anda</label>
                        <img src="img/<?= $mhs['gambar']; ?>">
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-warning text-light" name="submit">Ubah Data</button>
                        <a href="index.php" class="btn btn-success" role="button">Kembali</a>
                    </div>
                    
                </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Isi Tabel -->

    <a href="index.php">KEMBALI</a>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>
</html>