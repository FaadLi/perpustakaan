<?php session_start(); //Perintah session_start() harus ada pada setiap halaman yang berhubungan dengan session
		include 'db/koneksi.php';
		$session = $_SESSION['admin'];
		header("Content-type: application/vnd-ms-excel");
// Mendefinisikan nama file ekspor "hasil-export.xls"
		header("Content-Disposition: attachment; filename=".$session.".xls");
?>
                    <table id="myTable" class="table table-bordered table-hover" border='2'>
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Judul</th>
                                <th>Penerbit</th>
                                <th>Kategori</th>
                                <th>Rak Buku</th>
                                <th>Stok Buku</th>
                            </tr>
                        </thead>
                        <?php
                        $query=mysqli_query($dbConn, "SELECT rak_buku.tempat, kategori.nama_kategori, buku.id_buku, buku.nama_buku, buku.penerbit, buku.stok_buku FROM buku JOIN kategori ON kategori.id_kategori=buku.id_kategori JOIN rak_buku ON rak_buku.id_rak=buku.id_rak");
                        $id_buku=1;
                        while ($lihat=mysqli_fetch_array($query)) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $lihat['id_buku']; ?></td>
                                <td><?php echo $lihat['nama_buku']; ?></td>
                                <td><?php echo $lihat['penerbit']; ?></td>
                                <td><?php echo $lihat['nama_kategori']; ?></td>
                                <td><?php echo $lihat['tempat']; ?></td>
                                <td><?php echo $lihat['stok_buku']; ?></td>
                            </tr>
                        <?php
                         $id_buku++; } 
                        ?>
                        </tbody>    
                    </table>