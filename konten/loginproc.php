<?php
session_start();
include "koneksi.php";

$login=mysql_query("select * from admin where (username='".$_POST['username']."') and (password = '".$_POST['password']."')") or die ("Query failed with error: " .mysql_error());
$rowcount=mysql_num_rows($login);


if($rowcount==1) {
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	
	echo"<script>alert('Anda telah berhasil masuk $_SESSION[username]');window.location.href='../';</script>";
}

else {
	echo"<script>alert('Anda telah gagal masuk');window.location.href='../admin/?module=index';</script>";
}
?>
