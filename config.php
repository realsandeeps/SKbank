<?php
// DB Credentials.
	define($DB_HOST = "localhost");
	define($DB_USER = "id15953637_sk");
	define($DB_PASS = "H/@85YRF]7]jz&]t");
	define($DB_NAME = "id15953637_sk_bank");
// Establish database connection
	$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>