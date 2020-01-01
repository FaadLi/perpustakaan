<?php 
require 'db/koneksi.php';
$id_pinjam = $_GET['id_pinjam'];
$q2 = mysql_query("SELECT dtl_pinjam.*, pinjam.*, anggota.nama FROM `pinjam` inner join dtl_pinjam on dtl_pinjam.id_pinjam = pinjam.id_pinjam inner join buku on dtl_pinjam.id_buku = buku.id_buku inner join anggota on pinjam.id_anggota = anggota.id_anggota WHERE dtl_pinjam.id_pinjam ='$id_pinjam'") or die(mysql_error());
// $rr = mysql_fetch_array($q2);
	// echo "<pre>";
	// print_r($rr);
	// echo "</pre>";
// // var_dump($rr);
// die();
while ($dat = mysql_fetch_array($q2)) {
	$idbk = $dat['id_buku'];
	 echo $nama_buku =  $dat['nama_buku'];
	 echo $tgl_pinjam =  $dat['tgl_pinjam'];
	 echo $tgl_kembali =  $dat['tgl_kembali'];
	 echo $nama =  $dat['nama'];
	$query = mysql_query("INSERT INTO `kembali`(`id_kembali`, `id_pinjam`, `nama_buku`, `nama_pinjam`, `tgl_pinjam`, `tgl_kembali`, `denda`) VALUES ('','$id_pinjam','$nama_buku','$nama','$tgl_pinjam','$tgl_kembali','0' )") or die(mysql_error());
	
	$sql = mysql_query(" UPDATE `pinjam` SET `status`='sudah' WHERE id_pinjam = '$id_pinjam' ") or die();
	$sql2 = mysql_query(" UPDATE `buku` SET `stok_buku`=stok_buku+1 WHERE id_buku = '$idbk' ") or die();
}
	header('location:kembali.php');
?>