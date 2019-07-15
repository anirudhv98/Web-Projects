<?php
if(isset($_POST['reg']))
{
	//Connecting
	require 'connection.php';

	/*Registering */
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$dob = date('Y-m-d', strtotime($_POST['dob']));
	//$dob = $_POST['dob'];  ---Alternate method
	$pass1 = $_POST['pwd'];
	$pass2 = $_POST['pwd1'];
	$gender = $_POST['gender'];
	$type = 0;
	//Checking for Errors
	if(empty($name) || empty($username) || empty($email) || empty($dob) || empty($pass1) || empty($pass2))
	{
		header("Location: register.php?error=emptyfields&name=".$name."&username=".$username."&email=".$email."&dob=".$dob);
		exit();
	}
	// else if (!preg_match("/^[a-zA-Z]*$/", $name)) {
	// 	header("Location: register.php?error=invalidname&username=".$username."&email=".$email."&dob=".$dob);
	// 	exit();
	// }
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: register.php?error=invalidusername&name=".$name."&email=".$email."&dob=".$dob);
		exit();
	}
	else if ($pass1 !== $pass2) {
		header("Location: register.php?error=passwordnotmatch&name=".$name."&username=".$username."&email=".$email."&dob=".$dob);
		exit();
	}
	else
	{
		$sql = "SELECT uname from users where uname=? OR email=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: register.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "ss", $username, $email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0)
			{
				header("Location: register.php?error=usernameoremailtaken");
				exit();
			}
			else {
			
				$sql = "INSERT INTO users (name, uname, email, dob, password, type, gender) values(?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: register.php?error=sqlerror");
				exit();
				}
				else {
					$hashedpass = password_hash($pass1, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sssssis", $name, $username, $email, $dob, $hashedpass, $type, $gender);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_store_result($stmt);
					header("Location: login.php?status=success");
					exit();
				}
		}		
			}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else
	header("Location: register.php");

?>