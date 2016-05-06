<?php
include "koneksi.php";
$checkBox = implode(', ', $_POST['menu']);

$mysql = "INSERT INTO pesanan
(id_pesanan, nama_pelanggan, alamat, no_telp, email, menu_pesanan, waktu, pilihan_pesan) VALUES('$_POST[id_pesanan]','$_POST[nama_pelanggan]','$_POST[alamat]','$_POST[no_telp]','$_POST[email]','$checkBox',now(),'$_POST[pilihan_pesan]')";

if(!mysql_query($mysql))
die(mysql_error());


echo"<script>alert('Selamat, pesanan anda telah tersimpan, tunggu sms konfirmasi dari kami');window.location.href='../?module=home';</script>";
	
mysql_close();
?>
