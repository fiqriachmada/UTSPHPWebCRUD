<!DOCTYPE html>
<html lang="en">
<?php session_start();
if(isset($_SESSION['username'])){
    header("location: index.php");
}else{
}

if(isset($_COOKIE['pesan'])){
    echo $_COOKIE['pesan'];
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//db.onlinewebfonts.com/c/01173b246d9d9ea808ea75a26b3b61bb?family=Circular+Spotify+Tx+T+Black" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
    if(isset($_COOKIE["message"])){
        echo $_COOKIE["message"];
    }
    ?>
    <h1>Login</h1>
    <form action="loginconf.php" method="POST">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="reset" value="Cancel"><input type="submit" value="Login" name="submit"></td>
        </tr>
</body>
</html>