<html lang="en">
<style>
    table,tr{
        border: 2px solid black;
    }
</style>
<body>
    <form action="uts1.php" method="POST">
        <table>
            <tr><label for="form"><h2>Pesan Makanan dan Minuman </h2></label></tr>

            <tr>
                <td><label for="nama">Nama Pemesan </label></td>
                <td>:</td>
                <td><input type="text" name="nama" value=""  ></td>
            </tr>

            <tr>
                <td><label for="mkn">Makanan </label></td>
                <td>:</td>
                <td><input type="checkbox" name="mkn[]" value="Nasi Goreng">Nasi Goreng</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="mkn[]" value="Mie Goreng">Mie Goreng</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="mkn[]" value="Mie Godog">Mie Godog</td>
            </tr>

            <tr>
                <td><label for="min">Mimunam </label></td>
                <td>:</td>
                <td><input type="checkbox" name="min[]" value="Es Teh Manis">Es Teh Manis</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="min[]" value="Es Jeruk">Es Jeruk</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="min[]" value="Teh Panas">Teh Panas</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="min[]" value="Jeruk Panas">Jeruk Panas</td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Submit Data"></td>
            </tr>

        </table>
    </form>

    
</body>
</html>  