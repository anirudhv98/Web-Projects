<?php

	$dbservname = "localhost";
	$dbusername = "LAPTOP-J2NMVFLQ/ani";
	$dbpwd = "";
	$dbname = "thefootballhub";
	$conn = mysqli_connect($dbservname, $dbusername, $dbpwd, $dbname);

	if(!$conn)
		die("Connection Failed");
?>