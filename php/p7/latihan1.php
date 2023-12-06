<?php
// variabel super global 
// merupakan array associative
// $_GET
// $_POST
// $_REQUEST
// $_SESSIOM
// $_COOKIE
// $_SERVER menampilkan string dan varialbel server kita 
// $_ENV

// GET 
$mahasiswa = [
    [
        "nrp" => "1231123123",
        "nama" => "ilham nr",
        "email" => "ilhamadkahan@3sad.com",
        "jurusan" => "interdsda",
        "gambar" => "ilham.jpg"
    ],
    [
        "nrp" => "1231123123",
        "nama" => "ilham ke2",
        "email" => "ilhamadkahan@3sad.id",
        "jurusan" => "manajemn",
        "gambar" => "ilham1.png"
    ]
];

?>
<!DOCTYPE html>
<html>
    <head>
        <title> GET</title>
    </head>
    <body>
<h1>Daftar Mahasiswa</h1>
<ul> 
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
        &nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>
        "><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>



    </body>
</html>
