<!DOCTYPE html>
<html lang="en">
<?php session_start();
if(isset($_SESSION['username'])){
    header("location: index.php");
}else{
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body class="body">
    <?php
    if(isset($_COOKIE["message"])){
        echo $_COOKIE["message"];
    }
    ?>
    <header class="header">
        <h1 class="h1">Login</h1>
    </header>
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
