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

        //upload gambar
        $gambar = upload();
        if ( !$gambar ) {
            return false;
        }

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

        $gambarLama = htmlspecialchars($data["gambarLama"]);

        //cek apakah user pilih gambar atau tidak
        if($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

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

function cari($keyword){
    $query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%' OR
                nim  LIKE '%$keyword%' OR
                email  LIKE '%$keyword%' OR
                jurusan  LIKE '%$keyword%'
                ";
    return query($query);
}

function upload(){
    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmp_name = $_FILES["gambar"]["tmp_name"];

    //cek apakah ada gambar yg diupload
    if ($error === 4){
        echo "
            <script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    //cek apakah data sesuai dengan ekstensi yang dibolehkan
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
        echo "
            <script>
                alert('yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    //cek ukuran gambar
    if ( $ukuranFile > 1000000 ) {
        echo "
            <script>
                alert('ukuran gambar anda terlalu besar');
            </script>";
        return false;
    }

    //jika lolos pengecekan file
    //generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmp_name, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

function registrasi($data) {
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek ketersediaan username
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if ( mysqli_fetch_assoc($result) ){
        echo "
            <script>
                alert('user sudah ada!');
            </script>
        ";
        return false;
    }

    //cek apakah password sama atau tidak
    if ( $password != $password2 ) {
        echo "
            <script>
                alert('password tidak sama');
            </script>
        ";
        return false;
    }
    
    //enkripsi password menggunakan hash, jangan pakai md5
    $password = password_hash($password, PASSWORD_DEFAULT);

    //insert kedalam database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");
    return mysqli_affected_rows($conn);

}

?>