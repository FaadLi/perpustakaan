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
  <h5>Input Data Pinjam Buku</h5>
  <hr> 
    <?php 
      $id_pinjam = $_GET['id_pinjam'];

     ?>
     <div class="col m6 offset-m2">
       <form action="transaksi.php?id_pinjam=<?php echo $id_pinjam; ?>" method="post">
       <div class="input-field">
         <select name="jumlah_pinjam" class="browser-default" id="">
            <option value="" selected disabled>- Pilih Jumlah -</option>
            <?php 
              for ($i=1; $i <=10 ; $i++) { 
             ?>
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
             <?php } ?>     
         </select>
       </div>
       <div class="row" style="margin-top: 10px">
         <button type="submit" class="btn">Tambah</button>
       </div>
     </form>
     </div>
  </div>
 </div>

<?php include 'templates/footer.php' ?>
<?php }
  else{
    hearder("location:login.php");
  }
 ?>