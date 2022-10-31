<?php
$nimNama = ["101"=>"budi",
            "102"=>"sari",
            "103"=>"rudi",
            "104"=>"jimmy",
            "105"=>"rachel"];

$terpilih= $_GET["nim"];

echo "<h1> Detil Mahasiswa </h1>";
echo "<table border = '1'>";
echo "<tr><td> NIM </td> <td> NAMA </td></tr>";
echo "<tr><td>$terpilih</td> <td>$nimNama[$terpilih]</td></tr>";

?>