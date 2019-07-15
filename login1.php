<?php

if(isset($_POST['sub'])) {

	//Connecting
	require 'connection.php';

	//Login
	$mailuid = $_POST['username'];
	$pass = $_POST['pwd'];
	//Checking Empty Fields
	if(empty($mailuid) || empty($pass))
	{
		header("Location: login.php?error=emptyfield");
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE uname=? OR email=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: login.php?error=mysql");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "ss",$mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)) {
				$pwdcheck = password_verify($pass, $row['password']);
				if($pwdcheck == false)
				{
					header("Location: login.php?error=wrongpassword");
					exit();
				}
				else if (pwdcheck == true)
				{
					session_start();
					$_SESSION['userid'] = $row['uname'];
					$_SESSION['type'] = $row['type'];
					header("Location: dashboard.php?login=success");

				}
			}
			else {
				header("Location: login.php?error=nouser");
				exit();
			}
		}
	}
}
else {
	header("home1.php");
	exit();
}
?>