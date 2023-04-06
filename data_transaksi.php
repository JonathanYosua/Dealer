<?php 
include 'koneksi.php';
$db_josua = new database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Motor Josua</title>
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
    <center><h2>Data Transaksi Dealer Josua</h2>
    <table border="3px solid yellow">
    <a href="form_transaksi.php">tambah data</a>
        <tr>
            <th>Id Transaksi</th>
            <th>Nama Pelanggan</th>
            <th>Merk Motor</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Total pembayaran</th>
        </tr>
</center>
        <?php
        foreach($db_josua->tampilantransaksi() as $row){
        ?>
        <tr>
            <td><?=$row['id_transaksi']?></td>
            <td><?=$row['nama_pelanggan']?></td>
            <td><?=$row['merk_motor']?></td>
            <td><?=$row['kuantitas']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['total_pembayaran'] ?></td>
        </tr>
        <?php } ?>
    </table>
        </div>
</body>
</html>