<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Pilih Barang</h1>
    <h3> selamat datang jordhan </h3>
    <a href="actionLogout.php">[Logout]</a>
    </center>

    <form action="actionKeranjang.php" method="POST">
        <table>
        <tr>
            <label for="makmin"><b>Makanan & Minuman</b></label><br>
            <input type="checkbox" name="makmin[]" value="Gula">Gula <br>
            <input type="checkbox" name="makmin[]" value="Teh">teh <br>
            <input type="checkbox" name="makmin[]" value="Kopi">Susu <br>
            <input type="checkbox" name="makmin[]" value="Biskuit">Biskuit <br>
            <br>
        </tr>
        <tr>
            <label for="pm"><b>Peralatan Mandi</b></label><br>
            <input type="checkbox" name="makmin[]" value="Sikat Gigi">Sikat Gigi <br>
            <input type="checkbox" name="makmin[]" value="Pasta Gigi">Pasta Gigi <br>
            <input type="checkbox" name="makmin[]" value="Sabun">Sabun <br>
            <input type="checkbox" name="makmin[]" value="Shampoo">Shampoo<br>
            <input type="checkbox" name="makmin[]" value="Shampoo">Sabun Cuci Muka<br>
            <br>
        </tr>
        <tr>
            <tr></tr>
            <label for="at"><b>Alat Tulis</b></label><br>
            <input type="checkbox" name="makmin[]" value="Sikat Gigi">Pensil <br>
            <input type="checkbox" name="makmin[]" value="Pasta Gigi">Penggaris <br>
            <input type="checkbox" name="makmin[]" value="Sabun">penghapus <br>
            <input type="checkbox" name="makmin[]" value="Shampoo">Ballpoint <br>
            <input type="checkbox" name="makmin[]" value="Shampoo">Kertas HVS <br> 
            <br>
        </tr>
        <tr>
            <input type="submit" value="Masuk Keranjang ">
            <td> </td>
            <a href="  dataKeranjang.php"> lihat isi keranjang</a>
        </tr>
        </table>
    </form>

</body>
</html>