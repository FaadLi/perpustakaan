


		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/dataTable.min.js"></script>

		<!-- <script src="http://cdn.datatables.net/plug-ins/1.10.15/dataRender/datetime.js"></script> -->

		<script type="text/javascript">
		$(document).ready(function(){
			$('#myTable').DataTable({
				order:[[0,"desc"]] //sort desc dataTabel baris 0 (No) 
				
			});
			// http://localhost/perpustakaan/tambah_pinjam.php
			$('#tbl_peminjam').DataTable({
				order:[[3,"asc"]] //sort desc dataTabel baris 0 (No) 
				
			});


			$('.button-collapse').sideNav();
			$('.dropdown-button').dropdown();
		});
		
		$('#show_modal').on('click','.myBtn',function(){
			// console.log("masuk");
			
			var id 			= $(this).data('id');
			var nama 		= $(this).data('nama');
			var buku		= $(this).data('buku');
			var tgl_pinjam	= $(this).data('tgl_pinjam');
			var tgl_kembali	= $(this).data('tgl_kembali');
			
			var akhir 		= $(this).data('kembali');
			var miliday = 24 * 60 * 60 * 1000;  // varibel miliday sebagai pembagi untuk menghasilkan hari
			var d1 = new Date();				// mendapatkan tgl hari ini
			var d2 = new Date(akhir);			// memasukkan tgl_kembali dalam variabel d2 

			var tgl1 = Date.parse(d1);			// Date.parse akan menghasilkan nilai bernilai integer dalam bentuk milisecond
			var tgl2 = Date.parse(d2);

			var hasil2 = (tgl1 - tgl2) / miliday;// Menjumlahkan 
			// var coba = hasil + 1;
			var hasil = parseInt(hasil2);		// Convert ke Integer
			console.log(d2);
			console.log(d1);

			console.log(hasil);

			var ida 	= $(this).data('ida');
			console.log(ida);	

			var dendanya = 500;		//membuat denda yang dikeluarkan jika melewati hari yang sudah ditentukan
			var totalTgl = hasil;
			var denda = 0;
			if(totalTgl > 0){
				console.log("denda");
				denda = totalTgl * dendanya;
				denda = "denda <b>"+denda+"</b> karena telat bayar selama <b>"+totalTgl+"</b> Hari";
				console.log(denda);
			}else{
				console.log("tidak denda");
				denda = "-";
				
			}

			// console.log(id+" "+nama+" "+buku+" "+tgl_pinjam+" "+tgl_kembali);
			modal.style.display = "block";
			document.getElementById("nama").innerHTML="Sdr, "+nama;
			document.getElementById("buku").innerHTML="Buku "+buku; 
			document.getElementById("tgl_pinjam").innerHTML="Tanggal Pinjam Buku = " +tgl_pinjam;
			document.getElementById("tgl_kembali").innerHTML="Tanggal Kembali Buku = " +tgl_kembali;

			document.getElementById("tgl").innerHTML="tanggal = "+fungsi.tgl();

			document.getElementById("denda").innerHTML="Denda = "+denda;
			document.getElementById("kembali").href	="kembali_buku.php?id_pinjam="+id;


		});
		var fungsi = {
			tgl : function() {
				var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
				var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];

				var date 	= new Date();

				var tgl 	= date.getDate();	
				var thisTgl = date.getDate();
				thisTgl		= myDays[thisTgl];

				var bln		= date.getMonth();

				var yy 		= date.getYear();
				var th 		=  (yy < 1000) ? yy + 1900 : yy;

				return thisTgl + ', ' + tgl + ' ' + months[bln] + ' ' + th;
			}
		};
		
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		// var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		// btn.onclick = function() {
		// modal.style.display = "block";
		// }

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		}
		
		</script>

<script>
</script>

		
	</body>
</html>