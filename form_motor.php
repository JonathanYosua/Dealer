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

	<form action="proses.php?aksi=tambahmotor" method="POST" >
	<input type="hidden" name="id_motor">
	<br>
	<label for="nama_buku">Nama Motor</label>
	<input type="text" id="merk_motor" name="merk_motor">
	<br>
	<label for="penulis">Harga</label>
	<input type="text" id="harga" name="harga">
	<br>
	<label for="penerbit">Tahun Dibuat</label>
	<input type="text" id="tahun_dibuat" name="tahun_dibuat">
	<br>
	<input type="submit" value="tambah">
	</form>
 </body>
</html>