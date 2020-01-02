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
       <form action="input_transaksi.php" method="post">
     <div class="col m6">
     <label for="">Tgl Pinjam</label>
       <div class="input-field">
          <input type="text" name="" disabled value="<?php
            $tgl_pinjam = date('d F Y');
           echo $tgl_pinjam; ?>">
          <input type="hidden" name="tgl_pinjam" value="<?php echo $tgl_pinjam; ?>">
          <input type="hidden" name="id" value="<?php echo $id_pinjam; ?>">
       </div>
     </div>
     <div class="col m6">
     <label for="">Tgl Kembali</label>
       <div class="input-field">
          <input type="text" name="" disabled value="<?php
            $tgl_kembali = date('d F Y', strtotime('+7 day'));
           echo $tgl_kembali; ?>">
          <input type="hidden" name="tgl_kembali" value="<?php echo $tgl_kembali; ?>">
       </div>
     </div>
     <div class="row">
        <table class="striped">
         <thead>
           <tr>
             <th>Id Buku</th>
             <th>Judul Buku</th>
             <th>Penerbit</th>
             <th>Kategori</th>
           </tr>
         </thead>
          <tbody>
           <?php 
            require 'db/koneksi.php';
            $jum = $_POST['jumlah_pinjam'];
              echo "<input type='hidden' name='jumlah' value='";
              echo $jum;
              echo "' />";
              for ($i=1; $i <=$jum; $i++) { 
            ?>
            <script type="text/javascript" src="js/jquery.js"></script>     
            <tr>
             <td>
              <div class="input-field">
                 <select name="id_buku" id="buku<?=$i?>" class="browser-default">
                    <option value="" selected disabled>ID Buku</option>
                    <?php 
                      $query = mysqli_query($dbConn, "SELECT id_buku FROM buku ORDER BY id_buku");

                    while ($id_buku = mysqli_fetch_assoc($query)) {
                      echo "<option value='".$id_buku['id_buku']."'>" .$id_buku['id_buku']."</option>";
                    }
                     ?>
                 </select>
              </div>
             </td>
             <script async="async" type="text/javascript">
              $("#buku<?=$i?>").change(function(){
                var cari = $("#buku<?=$i?>").val();
                cariKode<?=$i?>(cari);
                // alert(<?=$i?>);
                // alert(cari);
                console.log(cari);
              })  

              function cariKode<?=$i?>(e){
                var cari = e;
                console.log("masuk "+cari);
                $.ajax({
                  type    : "POST",
                  data    : "id_buku="+cari,
                  url     : "trans.php",                  
                  dataType: "json",
                  success : function(data){
                    // console.log(kode)
                    console.log("masuk data");
                    $("#NBuku<?=$i?>").val(data.judul);
                    $("#PBuku<?=$i?>").val(data.penerbit);
                    $("#KBuku<?=$i?>").val(data.kategori);
                  }
                });
              }
              </script>
             <td>
               <div class="input-field">
                 <input type="text" name="judul[]" id="NBuku<?=$i;?>" >
               </div>
             </td>
             <td>
               <div class="input-field">
                 <input type="text" name="penerbit[]" id="PBuku<?=$i;?>" value="">
               </div>
             </td>
             <td>
               <div class="input-field">
                 <input type="text" name="kategori[]" id="KBuku<?=$i;?>" value="">
               </div>
             </td>
           </tr>
         
           <?php } ?>
          </tbody>
       </table>
     </div>
     <div class="row" style="margin-top: 10px">
          <a href="pinjam.php" class="btn waves-effect waves-light red"><i class="fa fa-arrow-left"></i> Back</a>
         <button type="submit" class="btn">Tambah</button>
       </div>
     </form>
  </div>
 </div>

<?php include 'templates/footer.php' ?>
<?php }
  else{
    hearder("location:login.php");
  }
 ?>