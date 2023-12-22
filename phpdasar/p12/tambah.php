<?php 
require 'functions.php';
// koneksi ke dbms


// cek apakah tombol submit sudah di tekan
if( isset ($_POST["submit"]) ) {

    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil di tambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
        <script>
            alert('data gagal di tambahkan!');
            document.location.href = 'index.php';
        </script>
        ";

}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Tambah Data mahasiswa </title>
</head>

<body>
    <h1>Tambah data mahasiswa</h1>

    <Form action="" method="post">
    <ul>
        <li>
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp" required>
        </li>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" required>
        </li>
        <li>
            <label for="jurusan">jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" required>
        </li>
        <li>
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Tambahkan data!</button>
        </li>
    </ul>
    </Form>


</body>
</html>
