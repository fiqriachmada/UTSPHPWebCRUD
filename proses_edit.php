<?php
include("connection.php");

if (isset($_POST['update'])) {
    $ID = $_POST['ID'];
    $Nama = $_POST['Nama'];
    $Umur = $_POST['Umur'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];

    $sql = "UPDATE admin SET Nama='$Nama',Umur='$Umur',Jenis_Kelamin='$Jenis_Kelamin' WHERE ID=$ID";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php');
    }else{
        die("Error");
    }
}
?>