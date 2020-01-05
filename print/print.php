<!DOCTYPE html>
<html>
<head>
	<title>PRINT Bukti Peminjaman</title>
</head>
<body>
 
    <div>
        <center>
    
            <h2>Print Bukti Peminjaman Buku Perpustakaan</h2>
            <h4>SMA NEGERI 1 GONDANG MOJOKERTO</h4>
    
        </center>
    </div>

    <div>
        <?php 
        require_once "../db/koneksi.php";
        ?>
    
        <table border="1" style="width: 100%">
            <tr>
                <th>Kode</th>
                <th>Nama Buku</th>
                <th>Kategori</th>
                <th>Tempat Rak Buku</th>
                <th>Tanggal Pinjam</th>
            </tr>
            <?php 
            $idnya = $_GET['id_anggota'];
            
            $sql = mysqli_query($dbConn,"SELECT * FROM pinjam 
            JOIN anggota ON anggota.id_anggota=pinjam.id_anggota 
            JOIN buku ON buku.id_buku=pinjam.id_buku
            JOIN kategori ON kategori.id_kategori=buku.id_kategori
            JOIN rak_buku ON rak_buku.id_rak=buku.id_rak
            WHERE pinjam.id_anggota = $idnya AND pinjam.status = 'belum' ");

            $sql2 = mysqli_query($dbConn,"SELECT * FROM pinjam 
            JOIN anggota ON anggota.id_anggota=pinjam.id_anggota 
            JOIN buku ON buku.id_buku=pinjam.id_buku
            JOIN kategori ON kategori.id_kategori=buku.id_kategori
            JOIN rak_buku ON rak_buku.id_rak=buku.id_rak
            WHERE pinjam.id_anggota = $idnya AND pinjam.status = 'belum' ");
                $data2 =  mysqli_fetch_array($sql)
            ?>
                
            <h4>Peminjam = <?php echo $data2['nama']; ?> / <?php  echo  $data2['nisn']; ?></h4>
            <!-- <h4>Nama = <?php  ?></h4> -->
            <h5>Tanggal Pinjam  = <?php echo date("d F Y", strtotime($data2['tgl_pinjam'])); ?></h5>
            <h5>Tanggal Kembali = <?php echo date("d F Y", strtotime($data2['tgl_kembali'])); ?></h5>
            
            <?php
            while($data = mysqli_fetch_array($sql2)){
            ?>
            <tr>
                <td><?php echo $data['id_pinjam']; ?></td>
                <td><?php echo $data['nama_buku']; ?></td>
                <td><?php echo $data['nama_kategori']; ?></td>
                <td><?php echo $data['tempat']; ?></td>
                <td><?php echo date("d F Y", strtotime($data['tgl_pinjam'])); ?></td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>
 
	<script>
		window.print();
	</script>
 
</body>
</html>