<?php
$mahasiswa = ["ilham", "23131213131", "teknik informatika", "Ilham nur hasanudin"];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar mahasiswa</title>
    </head>
    <body>
        <h1>Daftar mahasiswa </h1>
        <ul>
            <?php foreach( $mahasiswa as $mhs ) : ?>
                <li><?php echo $mhs; ?></li>
            <?php endforeach; ?>
        </ul>
        
    </body>
</html>