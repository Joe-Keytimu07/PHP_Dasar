  
  <?php
    // $mkn1 = $_POST['mkn'];
    // $min1 = $_POST['min'];
    $nama = $_POST["nama"];
    $pesan = "{$nama} memesan";

    
  echo "<h1> Tampilkan Pesanan </h1>";
  echo $pesan;

  if (isset($_POST["mkn"])){
    echo "<br>";
    echo "makanan :";
    echo "<ol>";
    foreach($_POST["mkn"] as $mk){
      echo "<li> $mk </li>";
    }
    echo "</ol>";
  }else
  echo "<h1> isi juga dong</h1>"; 


  if (isset($_POST["min"])){
    
  echo "<br>";
  echo "mimunan :";
  echo "<ol>";
  foreach($_POST["min"]as $mi){
    echo "<li> $mi </li>";
  }
  echo "</ol>";
  }else 
  echo "<h1> isi dong </h1>";

  echo "<tr><a href = './uts.php'> kembali </a>";

  ?>