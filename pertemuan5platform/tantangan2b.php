<!DOCTYPE html>
<html lang="en">
<body>
    <table border="1" cellpadding="3">
    <tr>
        <td><label for="stat"><h1>FORM BIODATA REVIEW </h1></label></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $_POST["nama"];?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?php echo $_POST["alamat"];?> </td>
    </tr>
    <tr>
        <td>Umur</td>
        <td><?php echo $_POST["umur"];?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?php 
        if (isset($_POST['jenis_kelamin'])) {
            $jenis_kelamin=$_POST['jenis_kelamin'];
            echo $jenis_kelamin;
        }
        ?></td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td><?php 
        foreach($_POST["hoby"]as $hobi){
            echo $hobi.",";
        }
            ?></td>
    </tr>


    </table>
</body>
</html>