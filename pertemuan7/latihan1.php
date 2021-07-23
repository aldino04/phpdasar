<?php 
    $mahasiswa = [
        [
            "nama" => "Muhammad satria Aldino",
            "nim" => "41818010132",
            "jurusan" => "Sistem Informasi",
            "email" => "satria.aldino491@gmail.com",
            "gambar" => "aldinoo.png"
        ],
        [
            "nama" => "Fahmy Umarsyah",
            "nim" => "41818010077",
            "jurusan" => "Sistem Informasi",
            "email" => "fahmy@gmail.com",
            "gambar" => "fahmyy.png"
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET dan POST</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach($mahasiswa as $mhs) : ?>
                <li>
                    <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&nim=<?= $mhs["nim"] ?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs["jurusan"] ?>&gambar=<?= $mhs["gambar"] ?>"><?= $mhs["nama"]; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>