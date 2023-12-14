<?php 
require 'functions.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE
        username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {
        
        // chek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            header("location: index.php");
            exit;
        }
    }

    $error = true;
}

?>
<!-- membuat tag html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title> LOGIN </title>
</head>

<body>
    <h1>
         Halamana login 
    </h1>
    <?php if( isset($error) ) : ?>
        <p> username / password salah</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
            <label for="username">username</label>
            <input type="text" name="username" id="username">
            </li>

            <li>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>
