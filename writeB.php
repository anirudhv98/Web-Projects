<?php
session_start();
require 'connection.php';
$heading = $_POST['heading'];
$text = $_POST['text'];
$caption = $_POST['caption'];
$userid1 = $_SESSION['userid'];
$userid1 = "'".$userid1."'";
$titleimg = $_POST['img0'];
$smallimg = $_POST['img1'];
echo $userid1;
date_default_timezone_set("Europe/London");
$sql0 = "SELECT * FROM users WHERE uname=".$userid1." OR email=".$userid1;
$res = mysqli_query($conn, $sql0);
while ($row = mysqli_fetch_assoc($res)) {
	if($row['type'] == 1)
		$appr = 1;
	else
		$appr = 0;
}
$time = date("Y-m-d h:i:s");
$sql = "INSERT INTO articles(timestamps,heading,content,author,approved,caption,image,imagesmall) VALUES (?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)) {
	echo "ERROR";
	// header("Location: dashboard.php?error=sqlerror");
	exit();
}
else {
	echo $time;
	mysqli_stmt_bind_param($stmt,'ssssisss', $time, $heading, $text,$_SESSION['userid'], $appr,$caption,$titleimg,$smallimg);
	mysqli_stmt_execute($stmt);
}

mysqli_stmt_close($stmt);

mysqli_close($conn);
?>