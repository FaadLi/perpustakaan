<?php 
	require_once 'db/koneksi.php';
	session_start();
	if (isset($_SESSION['admin'])) {
?>

<?php include "templates/header.php" ?>

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
</div>
 <div class="row">
 <div class="col m6 offset-m4">
	<div class="card">
		<div class="card-content">
			<h5 class="pink-text">Edit Data Buku</h5>
			<div class="row">
				<?php
                    require_once 'db/koneksi.php';
                    $id_buku = $_GET['id_buku'];
                    $query = mysqli_query($dbConn, "SELECT * FROM buku where id_buku='$id_buku'");
                    while ($q=mysqli_fetch_array($query)) {
                ?>
				<form action="prosesedit.php" method="post">
					<input type="hidden" name="id_buku" value="<?php echo $q['id_buku']; ?>">
				  	<div class="input-field">
				  		<input type="text" value="<?php echo $q['nama_buku'] ?>" name="nama_buku" class="validate" required>
				  		<label for="">Judul</label>
				  	</div>
				  	<div class="input-field">
				  		<input type="text" value="<?php echo $q['penerbit'] ?>" name="penerbit" class="validate" required>
				  		<label for="">Penerbit</label>
				  	</div>
				  		<label for="">Kategori</label>
				  	<div class="input-field">
				  		<select class="browser-default" name="kategori">
				  		
				  			<?php 
				  				$sql = "SELECT * FROM kategori";
				  				$query = mysqli_query($dbConn, $sql);
				  				while ($data = mysqli_fetch_array($query)) {
				  			 ?>	
								<option value="<?php echo $data['id_kategori']; ?>" <?php if ($data['id_kategori'] == $q['id_kategori']): echo "selected"; ?>
									
								<?php endif ?>><?php echo $data['nama_kategori'];  ?></option>
				  		<?php } ?>
				  		</select>

				  	</div>
				  		<label for="">Rak Buku</label>
				  	<div class="input-field">
				  		<select class="browser-default" name="rak_buku">
				  		<?php 
				  				$sql = "SELECT * FROM rak_buku";
				  				$query = mysqli_query($dbConn, $sql);
				  				while ($data = mysqli_fetch_array($query)) {
				  			 ?>	
								<option value="<?php echo $data['id_rak']; ?>" <?php if ($data['id_rak'] == $q['id_rak']): echo "selected"; ?>
									
								<?php endif ?>"><?php echo $data['tempat'];  ?></option>
				  			 <?php } ?>
				  		</select>	 
				  	</div>
				  	<div class="input-field">
				  		<input type="text" value="<?php echo $q['stok_buku'] ?>" name="stok_buku" class="validate" required>
				  		<label for="">Stok Buku</label>
				  	</div>
				  	<div class="row">
				  		<a href="buku.php" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Back</a>
				  		<button class="btn waves-effect waves-light right" name="simpan" type="submit"><i class="fa fa-save"></i> Simpan</button>
				  	</div>
				</form>
				<?php } ?>
			</div>
		</div>
	</div>
 </div>
 </div>

 <?php include "templates/footer.php" ?>
<?php }
	else{
		header("location:login.php");
	}
 ?>