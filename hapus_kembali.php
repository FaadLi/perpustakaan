<?php
include 'db/koneksi.php';
$id_kembali= $_GET['id_kembali'];
$hapus = mysqli_query($dbConn, "DELETE FROM kembali WHERE id_kembali=$id_kembali");
if ($hapus) {
	header("location:kembali.php");
}else{
	echo "gagal menghapus";
}
?>