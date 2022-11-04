<?php
    session_start();
    $_SESSION['username'] = '';
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    echo "Terimakasih atas kunjungannya";
    echo "<a href='./login.php'>Login Kembali</a>";
?>