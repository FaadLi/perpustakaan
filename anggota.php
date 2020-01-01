<?php 
	include 'db/koneksi.php';
	session_start();
	if (isset($_SESSION['admin'])) {
?>
<?php require_once "templates/header.php" ?>

<div class="row">
	<div class="col m2">
		<ul id="nav-mobile" class="sidebar side-nav fixed grey lighten-3">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>	
			<li><a href="buku.php"><i class="fa fa-book"></i> Data Buku</a></li>
			<li><a href="anggota.php"><i class="fa fa-users"></i> Data Anggota</a></li>
			<li><a href="pinjam.php"><i class="fa fa-book"></i> Data Peminjam</a></li>
			<li><a href="kembali.php"><i class="fa fa-book"></i> Data Pengembalian</a></li>
		</ul>	
	</div>
<div class="col m9 offset-m3">
	<h5>Data Anggota</h5>
	<hr>
	<div class="row">
		<div class="col m12">
			<div class="row">
				<a href="tambahanggota.php" class="btn waves-effect waves-light right"><i class='fa fa-plus'></i> Tambah</a>
				<a href="export_anggota.php" class="btn waves-effect waves-light right"><i class='fa fa-upload'></i> Export</a>
			</div>
			<table id="myTable">
				<thead>
					<tr>
						<th>Id Anggota</th>
						<th>NISN</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Jurusan</th>
						<th>Jenis Kelamin</th>
						<th>Telepon</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<?php
					$query=mysqli_query($dbConn, "SELECT * FROM anggota");
				?>
				<tbody>
					<?php 	while($lihat=mysqli_fetch_array($query)) { ?>
					<tr>
						<td><?php echo $lihat['id_anggota']; ?></td>
						<td><?php echo $lihat['nisn']; ?></td>
						<td><?php echo $lihat['nama']; ?></td>
						<td><?php echo $lihat['kelas']; ?></td>
						<td><?php echo $lihat['jurusan']; ?></td>
						<td><?php echo $lihat['jen_kel']; ?></td>
						<td><?php echo $lihat['no_hp']; ?></td>
						<td>
							<a href="editanggota.php?id_anggota=<?php echo $lihat['id_anggota']; ?>" class="btn btn-floating waves-effect waves-light"><i class='fa fa-pencil'></i></a>
							<a href="hpsanggota.php?id_anggota=<?php echo $lihat['id_anggota']; ?>" class="btn btn-floating waves-effect waves-light"><i class='fa fa-trash'></i></a>
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
	<?php include "templates/footer.php" ?>
<!-- ikifooter -->
<?php }
	else{
		header("location:login.php");
	}
 ?>