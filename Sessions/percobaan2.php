<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Nilai Session</title>
</head>
<body>
    <?php
    if(isset($_SESSION['pengguna'])){
        echo "<h1>Selamat datang,".$_SESSION['pengguna']."</h1>";  
    }
    ?>
</body>
</html>