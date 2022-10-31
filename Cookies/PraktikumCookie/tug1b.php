<?php
$no = $_POST["no"];
$nama = $_POST["nama"];
$label =  $_POST["label"];
$minat = implode(",", $_POST["minat"]);

setcookie("no",$no);
setcookie("nama", $nama);
setcookie("label",$label);
setcookie("minat",$minat);
// setcookie('submit',1);
echo "<h1>pendaftaran berhasil</h1>";

?>

