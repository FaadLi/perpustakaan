<?php 
  include 'db/koneksi.php';
  session_start();
  if (isset($_SESSION['admin'])) {
?>
<?php include 'templates/header.php' ?>

<div class="row">
  <div class="col s2">
    <ul id="nav-mobile" class="sidebar side-nav fixed grey lighten-3">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>  
      <li><a href="buku.php"><i class="fa fa-book"></i> Data Buku</a></li>
      <li><a href="anggota.php"><i class="fa fa-users"></i> Data Anggota</a></li>
          <li><a href="pinjam.php"><i class="fa fa-book"></i> Data Peminjam</a></li>
          <li><a href="kembali.php"><i class="fa fa-book"></i> Data Pengembalian</a></li>
    </ul> 
  </div>
</div>
 <div class="row">
  <div class="col m8 offset-m3">
  <h5>Buku yang sudah dikembalikan</h5>
  <?php  
    require_once "db/koneksi.php";

    $query = mysqli_query($dbConn, "SELECT * FROM `kembali`as k INNER JOIN pinjam as p ON p.id_pinjam = k.id_pinjam ");
    
    ?>
  <hr>  
    <table id="myTable" class="mdl-data-table" width="100%" cellpadding="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Tgl Pinjam</th>
          <th>Jumlah Pinjam</th>
          <th>Tgl Kembali</th>
          <th>Nama Peminjam</th>
          <th>Buku</th>
          <th>Opsi</th>
        </tr>
      </thead>
    
      <tbody>
        <?php  while ($data = mysqli_fetch_array($query)) {
         ?>
          <tr>
            <td><?php   echo $data['id_pinjam'] ?></td>
            <td><?php   echo $data['tgl_pinjam']; ?></td>
            <td><?php   echo $data['jumlah']; ?></td>
            <td><?php   echo $data['tgl_kembali']; ?></td>
            <td><?php   echo $data['nama_pinjam']; ?></td>
            <td><?php   echo $data['nama_buku']; ?></td>
            <td>
            <a href="hapus_kembali.php?id_kembali=<?php echo $data['id_kembali']; ?>" class="btn btn-floating"><i class="fa fa-trash"></i></a>
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
    header("location:login.php");
  }
 ?>