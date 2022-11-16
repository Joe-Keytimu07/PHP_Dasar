<table border="1" cellpadding="4" >
<tr>
    <th>No</th>
    <th>Kode</th>
    <th>Nama Matkul</th>
    <th>Kelas</th>
    <th>Dosen Pengampu</th>
    <th>Hari </th>
    <th>Jam Mulai - Akhir</th>
</tr>

<?php
echo "<h2>Daftar Jadwal Kuliah</h2>";
$num = 0;
$con = mysqli_connect ("localhost", "root", "", "jadwalkuliah");

$select = "Select * from table_jadwal";

$rs = mysqli_query($con, $select);

if ($rs){
while($row=mysqli_fetch_array($rs)){
    $num++;
    echo "<tr>
    <td>".$num."</td>
    <td>".$row['kode']."</td>
    <td>".$row['matkul']."</td>
    <td>".$row['kelas']."</td>
    <td>".$row['dosen']."</td>
    <td>".$row['hari']."</td>
    <td>".$row['jam']."</td>
    </tr>";
}
}
?>
</table>
<a href="input.php">Kembali</a> <br>