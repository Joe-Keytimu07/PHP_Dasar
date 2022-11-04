<?php 
session_start();

$dataKeranjang = $_POST['makmin'];
$_SESSION['listPilih']= $dataKeranjang;

echo "<center>";
echo "<h1>Barang sudah dimasukan kedalam keranjang </h1>";
echo "data inputan sukses";
echo "<br>";
echo "<a href='./app.php'>[Pilih Barang]  </a>";
echo "<a href='./dataKeranjang.php'>  [Lihat Keranjang]</a>";
echo "</center>";
?>