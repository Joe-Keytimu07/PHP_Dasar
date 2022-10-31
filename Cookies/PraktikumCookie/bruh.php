<?php
session_start();

if(empty($_COOKIE["induk"]) && empty($_COOKIE["nama"]) && empty($_COOKIE["status"]) && empty($_COOKIE["minat"])){

    echo 
    "<form action='bruh2.php' method='POST'>
        <table style='border: 1px solid black'>
            <tr>
                <th colspan=2><h1>PENDAFTARAN PESERTA SEMINAR</h1></th>
            </tr>
            <tr>
                <td>No. Induk</td>
                <td><input type='text' name='induk' id='induk'></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type='text' name='nama' id='nama'></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type='radio' name='status' id='status' value='Dosen'>Dosen</td>
            </tr>
            <tr>
                <td></td><td><input type='radio' name='status' id='status' value='Mahasiswa'>Mahasiswa</td>
            </tr>
            <tr>
                <td>Minat</td>
                <td><input type='checkbox' name='minat[]' id='minat' value='Programming'>Programming</td>
            </tr>
            <tr>
                <td></td><td><input type='checkbox' name='minat[]' id='minat' value='Database'>Database</td>
            </tr>
            <tr>
                <td></td><td><input type='checkbox' name='minat[]' id='minat' value='Networking'>Networking</td>
            </tr>
            <tr>
                <td></td><td><input type='checkbox' name='minat[]' id='minat' value='Multimedia'>Multimedia</td>
            </tr>
            <tr><td></td><td><input type='submit' value='submit'></td></tr>
        </table>
    </form>";


}

else{
    echo 
    "<table border='1'>
        <h1>Anda Sudah Terdaftar Sebagai Peserta Seminar </h1>
        <tr>
            <td>No. Induk</td>
            <td>"; echo $_COOKIE["induk"]; echo "</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>"; echo $_COOKIE["nama"]; echo "</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>"; echo $_COOKIE["status"]; echo "</td>
        </tr>
        <tr>
            <td>Minat</td>
            <td>"; echo $_COOKIE["minat"]; echo "</td>
        </tr>
    </table>";
}
?>