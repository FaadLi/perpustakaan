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
  <h5>Buku yang sedang di Pinjam</h5>

  

  <?php  
    require_once "db/koneksi.php";

    $query = mysqli_query($dbConn, "SELECT pinjam.id_pinjam, anggota.nama, anggota.kelas, anggota.jurusan, pinjam.tgl_pinjam, pinjam.tgl_kembali, pinjam.status, pinjam.jumlah FROM pinjam JOIN anggota ON anggota.id_anggota=pinjam.id_anggota WHERE pinjam.status = 'belum' ORDER By pinjam.id_pinjam DESC") or die(mysqli_error());
    
    ?>
  <hr>  
  <div class="row">
    <a href="tambah_pinjam.php" class="btn waves-effect waves-light right"> Input Pinjam</a>
  </div>
    <table id="myTable" class="mdl-data-table" width="100%" cellpadding="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Tgl Pinjam</th>
          <th>Jumlah Pinjam</th>
          <th>Tgl Kembali</th>
          <th>Nama Peminjam</th>
          <th>Opsi</th>
        </tr>
      </thead>
    
      <tbody>
        <?php  while($data = mysqli_fetch_array($query)) {
         ?>
          <tr>
            <td><?php   echo $data['id_pinjam'] ?></td>
            <td><?php   echo $data['tgl_pinjam']; ?></td>
            <td><?php   echo $data['jumlah']; ?></td>
            <td><?php   echo $data['tgl_kembali']; ?></td>
            <td><?php   echo $data['nama']; ?></td>
            <td>
              <a href="#" id="myBtn" class="btn">Kembalikan</a>
            </td>
          </tr>
                    <!-- The Modal -->
          <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <span class="close">&times;</span>
              <h2> <?php   echo $data['nama'] ?></h2>
            </div>
            <div class="modal-body">
              
              <p> Tanggal Pinjam : <?php   echo $data['tgl_pinjam'] ?></p>
              <p> Tanggal Kembali : <?php   echo $data['tgl_kembali'] ?></p>

              <a href="kembali_buku.php?id_pinjam=<?php echo $data['id_pinjam']; ?>" class="btn">Kembalikan</a>
            </div>
            <div class="modal-footer">
              <h3>Modal Footer</h3>
            </div>
          </div>
          </div>

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