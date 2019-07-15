<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>TFH: Home</title>
	<link rel="stylesheet" type="text/css" href="homestyle1.css">
	<link rel="stylesheet" type="text/css" href="statstyle.css">
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
					<li><a href="articles.php">Articles</a></li>
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
	<div class="container1">
		<div class="parent10">
			num1
			<div>o</div>
			<div>o</div>
			<div>p</div>
		</div>
		<div class="parent10">
			num1
			<div>p</div>
			<div>c</div>
			<div>c</div>
		</div>
		<div class="parent10">
			num1
			<div>p</div>
			<div>p</div>
			<div>o</div>
		</div>
		<div class="parent10">
			num1
			<div>l</div>
			<div>o</div>
			<div>m</div>
		</div>
	</div>
</body>
</html>