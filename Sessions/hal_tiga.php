<?php
session_start();
?>
<html lang="en">
<body>
    <h1>ini halaman tiga</h1>
<tr>
<?php
if(isset ($_SESSION["visit"])){
    echo "Lanjut ke halaman 4 dari ";
    echo "<br>";
    echo "<a href ='./hal_empat.php'> Halaman 4 <a/>";
}else {
    header("hal_eror.php");
}
?>
</tr>
</body>
</html>