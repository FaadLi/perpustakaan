<?php 
	include("db/koneksi.php");

	// $tgl_pinjam = $_POST['tgl_pinjam'];
	// $tgl_kembali = $_POST['tgl_kembali'];
	$id_anggota = $_POST['id'];
	$jumlah = $_POST['jumlah'];
	$id_buku = $_POST['id_buku'];

	$sql = "INSERT INTO pinjam VALUES('', '$id_anggota','$id_buku', '$jumlah', CURDATE(), CURDATE()+INTERVAL 3 DAY, 'belum')";
	$query =  mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));

	$sql = "SELECT SUM(id_pinjam) as id_pinjam FROM pinjam";
	$query =  mysqli_query($dbConn, $sql) or die(mysqli_error());	
	// $data = mysqli_fetch_assoc($query);
	$data = $query->fetch_assoc();

	// for ($i=0; $i < $jumlah; $i++) {
	// 	$id_buku = $_POST['id_buku'][$i];
	// 	$judul = $_POST['judul'][$i];
	// 	$sql = "INSERT INTO dtl_pinjam VALUES('', '$data[id_pinjam]', '$id_buku', '$judul', 0)";
	// 	$query =  mysqli_query($dbConn,$sql) or die(mysqli_error());

	// 	$sql1 = "SELECT * FROM buku WHERE id_buku='$id_buku'";
	// 	$query1 =  mysqli_query($dbConn, $sql1) or die(mysqli_error());	
	// 	// $data1 = mysqli_fetch_assoc($query1);
	// 	$data1 = $query1->fetch_assorc();
	// 	$stok = (int)$data1['stok_buku'];
	// 	$jumlah_buku = $stok-1;
	// 	// echo($jum);
	// 	$sql = "UPDATE buku SET stok_buku='$jumlah_buku' WHERE id_buku='$id_buku'";
	// 	$query =  mysqli_query($dbConn,$sql) or die(mysqli_error());
	// }

	header("location:pinjam.php");
 ?>