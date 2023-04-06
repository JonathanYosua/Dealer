<?php 
include 'koneksi.php';
$db_josua = new database;
?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="../DEALER_MOTOR/style.css">
</head>

<body>
<div class="content">
    <header>
        <h1 class="judul">Dealer Motor</h1>
        <h3 class="deskripsi"></h3>
    </header>
    <div class="menu">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="data_motor.php">Menu Motor</a></li>
            <li><a href="data_pelanggan.php">Nama Pelanggan</a></li>
            <li><a href="data_transaksi.php">Transaksi Motor</a></li>
        </ul>
    
    </div>
    </div>

    <center>
    <table border="3px solid yellow">
        <center><h2>Data Pelanggan Dealer Joshua</h2></center>
    <a href="form_pelanggan.php">tambah data</a>
        <tr>
            <th>Id Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>No_hp</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
</center>
        <?php 
        foreach($db_josua->tampilpelanggan() as $row){
            ?>
            <tr>
                <td><?= $row['id_pelanggan']?></td>
                <td><?= $row['nama_pelanggan']?></td>
                <td><?= $row['no_hp']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['alamat']?></td>
            </tr>
        
            <?php }?>
    </table>
</body>
</html>