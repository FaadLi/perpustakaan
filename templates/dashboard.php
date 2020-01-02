<div class="col m9 offset-m3 main">
		<h5>Dashboard</h5>
		
		<?php include 'db/koneksi.php';
								$query = mysqli_query($dbConn, "SELECT count(id_buku) as b FROM buku"); 
								$data = mysqli_fetch_assoc($query);
								?>
			<a href="buku.php">
			<div class="col m4">
				<div class="card hoverable blue-grey darken-2 ">
					<div class="card-content white-text">
						<div class="row">
							<div class="col m3">
								<span class="fa fa-book fa-4x"></span>
							</div>
							<div class="col m8">
									
								<a href="buku.php"><h4><?php echo $data['b']; ?> Buku</h4></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			</a>


			<?php 
						$query = mysqli_query($dbConn, "SELECT count(id_anggota) as b FROM anggota"); 
								$data = mysqli_fetch_assoc($query);
								?>
			<a href="anggota.php">					
			<div class="col m4">
				<div class="card hoverable blue-grey darken-2 ">
					<div class="card-content white-text">
						<div class="row">
							<div class="col m3">
								<span class="fa fa-users fa-4x"></span>
							</div>
						<div class="col m9">
						
							<a href="anggota.php"><h4><?php echo $data['b']; ?> Anggota</h4></a>
						</div>
						</div>
					</div>
				</div>
			</div>
			</a> 
		</div> 
	</div>