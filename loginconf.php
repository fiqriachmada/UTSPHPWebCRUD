<?php
session_start();
include ("connection.php");
if (isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);
}
$sql = "SELECT * FROM admin WHERE Username = '$username' AND Password = '$password'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if(!empty($data)){
    $_SESSION['username'] = $data['ID'];
    $_SESSION['nama'] = $data['Nama'];

    setcookie("message","delete",time()-1);
    header("location: index.php");
}else{
    setcookie("Message","Maaf, Username atau Password salah",time()+3600);
    header("location: login.php");
}
