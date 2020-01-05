<?php
include 'db/koneksi.php';
$id_anggota= $_GET['id_anggota'];
$hapus = mysqli_query($dbConn, "DELETE FROM anggota WHERE id_anggota=$id_anggota");
$ai = mysqli_query($dbConn,"ALTER TABLE anggota AUTO_INCREMENT = 1");  //agar id yang auto increment kembali ke awal
if ($hapus AND $ai) {
	header("location:anggota.php");
}else{
	echo "gagal menghapus";
}
?>