<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "alumni";

	//Connection
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	//Check
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
		echo "Connection Completed";
	}
?>
