<?php
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Halaman mahasiswa </title>
</head>

<body>
    <h1> Daftar mahasiswa</h1>

   
    <br></br>

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
                <a href="">
                    ubah
                </a>
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
    <br></br>
    <a href="tambah.php">Tambah data mahasiswa</a>
    
</body>
</html>
