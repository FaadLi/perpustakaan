<?php 
require 'db/koneksi.php';

$query = mysqli_query("SELECT buku.nama_buku, buku.penerbit, buku.stok_buku, rak_buku.tempat FROM buku JOIN rak_buku on rak_buku.id_rak=buku.id_rak LIMIT 0,6");

 ?>

 <!DOCTYPE html>
<html>
	<head>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/dataTable.min.css">

		</head>

		<body>
			
			<div class="navbar-fixed">
				<!-- Dropdown Structure -->
				<ul id="dropdown1" class="dropdown-content" style="margin-top: 50px">
					<li><a href="logout.php">Logout</a></li>
				</ul>
				<nav>
					<div class="nav-wrapper">
						<a href="#!" class="brand-logo">Perpustakaan</a>
						<!-- activate side-bav in mobile view -->
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
					</div>
				</nav>
			</div>

			<div class="row">
				<div class="col m9 offset-m2">
						<h4>Daftar Buku</h4>
					<table id="myTable" class="mdl-data-table">
					<thead>
						<tr>
							<th>No. Urut</th>
							<th>Judul</th>
							<th>Penerbit</th>
							<th>Kategori</th>
							<th>Rak Buku</th>
							<th>Stok</th>
						</tr>
					</thead>
					<?php
						$query=mysqli_query("SELECT rak_buku.tempat, kategori.nama_kategori, buku.id_buku, buku.nama_buku, buku.penerbit, buku.stok_buku FROM buku JOIN kategori ON kategori.id_kategori=buku.id_kategori JOIN rak_buku ON rak_buku.id_rak=buku.id_rak");
						$id_buku=1;
						
					?>
					<tbody>
					<?php 	while($lihat=mysqli_fetch_array($query)) { ?>
						<tr>
							<td><?php echo $id_buku++; ?></td>
							<td><?php echo $lihat['nama_buku']; ?></td>
							<td><?php echo $lihat['penerbit']; ?></td>
							<td><?php echo $lihat['nama_kategori']; ?></td>
							<td><?php echo $lihat['tempat']; ?></td>
							<td><?php echo $lihat['stok_buku']; ?></td>
						</tr>
						<?php 
							}
						?>
					</tbody>
				</table>
				</div>
			</div>
		
		<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/materialize.min.js"></script>
			<script type="text/javascript" src="js/dataTable.min.js"></script>

			<script type="text/javascript">
			$(document).ready(function(){
				$('#myTable').DataTable();
				$('.button-collapse').sideNav();
				$('.dropdown-button').dropdown();
			});
		</script>
</body>
</html>

 