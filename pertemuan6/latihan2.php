<?php 
    $mahasiswa = [
        [
            "nama" => "Muhammad satria Aldino",
            "nim" => "41818010132",
            "jurusan" => "Sistem Informasi",
            "email" => "satria.aldino491@gmail.com",
            "gambar" => "aldino.png"
        ],
        [
            "nama" => "Fahmy Umarsyah",
            "nim" => "41818010077",
            "jurusan" => "Sistem Informasi",
            "email" => "fahmy@gmail.com",
            "gambar" => "fahmy.png"
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>   
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
                <li><img src="img/<?= $mhs["gambar"] ?>"></li>
                <li><?= $mhs["nama"] ?></li>
                <li><?= $mhs["nim"] ?></li>
                <li><?= $mhs["jurusan"] ?></li>
                <li><?= $mhs["email"] ?></li>
            </ul>
        <?php endforeach; ?>
            


</body>
</html>