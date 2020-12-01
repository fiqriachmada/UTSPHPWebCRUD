<?php
include("connection.php");

if (!isset($_GET['ID'])) {
    header('Location: index.php');
}

$ID = $_GET['ID'];

$sql = "SELECT * FROM admin WHERE ID=$ID";
$query = mysqli_query($db, $sql);
$admin = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ada!");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body">
    <header class="header">
        <h1 class="h1">
            Edit Admin
        </h1>
    </header>

    <a class="h3" href="index.php">Dashboard</a>
    <br /><br />

    <form method="POST" action="proses_edit.php">
        <table border="5" class="table h4">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" value="<?php echo $admin['Nama']; ?>"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="Umur" value=<?php echo $admin['Umur'] ?>></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="Jenis_Kelamin" id="select">
                        <option value="Laki-laki" <?php echo $admin['Jenis_Kelamin']; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php echo $admin['Jenis_Kelamin']; ?>>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nomer Telepon</td>
                <td><input type="phone" name="No_Telp" value=<?php echo $admin['No_Telp'] ?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="Email" value=<?php echo $admin['Email'] ?>></td>
            </tr>
        </table>
        <br>
        <input type="hidden" name="ID" value=<?php echo $admin['ID']; ?>>
        <button class="button h5" type="submit" name="update" value="Submit">Submit</button>
    </form>
</body>

</html>

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
    } else {
        die("Error");
    }
}
?>