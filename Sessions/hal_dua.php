<?php
session_start();
?>
<html lang="en">
<body>
    <h1>ini halaman dua</h1>
<tr>

<?php
if(isset ($_SESSION["visit"])){
    echo "Lanjut ke halaman 3 dari ";
    echo "<br>";
    echo "<a href ='./hal_tiga.php'> Halaman 3 <a/>";

}elseif(!isset ($_SESSION["visit"])){
    // $_SESSION["visit"] = true ;
    header("hal_eror.php");
    // exit;
}


?>
</tr>
</body>
</html>