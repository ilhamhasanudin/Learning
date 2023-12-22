<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}
require "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Halaman mahasiswa </title>
</head>

<body>
    <a href="logout.php">logout</a>
    <h1> Daftar mahasiswa</h1>

    <br></br>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus 
        placeholder="masukan keyword pencarian!.." autocomplete="off" id ="keyword">
        <button type="submit" name="cari" id="tombol-cari"> Cari Data</button>
    </form>
   
    <br>
    <div id="container">
        <Table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>no.</th>
                <th>Aksi</th>
                <th>gambar</th>
                <th>nrp</th>
                <th>nama</th>
                <th>email</th>
                <th>jurusan</th>
            </tr>

            <?php $i = 1 ?>
            <?php foreach( $mahasiswa as $row ) : ?>
            <tr>
                <th><?= $i ?></th>
                <th>
                    <a href="ubah.php?id=<?= $row["id"]; ?> ">ubah</a>
                    <br>
                    <a href="hapus.php?id=<?= $row["id"]; ?> 
                    " onclick="return confirm('apakah anda yakin data ini akan di hapus?')">
                        hapus
                    </a>
                </th>
                <th><img src="img/<?= $row["gambar"]; ?>" width="50"></th>
                <th><?= $row["nrp"]; ?></th>
                <th><?= $row["nama"]; ?></th>
                <th><?= $row["email"]; ?></th>
                <th><?= $row["jurusan"]; ?></th>
            </tr>
            
            <?php $i++ ?>
            <?php endforeach; ?>


        </Table>
    </div>
    <br></br>
    <a href="tambah.php">Tambah data mahasiswa</a>


    <script src="js/script.js"></script>
</body>
</html>
