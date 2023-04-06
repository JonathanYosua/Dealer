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
   <center><table border="3px solid yellow">
    <a href="form_motor.php">tambah data</a>
        <tr>
            <th>Id Motor</th>
            <th>Model Motor</th>
            <th>Tahun dibuat</th>
            <th>Harga</th>
        </tr>
</center>
       <?php foreach($db_josua->tampilmotor() as $x){
         ?>
           <tr>
           <td><?php echo $x ['id_motor']?></td>
           <td><?php echo $x ['merk_motor']?></td>
           <td><?php echo $x ['harga']?></td>
           <td><?php echo $x['tahun_dibuat']?></td>
           </tr>
           <?php
        }?>
           </table>
</body>
</html>