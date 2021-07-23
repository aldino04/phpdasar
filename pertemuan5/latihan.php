<?php
    $mahasiswa = [["Muhammad Satria Aldino", "41818010132", "Sistem Informasi", "satria.aldino491@gmail.com"], ["fahmy Umarsyah", "41818010077", "Sistem Informasi", "fahmyumarsyah@gmail.com"],["Muhammad Audi Airlangga", "41818010076", "Sistem Informasi", "audi@gmail.com"]]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>