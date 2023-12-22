<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    // ambil data dari dalam form
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar 
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }


    $query = "INSERT INTO mahasiswa 
                VALUES 
                ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakaha tidak ada gambar yang di upload 
    if( $error === 4 ) {
        echo  "<script>
            alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }
    // cek apakah yang di upload gambar atau bukan 
    $ektensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ektensiGambar = explode('.', $namaFile); // untuk mengambil .jpg dll
    $ektensiGambar = strtolower(end($ektensiGambar)); // untuk merubah JPG to jpg
    if( !in_array( $ektensiGambar, $ektensiGambarValid) ) {
        echo  "<script>
            alert('yang anda upload bukan gambar');
        </script>";
        return false;
    }

    // cek jika ukuran gambar terlalu besar 
    if( $ukuranFile > 2000000 ) {
        echo  "<script>
            alert('ukuran gambar terlalu besar :)');
        </script>";
        return false;
    }

    // lolos pengechekan, gambar siap di upload
    // Generate nama gambar baru 
    $namaFileBaru = uniqid();
    $namaFileBaru .= $namaFile;

    move_uploaded_file($tmpName,'img/' . $namaFileBaru);

    return $namaFileBaru;

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa where id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    // ambil data dari dalam form
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    // cek apakah user pilih gambar baru 
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    

    $query = "UPDATE mahasiswa SET 
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}
function cari($keyword) {

    $query = "SELECT * FROM mahasiswa
                WHERE 
            nrp LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";
    return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // chek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('Password tidak sesuai!');
            </script>";
        return false;
    }
// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

//tambahkan userbaru ke database
mysqli_query($conn, "INSERT INTO users VALUES('', '$username'
, '$password')");

return mysqli_affected_rows($conn);
    
}

?>