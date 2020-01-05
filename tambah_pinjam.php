<?php 
  include 'db/koneksi.php';
  include 'templates/header.php';
  session_start();
  if (isset($_SESSION['admin'])) {
?>

<div class="row">
  <div class="col s2">
    <ul id="nav-mobile" class="sidebar side-nav fixed grey lighten-3">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>  
      <li><a href="buku.php"><i class="fa fa-book"></i> Data Buku</a></li>
      <li><a href="anggota.php"><i class="fa fa-users"></i> Data Anggota</a></li>
          <li><a href="pinjam.php"><i class="fa fa-book"></i> Data Peminjaman</a></li>
          <li><a href="kembali.php"><i class="fa fa-book"></i> Data Pengembalian</a></li>
    </ul> 
  </div>
</div>
 <div class="row">
  <div class="col m8 offset-m3">
  <h5>Input Data Pinjam</h5>
  <hr> 
    <table id="tbl_peminjam" class="mdl-data-table" width="100%" cellpadding="0">
      <thead>
        <tr>
          <th>Nisn</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Jenis Kelamin</th>
          <th>Opsi</th>
        </tr>
      </thead>
    
      <tbody>
        <?php
        $query = mysqli_query($dbConn, "SELECT * FROM anggota");
        $no = 1;
          while ($data = mysqli_fetch_array($query)) {
         ?>
          <tr>
            <td><?php   echo $data['nisn']; ?></td>
            <td><?php   echo $data['nama']; ?></td>
            <td><?php   echo $data['kelas'] . ' ' . $data['jurusan']; ?></td>
            <td><?php   echo $data['jen_kel']; ?></td>
            <td>
              <a class="btn" href="transaksi.php?id_pinjam=<?php echo $data['id_anggota']; ?>">Pilih</a>
            </td>
          </tr>
         <?php } ?>
      </tbody>
    </table>
  </div>
 </div>

<?php include 'templates/footer.php' ?>
<?php }
  else{
    hearder("location:login.php");
  }
 ?>