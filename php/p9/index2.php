<?php 
//koneksi ke database
require "functions.php";

//ambil data dari table mahasiswa // query data mahasiswa

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() / mengembalikan array numerik
// mysqli_fetch_assoc / mengembalikan array assosiative / huruf
// mysqli_fetch_array / mengembalikan array assosiative / huruf dan numerik
// mysqli_fetch_object / 

// menggunakan looping while
// while( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs);

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Halaman mahasiswa </title>
</head>

<body>
    <h1> Daftar mahasiswa</h1>

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
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <th><?= $i ?></th>
            <th>
                <a href="">ubah</a>
                <br>
                <a href="">hapus</a>
            </th>
            <th><img src="img/<?= $row["gambar"]; ?>" width="50"></th>
            <th><?= $row["nrp"]; ?></th>
            <th><?= $row["nama"]; ?></th>
            <th><?= $row["email"]; ?></th>
            <th><?= $row["jurusan"]; ?></th>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>







    </Table>

</body>
</html>
