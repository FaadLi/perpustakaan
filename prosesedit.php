<?php
include 'db/koneksi.php';
$id_buku = $_POST['id_buku'];
$nama_buku = $_POST['nama_buku'];
$penerbit = $_POST['penerbit'];
$kategori = $_POST['kategori'];
$rak_buku = $_POST['rak_buku'];
$stok_buku = $_POST['stok_buku'];
$update = mysqli_query($dbConn, "UPDATE buku SET nama_buku='$nama_buku', id_kategori='$kategori', penerbit='$penerbit', id_rak='$rak_buku', stok_buku='$stok_buku' where id_buku='$id_buku'") or die(mysqli_error());
if ($update)  {
	header("location:buku.php");
}else{
	echo "gagal update data";
}
?>