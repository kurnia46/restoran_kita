<?php
include "koneksi.php";



	$lokasi_file=$_FILES['gambar']['tmp_name'];
	$nama_file=$_FILES['gambar']['name'];
	

  // end of code B
   
  if (empty($lokasi_file)) {
   echo"data masih kosong";
	}else{
		move_uploaded_file($lokasi_file,"../img/$nama_file");


$mysql = "INSERT INTO makanan
(id_makanan, nama_menu, gambar, deskripsi, harga) VALUES('$_POST[id_makanan]','$_POST[nama_menu]', '$nama_file','$_POST[deskripsi]','$_POST[harga]')";

if(!mysql_query($mysql))
die(mysql_error());


echo"<script>alert('Selamat, menu baru telah anda tambahkan');window.location.href='../?module=lihat_admin';</script>";
	}
mysql_close();
?>
