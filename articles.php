<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>TFH |Articles</title>
	<link rel="stylesheet" type="text/css" href="homestyle1.css">
	<link rel="stylesheet" type="text/css" href="articlestyle.css">
	<link href="https://fonts.googleapis.com/css?family=Muli|Roboto+Slab|Anton" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
		<div id="hdiv">
			<a href="home1.php"><h1 class="logo">The <span>Football</span> Hub</h1></a>
			<a class="burger_nav"></a>
			<nav>	
				<ul>
					<li id="news"><a href="">News</a>
						<ul>
							<li><a href="">Latest News</a></li>
							<li><a href="">Transfer News</a></li>
						</ul>
					</li>
					<li><a href="">Articles</a></li>
					<li><a href="">Statistics</a>
						<ul>
							<li><a href="">By Player</a></li>
							<li><a href="">By Club</a></li>
						</ul>
					</li>
					<li><a href="">Archives</a>
						<ul>
							<li><a href="">Best Matches</a></li>
							<li><a href="">Best Goals</a></li>
							<li><a href="">Best Saves</a></li>
						</ul>
					</li>
					<li><a href="">Clubs</a></li>
					<?php
						if(isset($_SESSION['userid'])) {
							echo '<li id="si"><a href="dashboard.php">Dashboard</a></li>';
						}
						else 
							echo '<li id="si"><a href="login.php">Sign In</a></li>';
					?>
				</ul>
			</nav>
		</div>
	</header>
	<div class="main2">
		<h2>Editor's Choice</h2>
		<?php
		require 'connection.php';
		$sql = "SELECT * from articles where approved=1";
		$res = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($res)) {
		echo '<div>
			<div>
				<h5>'.$row['author'].'</h5><br>
				<h4>'.$row['heading'].'</h4><br>
				<p>'.$row['caption'].'</p>
			</div>
			<a href="artdisplay.php?auth='.$row['author'].'&heading='.$row['heading'].'&cap='.$row['caption'].'"><img src="'.$row['imagesmall'].'"></a>
		</div>';
	}
	mysqli_close($conn);
		?>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>