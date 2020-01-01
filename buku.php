<?php 
	include 'db/koneksi.php';
	session_start();
	if (isset($_SESSION['admin'])) {
?>
<?php include 'templates/header.php' ?>

<div class="row">
	<div class="col m2 teal">
		<ul id="nav-mobile" class="sidebar side-nav fixed grey lighten-3">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>	
			<li><a href="buku.php"><i class="fa fa-book"></i> Data Buku</a></li>
			<li><a href="anggota.php"><i class="fa fa-users"></i> Data Anggota</a></li>
			<li><a href="pinjam.php"><i class="fa fa-book"></i> Data Peminjam</a></li>
			<li><a href="kembali.php"><i class="fa fa-book"></i> Data Pengembalian</a></li>
		</ul>	
	</div>
<div class="col m9 offset-m3 main">
	<h5>Data Buku</h5>
	<hr>
		
	<div class="row">
		<div class="col m12">
			<div class="row">
				<a href="tambah.php" class="btn waves-effect waves-light right"><i class='fa fa-plus'></i> Tambah</a>
				<a href="export_buku.php" class="btn waves-effect waves-light right"><i class='fa fa-upload'></i> Export</a>
			</div>
			<table id="myTable" class="mdl-data-table">
				<thead>
					<tr>
						<th>ID Buku</th>
						<th>Judul</th>
						<th>Penerbit</th>
						<th>Kategori</th>
						<th>Rak Buku</th>
						<th>Stok</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<?php
					$query=mysqli_query($dbConn, "SELECT rak_buku.tempat, kategori.nama_kategori, buku.id_buku, buku.nama_buku, buku.penerbit, buku.stok_buku FROM buku JOIN kategori ON kategori.id_kategori=buku.id_kategori JOIN rak_buku ON rak_buku.id_rak=buku.id_rak");
					
				?>
				<tbody>
				<?php 	while($lihat=mysqli_fetch_array($query)) { ?>
					<tr>
						<td><?php echo $lihat['id_buku']; ?></td>
						<td><?php echo $lihat['nama_buku']; ?></td>
						<td><?php echo $lihat['penerbit']; ?></td>
						<td><?php echo $lihat['nama_kategori']; ?></td>
						<td><?php echo $lihat['tempat']; ?></td>
						<td><?php echo $lihat['stok_buku']; ?></td>
						<td>
							<a href="edit.php?id_buku=<?php echo $lihat['id_buku']; ?>" class="btn btn-floating waves-effect waves-light"><i class='fa fa-pencil'></i></a>
							<a href="hpsbuku.php?id_buku=<?php echo $lihat['id_buku']; ?>" class="btn btn-floating waves-effect waves-light"><i class='fa fa-trash'></i></a>
						</td>
					</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
	<?php include 'templates/footer.php' ?>
<!-- ikifooter -->
<?php }
	else{
		header("location:login.php");
	}
 ?>