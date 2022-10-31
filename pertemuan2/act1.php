<?php
// $nama = $_POST['nama']
$ipk = $_POST['ipk'];

if ($ipk < 2.76){
    echo "selamat mahasiswa ".$_POST['nama']." dengan nilai ipk $ipk tidak mendapat predikat";
}elseif (2.76 <= $ipk  && $ipk  <= 3.00) {
    echo "selamat mahasiswa ".$_POST['nama']." dengan nilai ipk $ipk predikat memuaskan";
}elseif (3.00 < $ipk && $ipk  <= 3.50) {
    echo "selamat mahasiswa ".$_POST['nama']." dengan nilai ipk $ipk preedikat sangat memuaskan";
}else {
    echo "selamat mahasiswa ".$_POST['nama']." dengan nilai ipk $ipk predikat dengan pujian";
}

?>