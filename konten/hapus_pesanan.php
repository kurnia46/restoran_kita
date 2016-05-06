<?php
include "koneksi.php";
$id=$_GET['id'];
$hapus="delete from pesanan where id_pesanan='$id'";

if(!$hasil=mysql_query($hapus))
die(mysql_error());

echo"<script>alert('data berhasil dihapus');window.location.href='?module=lihat_pesanan'</script>";
mysql_close();
?>