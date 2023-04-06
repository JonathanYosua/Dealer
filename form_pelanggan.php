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

	<form action="proses.php?aksi=tambahpelanggan" method="POST" >
	<input type="hidden" name="id_pelanggan">
	<br>
	<label for="nama_buku">Nama Pelanggan</label>
	<input type="text" id="nama_pelanggan" name="nama_pelanggan">
	<br>
	<label for="penulis">No Hp</label>
	<input type="text" id="no_hp" name="no_hp">
    <br>
	<label for="penulis">Email</label>
	<input type="text" id="email" name="email">
    <br>
	<label for="penulis">Alamat</label>
	<input type="text" id="alamat" name="alamat">
	<br>
	<input type="submit" value="tambah">
	</form>
 </body>
</html>