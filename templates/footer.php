


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
		</script>
		
	</body>
</html>