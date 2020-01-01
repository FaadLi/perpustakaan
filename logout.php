<?php 
	session_start();
	//digunkan untuk menghapus session
	session_destroy();
	header("location:login.php");
?>