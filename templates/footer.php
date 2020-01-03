


		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/dataTable.min.js"></script>

		<script type="text/javascript">
		$(document).ready(function(){
			$('#myTable').DataTable({
				order:[[0,"desc"]] //sort desc dataTabel baris 0 (No) 
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

			var ida 	= $(this).data('ida');
			// console.log(ida);

			var dendanya = 1000;
			var totalTgl = 2;
			var denda = 0;
			if(totalTgl > 7){
				console.log("denda");
				var total= totalTgl - 7;
				var denda = total * dendanya;
			}else{
				console.log("tidak denda");
				
			}

			// console.log(id+" "+nama+" "+buku+" "+tgl_pinjam+" "+tgl_kembali);
			modal.style.display = "block";
			document.getElementById("nama").innerHTML="Sdr,"+nama;
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