<?php
$ipk = 3;

if ($ipk < 2.76){
    echo "tidak mendapat predikat";
}elseif (2.76 <= $ipk && $ipk <= 3.00) {
    echo "memuaskan";
}elseif (3.00 < $ipk && $iplk <= 3.50) {
    echo "sangat memuaskan";
}else {
    echo "dengan pujian";
}


// echo "predkat kamu : $ipk";

?>