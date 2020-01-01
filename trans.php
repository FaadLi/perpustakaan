<?php 
	include("db/koneksi.php");

	$id = $_POST['id_buku'];

	if ($id=="") {
		$data = array(
			"judul" => "belum diisi",
			"penerbit" => "belum diisi",
			"kategori" => "belum diisi"
		);
	}else {
		$sql = mysqli_query($dbConn, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori=kategori.id_kategori WHERE id_buku='$id'");
		// $buku = mysqli_fetch_assoc($dbConn, $sql);

		$buku = $sql->fetch_assoc();

		$data = array(
			"judul" => $buku['nama_buku'],
			"penerbit" => $buku['penerbit'],
			"kategori" => $buku['nama_kategori']
		);
	}

	echo json_encode($data);
?>