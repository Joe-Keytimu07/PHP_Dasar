<!DOCTYPE html>
<html lang="en">
    <style>
        table,tr{
            border: 2px solid black;
        }
    </style>
<body>
<form action="tantangan2b.php" method="POST">
        <table>
                <tr><label for="form"><h2>FORM BIODATA</h2></label></tr>
        
            <tr>
                <td><label for="nama"> Nama </label> </td> 
                <td>:</td> 
                <td> <input type="text" name="nama" value=" "/></td>
            </tr>

            <tr>
                <td><label for="alamat"> Alamat </label></td>
                <td>:</td> 
                <td> <input type="text" name="alamat" value=" "/> <br></td>
            </tr>

            <tr>
                <td>  <label for="umur"> Umur </label> </td>
                <td> :</td> 
                <td> <input type="text" name="umur" value=" "/> <br></td>
            </tr>

            <tr>
                <td> <label for="jk"> Jenis Kelamin  </label> </td>
                <td> :</td> 
                <td> <input type="radio" name="jenis_kelamin" value="pria"> pria </td>
            <tr>
                <td></td>
                <td></td>
                <td><input type="radio" name="jenis_kelamin" value="perempuan"> perempuan</td>

            </tr>
                
            <tr>
                <td><label for="hobi"> Hobi </label></td>
                <td>:</td>
                <td><input type="checkbox" name="hoby[]" value="Musik">Musik</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hoby[]" value="programing">Programing</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hoby[]" value="game">Game</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hoby[]" value="movies">Movies</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hoby[]" value="traveling">Traveling</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hoby[]" value="sport">Sport</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hoby[]" value="organization">Organization</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hoby[]" value="automotive">Automotive</td>
            </tr>
            <tr>
                <td> <input type="submit" value="Submit Data"> </td> 
            </tr>
</body>
</html>