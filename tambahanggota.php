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
			<h5 class="pink-text">Tambah Data Anggota</h5>
			<div class="row">
				<form action="prosestambahang.php" method="post">
				  	<div class="input-field">
				  		<input type="text" name="nisn" class="validate" required>
				  		<label for="">NISN Anggota</label>
				  	</div>
				  	<div class="input-field">
				  		<input type="text" name="nama" class="validate" required>
				  		<label for="">Nama Anggota</label>
				  	</div>
				  	
				  	<div class="input-field">
				  		<select name="kelas" class="browser-default">
				  			<option value="" disabled selected>- Pilih Kelas -</option>
				  			<option value="XII">XII</option>
				  			<option value="XI">XI</option>
				  			<option value="X">X</option>
				  		</select>
				  	</div>

				  	<div class="input-field">
				  		<select name="jurusan" class="browser-default">
				  			<option value="" disabled selected>- Pilih Jurusan -</option>
				  			<option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan</option>
				  			<option value="Multimedia">Multimedia</option>
				  			<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
				  			<option value="Animasi">Animasi</option>
				  			<option value="Akomodasi Perhotelan">Akomodasi Perhotelan</option>
				  			<option value="Jasa Boga">Jasa Boga</option>
				  		</select>
				  	</div>

				  	<div class="input-field">
                        <select name="jen_kel" class="browser-default">
                        	<option value="" selected disabled>- Jenis Kelamin -</option>
                        	<option value="laki-laki">Laki - Laki</option>
                        	<option value="perempuan">Perempuan</option>
                        </select>                        
                    </div>
                    <div class="input-field">
                    	<input type="text" name="no_hp" class="validate" required>
                    	<label for="">Telepon</label>
                    </div> 
				  	<div class="row">
				  		<a href="anggota.php" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Back</a>
				  		<button class="btn waves-effect waves-light right" type="submit"><i class="fa fa-plus"></i> Tambah</button>
				  	</div>
				</form>
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