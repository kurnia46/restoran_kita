<?php
include "koneksi.php";
$id=$_GET['id'];
$hapus="delete from makanan where id_makanan='$id'";

if(!$hasil=mysql_query($hapus))
die(mysql_error());

echo"<script>alert('data berhasil dihapus');window.location.href='?module=lihat_admin'</script>";
mysql_close();
?>