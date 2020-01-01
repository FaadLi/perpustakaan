<?php 
include 'db/koneksi.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$jen_kel = $_POST['jen_kel'];
$no_hp = $_POST['no_hp'];
$sql = "INSERT INTO anggota(nisn, nama, kelas, jurusan, jen_kel, no_hp) VALUES('$nisn', '$nama', '$kelas', '$jurusan', '$jen_kel', '$no_hp')";
$tambah = mysqli_query($dbConn, $sql);
if ($tambah) {
	header("location:anggota.php");
} else {
	echo "gagal menambah";
}
?>