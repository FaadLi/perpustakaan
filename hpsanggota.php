<?php
include 'db/koneksi.php';
$id_anggota= $_GET['id_anggota'];
$hapus = mysqli_query($dbConn, "DELETE FROM anggota WHERE id_anggota=$id_anggota");
if ($hapus) {
	header("location:anggota.php");
}else{
	echo "gagal menghapus";
}
?>