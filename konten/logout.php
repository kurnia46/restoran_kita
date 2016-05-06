<?php
session_start();
unset($_SESSION['username']);
session_destroy();
echo"<script>alert('Anda telah berhasil keluar');window.location.href='../index.php';</script>";
mysql_close();
?>