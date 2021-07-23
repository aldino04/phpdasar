<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
        global $conn;
        //masukan data dari $_POST ke variabel baru, agar bisa dimasukan kedalam query
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        //query untuk insert ke tabel mahasiswa
        $query = "INSERT INTO mahasiswa
                    VALUES
                        ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')
                 ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
        //masukan data dari $_POST ke variabel baru, agar bisa dimasukan kedalam query

        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        //query untuk insert ke tabel mahasiswa
        $query = "UPDATE mahasiswa SET
                    nim = '$nim',
                    nama = '$nama',
                    email = '$email', 
                    jurusan = '$jurusan', 
                    gambar = '$gambar' 
                    WHERE id = $id
                 ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

?>