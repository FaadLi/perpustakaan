<?php 
	include 'db/koneksi.php';
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
			<h5 class="pink-text">Edit Data Anggota</h5>
			<div class="row">
			<?php
                    require_once 'db/koneksi.php';
                    $id_anggota = $_GET['id_anggota'];
                    $query = mysqli_query($dbConn, "SELECT * FROM anggota where id_anggota='$id_anggota'");
                    $q=mysqli_fetch_array($query);
                ?>
				<form action="prosesedit_anggota.php" method="post">
					<input type="hidden" name="id_anggota" value="<?php echo $q['id_anggota']; ?>">
				  	<div class="input-field">
				  		<input type="text" disabled value="<?php echo $q['nisn']; ?>" name="nisn" class="validate" required>
				  		<input type="hidden" name="nisn" value="<?php echo $q['nisn']; ?>">
				  		<label for="">NISN Anggota</label>
				  	</div>
				  	<div class="input-field">
				  		<input type="text" value="<?php echo $q['nama']; ?>" name="nama" class="validate" required>
				  		<label for="">Nama Anggota</label>
				  	</div>
				  	<div class="input-field">
				  		<select name="kelas" class="browser-default">
				  			<option value="" selected disabled>- Kelas -</option>
				  			<option value="XII" <?php if ($q['kelas'] == 'XII') {
				  				echo 'selected';
				  			} ?>> XII </option>
				  			<option value="XI" <?php if ($q['kelas'] == 'XI') {
				  				echo 'selected';
				  			} ?>> XI</option>
				  			<option value="X" <?php if ($q['kelas'] == 'X') {
				  				echo 'selected';
				  			} ?>> X </option>
				  		</select>
				  	</div>
				  	<div class="input-field">
				  		<select name="jurusan" class="browser-default">
				  			<option value="Teknik Komputer Dan Jaringan" <?php if ($q['jurusan'] == 'Teknik Komputer Dan Jaringan') {
								echo 'selected';
								} ?> >Teknik Komputer Dan Jaringan</option>
				  			<option value="Multimedia" <?php if ($q['jurusan'] == 'Multimedia') {
								echo 'selected';
								} ?> >Multimedia</option>
				  			<option value="Rekayasa Perangkat Lunak" <?php if ($q['jurusan'] == 'Rekayasa Perangkat Lunak') {
								echo 'selected';
								} ?> >Rekayasa Perangkat Lunak</option>
				  			<option value="Animasi" <?php if ($q['jurusan'] == 'Animasi') {
								echo 'selected';
								} ?> >Animasi</option>
				  			<option value="Akomodasi Perhotelan" <?php if ($q['jurusan'] == 'Akomodasi Perhotelan') {
								echo 'selected';
								} ?> >Akomodasi Perhotelan</option>
				  			<option value="Jasa Boga" <?php if ($q['jurusan'] == 'Jasa Boga') {
								echo 'selected';
								} ?> >Jasa Boga</option>
				  		</select>
				  		
				  	</div>
				  	<div class="input-field">

                        <select name="jen_kel" class="browser-default">
                        	<option value="" selected disabled>- Jenis Kelamin -</option>
	                        	<option value="laki-laki" <?php if ($q['jen_kel'] == 'laki-laki') {
								echo 'selected';
								} ?> >Laki - Laki</option>
								<option value="perempuan" <?php if ($q['jen_kel'] == 'perempuan') {
								echo "selected";
								} ?> >perempuan</option>
                        </select>                        
                    </div>
                    <div class="input-field">
                    	<input type="text" name="no_hp" class="validate" value="<?php echo $q['no_hp'] ?>" required>
                    	<label for="">Telepon</label>
                    </div> 
				  	<div class="row">
				  		<a href="anggota.php" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Back</a>
				  		<button class="btn waves-effect waves-light right" type="submit"><i class="fa fa-save"></i>sIMPAN</button>
				  	</div>
				</form>
			</div>
		</div>
	</div>
 </div>
 </div>
<?php include "templates/footer.php" ?>
<?php
		} 
		header("location:login.php");
 ?>