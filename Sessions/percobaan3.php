<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menyimpan array ke dalam session</title>
</head>
<body>
    <?php
        $daftarBuah = array("Apel","Jeruk","Semanggka","Jambu","Mangga","Durian");

        $_SESSION['listBuah']=$daftarBuah;
        echo "<h1>Daftar Buah sudah disimpan kedalam session</h1>";
    ?>
</body>
</html>