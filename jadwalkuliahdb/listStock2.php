<table border="1" cellpadding="4" >

<tr>
    <th>No</th>
    <th>Kode</th>
    <th>Nama Barang</th>
    <th>Jenis</th>
    <th>Lokasi</th>
    <th>Harga</th>
    <th>Jumlah</th>
</tr>

<?php
echo "<h2>Daftar Stok Barang</h2>";
echo "<h2>Toko Kelontong Bahagia</h2>";
$num = 0;
$con = mysqli_connect ("localhost", "root", "", "inventaris");

$select = "Select * from stok_barang";

$rs = mysqli_query($con, $select);

if($rs){
while($row=mysqli_fetch_array($rs)){
    $num++;
    echo "<tr>
    <td>".$num."</td>
    <td>".$row['kode']."</td>
    <td>".$row['nama']."</td>
    <td>".$row['jenis']."</td>
    <td>".$row['lokasi']."</td>
    <td>".$row['harga']."</td>
    <td>".$row['jumlah']."</td>
    </tr>";
}
}
?>
</table>
<a href="input.php">Kembali</a> <br>