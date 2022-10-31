<!DOCTYPE html>
<html lang="en">
<style>
    table{
        border: solid black 2px;
    }
</style>
<body>
    <table>
    <tr>
        <td><label for="stat"><h1> STATUS KELULUSAN MAHASISWA </h1></label></td>
    </tr>
    <tr>
        <td>mahasiswa dengan Nama <?php echo $_POST["nama"];?> Nim <?php echo $_POST["nim"];?> 
        berhsil menyelesaikan studi S1 dengan predikat <?php echo $_POST["lulus"];?></td>
    </tr>
    </table>
    
</body>
</html>