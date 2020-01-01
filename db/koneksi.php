<?php 
// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'perpustakaan';

 $dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die ('MySQL 
 connect failed. ' . mysqli_error($dbConn));
//mysqli_select_db($dbConn ,$dbName) or die('Cannot select database. ' . 
  mysqli_error($dbConn);

?>