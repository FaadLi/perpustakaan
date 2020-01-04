<?php 
	include '../db/koneksi.php';
	session_start();
	if (isset($_SESSION['anggota'])) {
		include 'templates/header.php'
?>
<div class="container">

	<hr><h5>Daftar Buku</h5><hr>
		
	<div class="row">
		<div class="col m12">
			
			<table id="myTable" class="hover table table-striped table-bordered display compact" >
				<thead>
					<tr>
						<th>ID Buku</th>
						<th>Judul</th>
						<th>Penerbit</th>
						<th>Kategori</th>
						<th>Rak Buku</th>
						<th>Stok</th>
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
						
					</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>







<?php include 'templates/footer.php' ?>
<?php 
	}else{
		header("location:../login.php");
	}
 ?>