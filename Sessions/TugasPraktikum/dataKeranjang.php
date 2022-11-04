<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membaca Data Keranjang </title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION["listPilih"])){
    $dataKeranjang = $_SESSION['listPilih'];
    echo "<center>";
    echo "<h1> Isi Keranjang </h1>";
    echo "<a href='./actionLogout.php'>[logout]</a>";
    echo "<br>";
    echo "</center>";
    
    echo "<b>Barang yang sudah anda pilih </b>";
    echo "<ol>";
    foreach ($dataKeranjang as $list){
    echo "<li> $list </li>";
}
echo "</ol>";
echo " <tr><a href = './app.php'> kembali pilih barang </a>";
}

?>
    
</body>
</html>
