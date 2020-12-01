<?php
include("connection.php");

if (isset($_POST['update'])) {
    $ID = $_POST['ID'];
    $Nama = $_POST['Nama'];
    $Umur = $_POST['Umur'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $No_Telp = $_POST['No_Telp'];
    $Email = $_POST['Email'];

    $sql = "UPDATE admin SET Nama='$Nama',Umur='$Umur',Jenis_Kelamin='$Jenis_Kelamin',No_Telp='$No_Telp',Email='$Email' WHERE ID=$ID";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php');
    }else{
        die("Error");
    }
}
