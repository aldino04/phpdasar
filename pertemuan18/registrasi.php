<?php 
    require 'functions.php';

    if ( isset($_POST["registrasi"]) ) {
        if ( registrasi($_POST) > 0 ) {
            echo "<script>
                alert('user berhasil ditambahkan!');
            </script>";
        } else {
            echo mysqli_error($conn);
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <title>Halaman Registrasi</title>
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
    <strong>INI NOTE !!</strong> Pertemuan 18 Menambahkan PAGINATION
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    </div>
    <!-- END Note Alert -->

    <!-- Header -->
    <div class="container">
    <div class="container text-center pt-3">
        <h3>Form Registrasi</h3>
    </div>
    <!-- END Header -->

    <!-- FORM REGIS -->
    <section id="tabel" class="tabel">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-md-6 pt-4">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" class="form-control" id="username" placeholder="Username Anda" required name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="password2">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="registrasi">Registrasi</button>
                    <a class="btn btn-success" href="login.php">Login</a>
                </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END FORM REGIS -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>