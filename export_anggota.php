<?php session_start(); //Perintah session_start() harus ada pada setiap halaman yang berhubungan dengan session
		include 'db/koneksi.php';
		$session = $_SESSION['admin'];
		header("Content-type: application/vnd-ms-excel");
// Mendefinisikan nama file ekspor "hasil-export.xls"
		header("Content-Disposition: attachment; filename=".$session.".xls");
?>
                    <table id="myTable" class="table table-bordered                                                                                                                                                                                                                                              table-hover" border='2'>
                        <thead>
                           <tr>
                                <th>Id Anggota</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Jenis Kelamin</th>
                                <th>Telepon</th>
                        </tr>
                        </thead>
                        <?php
                        $query=mysqli_query($dbConn, "SELECT * FROM anggota");
                        $id_anggota=1;
                        while ($lihat=mysqli_fetch_array($query)) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $lihat['id_anggota']; ?></td>
                                <td><?php echo $lihat['nisn']; ?></td>
                                <td><?php echo $lihat['nama']; ?></td>
                                <td><?php echo $lihat['kelas']; ?></td>
                                <td><?php echo $lihat['jurusan']; ?></td>
                                <td><?php echo $lihat['jen_kel']; ?></td>
                                <td><?php echo $lihat['no_hp']; ?></td>
                            </tr>
                        <?php
                         $id_anggota++; } 
                        ?>
                        </tbody>    
                    </table>