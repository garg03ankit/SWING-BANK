<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Indian_bank";
	$port = "3307";

	$conn = mysqli_connect($servername, $username, $password, $dbname,$port);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>