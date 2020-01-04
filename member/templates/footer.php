    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    

    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/dataTable.min.js"></script>

    
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable({
                order:[[3,"asc"]], //sort desc dataTabel baris 0 (No) 
                // "paging":   false,
                // "ordering": false,
                // "info":     false
            });

            
        } );
    </script>
    
    </body>
</html>