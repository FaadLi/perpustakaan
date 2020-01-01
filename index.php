<?php 
	include 'db/koneksi.php';
	session_start();
	if (isset($_SESSION['admin'])) {
?>
<?php require_once "templates/header.php" ?>

<div class="row">
	<div class="col s2">
		<ul id="nav-mobile" class="sidebar side-nav fixed grey lighten-3">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>	
			<li><a href="buku.php"><i class="fa fa-book"></i> Data Buku</a></li>
			<li><a href="anggota.php"><i class="fa fa-users"></i> Data Anggota</a></li>
      		<li><a href="pinjam.php"><i class="fa fa-book"></i> Data Peminjaman</a></li>
      		<li><a href="kembali.php"><i class="fa fa-book"></i> Data Pengembalian</a></li>
		</ul>	
	</div>
	<?php include "templates/dashboard.php" ?>
</div>
<?php include "templates/footer.php" ?>
<?php }
	else{
		header("location:login.php");
	}
 ?>