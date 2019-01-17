<?php
$hostname = "(local)"; 	// naam van server
$dbname = "themasite";    	// naam van database
$username = "sa";      	// gebruikersnaam
$pw = "Kaboutertje2001";      	// password
$dbh = new PDO ("sqlsrv:Server=$hostname;Database=$dbname;
ConnectionPooling=0", "$username", "$pw");

$data = $dbh->query("select * from videos ");
?>

