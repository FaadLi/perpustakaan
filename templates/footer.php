


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
		
		
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		modal.style.display = "block";
		}

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