<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}

require 'functions.php';

// Ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id nya 
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// koneksi ke dbms


// cek apakah tombol ubah sudah di tekan
if( isset ($_POST["submit"]) ) {

    // cek apakah data berhasil di ubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil di ubah!');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
        <script>
            alert('data gagal di ubah!');
            document.location.href = 'index.php';
        </script>
        ";

}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Data mahasiswa </title>
</head>

<body>
    <h1>update data mahasiswa</h1>

    <Form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="GambarLama" value="<?= $mhs["gambar"]; ?>">
    <ul>
        <li>
            <label for="nrp">NRP : </label>
            
            <input type="text" name="nrp" id="nrp" required
            value="<?= $mhs["nrp"]; ?>">
        </li>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" required
            value="<?= $mhs["nama"]; ?>">
        </li>
        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" required
            value="<?= $mhs["email"]; ?>">
        </li>
        <li>
            <label for="jurusan">jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" required
            value="<?= $mhs["jurusan"]; ?>">
        </li>
        <li>
            <label for="gambar">Gambar : </label><br>
            <img src="img/<?= $mhs['gambar']; ?>" width="30" "><br>
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Update data!</button>
        </li>
    </ul>
    </Form>


</body>
</html>
