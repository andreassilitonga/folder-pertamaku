<?php
date_default_timezone_set('Asia/Makassar');
$server 	= "localhost";
$username 	= "root";
$password 	= "";
$database 	= "website";

$koneksi = mysqli_connect($server, $username, $password) or die ("Gagal");
mysqli_select_db($koneksi, $database) or die ("Database tidak ditemukan");
?>