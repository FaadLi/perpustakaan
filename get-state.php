<?php
require_once("db/koneksi.php");
$db_handle = new DBController();
if(!empty($_POST["country_id"])) {
	$query ="SELECT * FROM buku WHERE id_buku = '" . $_POST["id_buku"] . "'";
	$results = $db_handle->runQuery($dbConn, $query);
?>
	<option value="">Select State</option>
<?php
	foreach($results as $state) {
?>
	<option value="<?php echo $state["id"]; ?>"><?php echo $state["name"]; ?></option>
<?php
	}
}
?>