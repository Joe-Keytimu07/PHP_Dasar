<?php
session_start();
?>

<html lang="en">
<body>
    <h1>ini halaman empat</h1>
<?php 
if(isset ($_SESSION["visit"])){
    echo "pesan :";
    echo "<br>";
    echo "" . $_SESSION["visit"]."<br>";
    echo "<br>";
    echo "<a href='./halMain.php'>Halaman Utama</a>";
}else{
    header("hal_eror.php");
}
?>
</body>
</html>