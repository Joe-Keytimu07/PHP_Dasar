<?php
$daftarHobi = ["Sepak Bola",
                "Renang",
                "Nonton Bioskop",
                "Main Game",
                "Shooping"];

echo "<h1> DAFTAR HOBI </h1>";
echo "<form action='lat3b.php' method='POST'>";

foreach($daftarHobi as $dh){
    echo "<input name='hobi[]' value='$dh' type='checkbox'/>$dh";
    echo "<br>";
}
echo "<input type='submit' />";
echo "</form>";
?>