<?php
include("connection.php");

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $sql = "DELETE FROM admin WHERE ID=$ID";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php');
    }else{
        die("Gagal menghapus");
    }
}
