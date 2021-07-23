<?php
    require 'functions.php';

    //cek apakah tombol submit ditekan
    if (isset($_POST["submit"])) {

        //interaksi ketika data ingin ditambahkan
        if ( tambah($_POST) > 0){
            echo "
                <script>
                    alert('data BERHASIL ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data GAGAL ditambahkan!');
                    document.location.href = 'tambah.php';
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

    <!-- Style CSS ku -->
    <style>
        section{
            min-height: 420px;
        }
    </style>

    <title>Tambah Data</title>
</head>
<body>

    <!-- Header -->
    <div class="container pt-4 pb-3">
        <h3 class="text-center text-danger">Tambah Data Mahasiswa</h3>
    </div>
    <!-- End Header -->

    <!-- Form -->
    <section id="tabel" class="tabel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nim">Nim Anda</label>
                        <input type="text" class="form-control" id="nim" placeholder="NIM Anda" name="nim" required>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Anda</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Anda" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Anda</label>
                        <input type="text" class="form-control" id="email" placeholder="Email Anda" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan Anda</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Jurusan Anda" name="jurusan" required>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Anda</label>
                        <input type="file" class="form-control" id="gambar" placeholder="Gambar Anda" name="gambar">
                    </div>

                    <!-- <label for="gambar">Gambar Anda</label>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Choose Image</label>
                    </div> -->

                    <div class="form-group">
                        <button class="btn btn-primary" name="submit">Tambah Data</button>
                        <a href="index.php" class="btn btn-success" role="button">Kembali</a>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>