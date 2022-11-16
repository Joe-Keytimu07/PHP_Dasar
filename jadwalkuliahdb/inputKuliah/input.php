<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jadwal Kuliah</title>
</head>
<body>
<tr>
        <h2>Input Jadwal Kuliah</h2>
        <h3></h3>
        <a href="tampil.php">|Lihat Daftar Kuliah|</a>
    </tr>
       
    <form action="inputconnectdb.php" method="POST">
        <table border="0">
        <tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <td><label for="kode" >Kode Mata Kuliah</label></td>
            <td><input type="text" name="kode" value=""></td>
        </tr>
 
        <tr>
            <td><label for="nama"></label>Nama Matkul </td>
            <td><input type="text" name="nama" value=""></td>
        </tr>

        <tr>
            <td><label for="kelas">Kelas</label></td>
            <td><select name="kelas" id="kelas">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>                
            </select></td>
        </tr>
 
        <tr>
            <td><label for="nados">Nama Dosen </label></td>
            <td><input type="text" name="nados" value=""></td>
        </tr>

        <tr>
            <td><label for="hari">Hari</label></td>
            <td><select name="hari" id="hari">
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jum'at">Jum'at</option>                
            </select></td>
        </tr>
 
        <tr>
            <td><label for="jam">Jam</label></td>
            <td><select name="jam" id="jam">
                <option value="00.00-00.00">00.00-00.00</option>
                <option value="07.00-09.00">07.00-09.00</option>
                <option value="07.00-10.00">07.00-10.00</option>
                <option value="08.00-10.00">08.00-10.00</option>
                <option value="08.00-11.00">08.00-11.00</option>
                <option value="09.00-11.00">09.00-11.00</option>
                <option value="09.00-12.00">09.00-12.00</option>
                <option value="10.00-12.00">10.00-12.00</option>
                <option value="10.00-13.00">10.00-13.00</option>
                <option value="13.00-15.00">13.00-15.00</option>
                <option value="13.00-16.00">13.00-16.00</option>
                <option value="14.00-16.00">14.00-16.00</option>
                <option value="14.00-17.00">14.00-17.00</option>
                <option value="15.00-17.00">15.00-17.00</option>
                <option value="15.00-18.00">15.00-18.00</option>
                <option value="E">jamkos</option>                
            </select></td>
        </tr>
 
        <tr>
            <td></td>
            <td>
            <input type="submit" name="submit" value="Simpan">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
        </td>
        </tr>
 
        </table>
    </form>

    
</body>
</html>