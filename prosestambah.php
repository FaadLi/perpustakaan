<?php 
include 'db/koneksi.php';

 $nama_buku = $_POST['nama_buku'];
 $penerbit = $_POST['penerbit'];
 $kategori = $_POST['nama_kategori'];
 $rak_buku = $_POST['rak_buku'];
 $stok_buku = $_POST['stok_buku'];

$tambah = mysqli_query($dbConn, "INSERT INTO `buku`(`id_buku`, `nama_buku`, `penerbit`, `id_kategori`, `id_rak`, `stok_buku`) VALUES ('','$nama_buku','$penerbit','$kategori','$rak_buku','$stok_buku')") or die(mysqli_error());
if ($tambah) {
	header("location:buku.php");
} else {
	echo "gagal menambah";
}
?>