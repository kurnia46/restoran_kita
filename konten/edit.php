<?php
include'koneksi.php';


	$lokasi_file=$_FILES['gambar']['tmp_name'];
	$nama_file=$_FILES['gambar']['name'];
	

  // end of code B
   
  if (empty($lokasi_file)) {
   echo"data masih kosong";
	}else{
		move_uploaded_file($lokasi_file,"../img/$nama_file");
		
	

	
	if(isset($_POST['id'])){
		$edit = "UPDATE makanan SET nama_menu='$_POST[nama_menu]',gambar='$nama_file', deskripsi='$_POST[deskripsi]', harga='$_POST[harga]' WHERE id_makanan='$_POST[id]'";
		if(!mysql_query($edit))
		die (mysql_error());
		
		echo"<script>alert('Selamat, menu berhasil diubah');window.location.href='../?module=lihat_admin';</script>";
	}
	}
	
?>