<!DOCTYPE html>
<html lang="en">
    <style>
        table{
            border: 2px solid black;
        }
    </style>
<body>

    <form action="tantangan1b.php" method="POST">
        <table>
            <tr>
                <td> <label for="nim"> NIM  : </label> </td> 
                <td> <input type="text" name="nim" value=" "/> <br></td>
            </tr>

            <tr>
                <td>  <label for="nama"> Nama : </label> </td> 
                <td> <input type="text" name="nama" value=" "/> <br></td>
            </tr>

            <tr>
                <td> <label for="lulus"> Status Kelulusan : </label> </td> 
                <td> <select name="lulus">
                        <option value="sempurna"> sempurna </option>
                        <option value="memuaskan"> memuaskan </option>
                        <option value="kurang memuaskan"> kurang memuaskan </option>
                        <option value="buruk"> buruk </option>
                    </select> </td>
            </tr>

            <tr>
                <td></td>
                <td> <input type="submit" value="Submit Data"> </td> 
            </tr>
        </table>
    </form>
</body>
</html>