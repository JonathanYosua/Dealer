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

	<form action="proses.php?aksi=tambahtransaksi" method="POST" >
	<input type="hidden" name="id_transaksi">
	<br>
	<label for="nama_buku">ID Motor</label>
	<input type="number" id="id_motor" name="id_motor">
    <br>
	<label for="nama_buku">ID Pelanggan</label>
	<input type="number" id="id_pelanggan" name="id_pelanggan">
	<br>
	<label for="penerbit">Kuantitas</label>
	<input type="number" id="kuantitas" name="kuantitas">
	<br>
	<label for="penulis">Harga</label>
	<input type="number" id="harga" name="harga">
	<br>
	<label for="penulis">Total Pembayaran</label>
	<input type="number" id="total_pembayaran" name="total_pembayaran">
    <br>
	<input type="submit" value="tambah">
	</form>
 </body>
</html>