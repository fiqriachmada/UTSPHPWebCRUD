<!DOCTYPE html>
<html lang="en">
<?php session_start();
if(isset($_SESSION['username'])){
}else{
    header("location: login.php");
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="//db.onlinewebfonts.com/c/01173b246d9d9ea808ea75a26b3b61bb?family=Circular+Spotify+Tx+T+Black" rel="stylesheet" type="text/css" />
</head>

<body class="body">
    <header class="header">
        <h1 class="h1">
            Admin E-Commerce
        </h1>
    </header>

    <a class="h3" href="index.php">Dashboard</a>
    <br />
    <a class="h3" href="logout.php">Logout</a>
    <br /><br />
    

    <?php include('view.php'); ?>

</body>

</html>
