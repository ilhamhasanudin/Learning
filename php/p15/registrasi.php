<?php 

session_start();

if( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}

require 'functions.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
            alert(' anda berhasil registrasi!');
        </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> halaman registrasi </title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
<h1>registrasi</h1>

<form action="" method="post">
    <ul>
        <li>
        <label for="username">username :</label>
        <input type="text" name="username" id="username">    
        </li>
        <li>
        <label for="password">password :</label>
        <input type="password" name="password" id="password"> 
        </li>
        <li>
        <label for="password2">Konfirmasi password :</label>
        <input type="password" name="password2" id="password2"> 
        </li>
        <li>
            <button type="submit" name="register">Register!</button>
        </li>
    </ul>
</form>
</body>
</html>
