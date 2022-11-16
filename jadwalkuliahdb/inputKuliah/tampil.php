    <html>
        <head>
            <title>Cara Menampilkan Data Berdasarkan Dropdown Select PHP MySQLi</title>
        </head>
        <?php
       
        ?>
        <body>
            <h3>Menampilkan Data Berdasarkan Dropdown Select Ke Daftar Tabel</h3>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
                <p>Select list:</p>
                <select name="hari" id="hari" style="width:160px;">
                    <?php
                    include "inputconnectdb.php";

                    //query menampilkan hari ke dalam combobox
                    $con = mysqli_connect ("localhost", "root", "", "jadwalkuliah");
                    $sql = "Select * From table_jadwal  GROUP BY hari ORDER BY hari";
                    $query=mysqli_query($con, $sql);

                    while ($hari = mysqli_fetch_assoc($query)){
                    ?>
                    <option value="<?=$hari['hari'];?>"><?php echo $hari['hari'];?></option>
                    <?php
                    }
                    ?>
                </select>
                <input type="submit" value="Pilih">
                <a href="./">Refresh</a>
            </form>
            
            <table border="1" cellpadding="2">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Matkul</th>
                    <th>Kelas</th>
                    <th>Dosen Pengampu</th>
                    <th>Hari </th>
                    <th>Jam Mulai - Akhir</th>
                </tr>
                </thead>
                <?php
                if (isset($_GET['hari'])) {
                    $hari=trim($_GET['hari']);
                    
                    //menampilkan jadwal berdasarkan hari yang dipilih pada combobox
                    $sql1 = "Select * From table_jadwal WHERE hari='$hari' ";
                    $lj=mysqli_query($con, $sql1);
                
                    $no=0;
                    while ($tjad = mysqli_fetch_array($lj)) {
                    $no++;
                    ?>
                <tbody>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $tjad['kode'];?></td>
                        <td><?php echo $tjad['matkul'];?></td>
                        <td><?php echo $tjad['kelas'];?></td>
                        <td><?php echo $tjad['dosen'];?></td>
                        <td><?php echo $tjad['hari'];?></td>
                        <td><?php echo $tjad['jam'];?></td>
                    </tr>
                </tbody>
                <?php
                    }
                }
                ?>
            </table>
        </body>
    </html>
