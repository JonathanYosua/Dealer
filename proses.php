<?php 
include 'koneksi.php';
$db_josua= new database;

$aksi = $_GET['aksi'];

// Proses motor
if($aksi == "tambahmotor") {
    $db_josua->tambahmotor( $_POST['merk_motor'], $_POST['harga'], $_POST['tahun_dibuat']);
    header("location:data_motor.php");
}
// proses pelanggan
if($aksi == "tambahpelanggan") {
    $db_josua->tambahpelanggan($_POST['nama_pelanggan'], $_POST['no_hp'], $_POST['email'], $_POST['alamat']);
    header("location:data_pelanggan.php");
}

// proses transaksi
if($aksi == "tambahtransaksi") {
    $db_josua->tambahtransaksi($_POST['id_motor'], $_POST['id_pelanggan'], $_POST['kuantitas'], $_POST['harga'], $_POST['total_pembayaran']);
    header("location:data_transaksi.php");
}
?>