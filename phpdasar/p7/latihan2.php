<?php
// cek apakah ada data di $_GET
// fungsi agar tidak langsung masuk ke latihan 2
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("location: latihan1.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> detail mahasiswa</title>
    </head>
    <body>

    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?> "  width="70" height="90"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>
    <a href="latihan1.php">Kemabali ke daftar mahasiswa</a>
    </body>
</html>
