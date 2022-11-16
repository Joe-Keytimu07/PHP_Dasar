
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventaris";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
// $sql = "DELETE FROM MyGuests WHERE id=3";

if(isset($_POST['submit'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nabar'];
    $jenis = $_POST['jenis'];
    $lokasi = $_POST['lokasi'];
    $harga = $_POST['harsat'];
    $jml = $_POST['jumstock'];

    // sql to insert
    $sql = "INSERT INTO stok_barang(kode, nama, jenis, lokasi, harga, jumlah) VALUES ('$kode','$nama','$jenis','$lokasi','$harga','$jml')";

    mysqli_query($conn, $sql);

    echo "data telah disimpan";
}
if(isset($_POST['update'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nabar'];
    $jenis = $_POST['jenis'];
    $lokasi = $_POST['lokasi'];
    $harga = $_POST['harsat'];
    $jml = $_POST['jumstock'];

    //  sql to update 
    $sql = "UPDATE stok_barang SET kode='$kode',nama='$nama',jenis='$jenis',lokasi='$lokasi',harga=$harga,jumlah=$jml WHERE kode='$kode'";

    mysqli_query($conn, $sql);

    echo "Data telah di update";
}
if(isset($_POST['delete'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nabar'];
    $jenis = $_POST['jenis'];
    $lokasi = $_POST['lokasi'];
    $harga = $_POST['harsat'];
    $jml = $_POST['jumstock'];

    //  sql to update 
    $sql = "DELETE FROM stok_barang WHERE kode='$kode'";

    mysqli_query($conn, $sql);

    echo "data dihapus";
}
$conn->close();
?>
    