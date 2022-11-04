<?php
// variable pendefinisian kresdensial 
$usernamelogin = 'jordhan';
$passwordlogin = 'admin123';

// memulai sessions
session_start();

// mengambil isian dari form login
$username =$_POST['username'];
$password = $_POST['password'];

// pengecekan login 
if($username == $usernamelogin && $password == $passwordlogin){
    session_start();
    $_SESSION['username']=$username;
    header("Location: app.php");
}else {
    echo "<center>";
    echo "<h1> maaf, username atau password anda salah </h1>";
    echo "<br>";
    echo "<a href='./login.php'>coba Kembali</a>";
    echo "</center>";
}

?>
