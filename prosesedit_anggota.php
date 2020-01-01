<?php 
include 'db/koneksi.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$jen_kel = $_POST['jen_kel'];
$no_hp = $_POST['no_hp'];
$update = ("update anggota set nisn='$nisn', nama='$nama', kelas='$kelas', jurusan='$jurusan',
	jen_kel='$jen_kel', no_hp='$no_hp' where nisn='$nisn'");
$query = mysqli_query($dbConn, $update) or die(mysqli_error());
if ($query) {
	header("location:anggota.php");
} else {
	echo "gagal mengupdate";
}
?>