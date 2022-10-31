<?php 
session_start();

if(empty($_COOKIE['no']) && empty($_COOKIE['nama']) && empty($_COOKIE['label']) && empty($_COOKIE['minat'])){
    echo

    "<form action='tug1b.php' method='POST'>
        <table style ='border: 1px solid black'>
            <tr><h1>Pendaftaran Peserta Seminar</h1></tr>
            <tr>
                <td><label for='no'>NoInduk</label></td>
                <td><input type='text' name='no' value=' '></td>
            </tr>
            <tr>
                <td><label for='nama'>Nama</label></td>
                <td><input type='text' name='nama' value=' '></td>
            </tr>
            <tr>
                <td><label for='label'>Status</label></td>
                <td><input type='radio' name='label' value='Mahasiswa'>Mahasiswa</td>
            </tr>
            <tr>
                <td></td>
                <td><input type='radio' name='label' value='Dosen'>Dosen </td>
            </tr>
            <tr>
                <td><label for='minat'>Minat</label></td>
                <td><input type='checkbox' name='minat[]' value='Programing'>Programing</td>
            </tr>
            <tr>
                <td></td>
                <td><input type='checkbox' name='minat[]' value='DataBase'>Database</td>
            </tr>
            <tr>
                <td></td>
                <td><input type='checkbox' name='minat[]' value='Networking'>Networking</td>
            </tr>
            <tr>
                <td></td>
                <td><input type='checkbox' name='minat[]' value='Multimedia'>Multimedia</td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' value='submit Data'></td>
            </tr>
        </table>
    </form>";
}else{
    echo 
    "<table border='1'>
        <h1>Anda Sudah Terdaftar Sebagai Peserta Seminar </h1>
        <tr>
            <td>No. Induk</td>
            <td>"; echo $_COOKIE["no"]; echo "</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>"; echo $_COOKIE["nama"]; echo "</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>"; echo $_COOKIE["label"]; echo "</td>
        </tr>
        <tr>
            <td>Minat</td>
            <td>"; echo $_COOKIE["minat"]; echo "</td>
        </tr>
    </table>";
}
?>