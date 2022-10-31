<?php

echo "<h1> DAFTAR HOBI YANG AKU PILIH </h1>";
$dh= $_POST["hobi"];
echo "<ol>";
foreach ($dh as $d){
    echo "<li> $d </li>";
}
echo "</ol>";
echo " <tr><a href = './lat3.php'> kembali </a>";
?>