<?php
include 'db/koneksi.php';
$id_buku = $_GET['id_buku'];

$hapus = mysqli_query($dbConn, "DELETE FROM 'buku' WHERE 'buku'.'id_buku'=$id_buku" );

if ($hapus) {
	header("location:buku.php");
	alert("Berhasil Menghapus Buku");
}else{
	echo "gagal menghapus";
}
?>
