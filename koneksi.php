<?php 
	class database{
		var $host = 'localhost';
		var $name = 'root';
		var $pw = '';
		var $db = 'db_josua';

		function _construct(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			mysqli_select_db($koneksi, $this->db);
		}

		// Koneksi item
		function tampilmotor(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			$data = mysqli_query($koneksi, "SELECT * FROM motor");
			while ($d = mysqli_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		// Koneksi Customer
		function tampilpelanggan(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			$data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
			while ($d = mysqli_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		// koneksi trnsksi
		function tampilantransaksi(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			$data = mysqli_query($koneksi, "SELECT transaksi.id_transaksi, transaksi.kuantitas, transaksi.harga, transaksi.total_pembayaran, pelanggan.id_pelanggan, pelanggan.nama_pelanggan, motor.id_motor, motor.merk_motor FROM pelanggan INNER JOIN transaksi on pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN motor on motor.id_motor = transaksi.id_motor ORDER by id_transaksi");
			$hasil = [];
			while ($d = mysqli_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		//tambah motor
		function tambahmotor($merk_motor,$harga,$tahun_dibuat){
			$koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
			mysqli_query($koneksi, "INSERT INTO motor VALUES('','$merk_motor', '$harga', '$tahun_dibuat')");
		}

		//tambah pelanggan
		function tambahpelanggan($nama_pelanggan,$no_hp,$email,$alamat){
			$koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
			mysqli_query($koneksi, "INSERT INTO pelanggan VALUES(null,'$nama_pelanggan', '$no_hp', '$email', '$alamat')");
		}

		//tambah transaksi
		function tambahtransaksi($id_motor,$id_pelanggan,$kuantitas,$harga,$total_pembayaran){
			$koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
			mysqli_query($koneksi, "INSERT INTO transaksi VALUES(null,'$id_motor', '$id_pelanggan', '$kuantitas', '$harga', '$total_pembayaran')");
		}
    }
?>