<?php 
session_start();
error_reporting(0);
include "koneksi.php";
	if ($_SESSION[level]=='admin'){
		include "content.php";
	}elseif ($_SESSION[level]=='pegawai'){
		include "content_pegawai.php";
	}elseif
	($_SESSION[level]==''){
		include "login.php";
	}

?>