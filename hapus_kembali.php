<?php
include 'db/koneksi.php';
$id_kembali= $_GET['id_kembali'];
$hapus = mysqli_query($dbConn, "DELETE FROM kembali WHERE id_kembali=$id_kembali");
$ai = mysqli_query($dbConn,"ALTER TABLE kembali AUTO_INCREMENT = 1");  //agar id yang auto increment kembali ke awal
if ($hapus AND $ai) {
	header("location:kembali.php");
}else{
	echo "gagal menghapus";
}
?>