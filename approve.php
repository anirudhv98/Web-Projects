<?php
session_start();
require 'connection.php';
$ch = $_GET['ch'];
if($ch !== null)
{
if($ch == 1 || $ch == 3)
{
	if($ch == 1)
		$sql = "SELECT * from articles where approved=0";
	else
		$sql = "SELECT * FROM articles where approved=1";
	$res = mysqli_query($conn, $sql);
	$resCount = mysqli_num_rows($res);
	if($resCount > 0) {
		$count = 1;
		while($row = mysqli_fetch_assoc($res)) {
			echo '<div style="flex-flow: column; justify-content: flex-start">';
					if($count <= 1)
						echo '<button id="boom">Select Articles</button>';
					echo '
					<div style="flex-flow: column; justify-content:flex-start; width:100%; height: 100%; margin-top: 20px">
					<h2>'.$row['heading'].'</h2>
					<p>id:'.$row['id'].'</p>
					<h5>'.$row['timestamps'].'</h5>
					<p>Author:'.$row['author'].'</p>
					<p style="word-wrap: break-word; white-space: pre-line">'.$row['content'].'</p>
					</div>';
			$count++;	
		}
		// echo '<button id="show">Show more</button>';
		echo '</div>';

	}
	else
		echo '<p style="background-color: rgba(240,240,240,0.8); margin-top:0"> No more articles to process</p>';
}
}

if(isset($_GET['id'])) {
	if($_GET['ch'] == 3)
		$sql = "DELETE from articles where id=".$_GET['id'];
	else
		$sql = "UPDATE articles set approved=1 where id=".$_GET['id'];
	$re = mysqli_query($conn, $sql);
	if($re == false)
	{
		header("dashboard.php?error=mysqlerror");
		exit();
	}
	else
		echo "SUCCESS!";
}


mysqli_close($conn);
?>