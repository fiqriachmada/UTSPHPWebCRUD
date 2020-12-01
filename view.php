<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body">
    <table border="5" class="table h3">
        <Button class="button">
            <a class="h5" href="add.php">Tambah user</a>
        </Button>
        <br>
        <br>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Nomer Telepon</th>
                <th>Email</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $sql = "SELECT * FROM admin";
            $query = mysqli_query($db, $sql);

            while ($admin = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $admin['ID'] . "</td>";
                echo "<td>" . $admin['Nama'] . "</td>";
                echo "<td>" . $admin['Umur'] . "</td>";
                echo "<td>" . $admin['Jenis_Kelamin'] . "</td>";
                echo "<td>" . $admin['No_Telp'] . "</td>";
                echo "<td>" . $admin['Email'] . "</td>";

                echo "<td>";
                echo "<a href='edit.php?ID=" . $admin['ID'] . " '>Edit</a> | ";
                echo "<a href='javascript:hapusData(" . $admin['ID'] . ")'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <script language="JavaScript" type="text/javascript">
        var message = "Berhasil Dihapus";

        function hapusData(ID) {
            if (confirm("Apakah Anda yakin akan menghapus data ini?")) {
                window.location.href = 'delete.php?ID=' + ID;
                if ("OK") {
                    alert(message);
                }
            }
        }
    </script>
</body>


</html>