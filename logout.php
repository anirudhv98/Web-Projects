<?php
	session_start();
	session_unset(); //Deletes all the session variables.
	session_destroy(); //Destroys the session.
	header("Location: home1.php");
?>