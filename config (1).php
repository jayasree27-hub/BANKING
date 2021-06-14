<?php

	$servername = "Localhost";
	$username = "id17047051_jayasri";
	$password = "E{/(x]*-6?k)hHL4";
	$dbname = "id17047051_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>