<?php
$suhu = [23,45,36,27,33,32,30,28,35,32];

echo "<ul>";
echo "<table>";
foreach ($suhu as $s => $h){
    echo "<tr><td> hari ke-",$s+1,"</td><td> $h </td></tr>";
}
echo "</ul>";
?>
<style>
    table,tr,td {
        border: 1px solid black ;
    }
</style>