<?php 
session_start();
$_SESSION["visit"] = "langkah anda lengkap";
?>

<html lang="en">
<body>
    <h1>ini halaman satu</h1>


<?php
echo "data di set. lanjut ke hal 2";
echo "<br>";
echo "<a href ='./hal_dua.php'> Halaman 2 <a/>";



?>
</body>
</html>