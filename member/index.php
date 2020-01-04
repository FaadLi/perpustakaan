<?php 
	include '../db/koneksi.php';
	session_start();
	if (isset($_SESSION['anggota'])) {
?>

<?php include 'templates/header.php' ?> 

<center><h2>coba</h2></center>
<?php
echo $_SESSION['anggota'];
?>
<?php include 'templates/footer.php' ?>

<?php 
	}else{
		header("location:../login.php");
	}
 ?>