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

    $query = mysqli_query($dbConn, "SELECT pinjam.id_pinjam, buku.nama_buku, anggota.nama, anggota.nisn, anggota.kelas, anggota.jurusan, pinjam.tgl_pinjam, pinjam.tgl_kembali, pinjam.status, pinjam.jumlah FROM pinjam JOIN anggota ON anggota.id_anggota=pinjam.id_anggota JOIN buku ON buku.id_buku=pinjam.id_buku WHERE pinjam.status = 'belum' ORDER By pinjam.id_pinjam DESC") or die(mysqli_error());
    
    ?>
  <hr>  
  <div class="row">
    <a href="tambah_pinjam.php" class="btn waves-effect waves-light right"> Input Pinjam</a>
  </div>
    <table id="myTable" class="mdl-data-table" width="100%" cellpadding="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Nisn</th>
          <th>Nama Peminjam</th>
          <th>Jumlah Pinjam</th>
          <th>Tgl Kembali</th>
          <th>Opsi</th>
        </tr>
      </thead>
    
      <tbody id="show_modal">
        <?php  while($data = mysqli_fetch_array($query)) {
         ?>
          <tr>
            <td><?php   echo $data['id_pinjam'] ?></td>
            <td><?php   echo $data['nisn']; ?></td>
            <td><?php   echo $data['nama']; ?></td>
            <td><?php   echo $data['tgl_pinjam']; ?></td>
            <td><?php   echo $data['tgl_kembali']; ?></td>
            
            <td>
              <a href="#" id="myBtn" class="btn myBtn" 
              data-id="<?php echo $data['id_pinjam'] ?>"
              data-nama="<?php echo $data['nama'] ?>"
              data-buku="<?php echo $data['nama_buku'] ?>"
              data-tgl_pinjam="<?php echo $data['tgl_pinjam'] ?>"
              data-tgl_kembali="<?php echo $data['tgl_kembali'] ?>"
              
              >Kembalikan</a>
            </td>
          </tr>
          

         <?php } ?>
      </tbody>
    </table>
  </div>
    <!-- Start Modal -->
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h3 id="nama"> Modal</h3>
    </div>
  <div class="modal-body">
      <h4 id="buku">Nama Buku</h4>
      <p id="tgl_pinjam">Tanggal Pinjam : </p>
      <p id="tgl_kembali">Tanggal Kemali : </p>
      <p id="tgl">tanggal sekarang</p>
      <p id="denda">Denda : </p>

      <a id="kembali" href="#" class="btn">Kembalikan</a>
      
  </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>
  </div>
  <!-- END MODAL -->
 </div>







<?php include 'templates/footer.php' ?>
<?php }
  else{
    header("location:login.php");
  }
 ?>