<?php
	session_start();
	// $heading = $_GET['heading'];
	// $author = $_GET['auth'];
	// $caption = $_GET['cap'];
?>


<!DOCTYPE html>
<html>
<head>
	<?php
	// echo "<title>TFH | ".$heading."</title>";
	?>
	<title>ArtDisplay</title>
	<link rel="stylesheet" type="text/css" href="homestyle1.css">
	<link rel="stylesheet" type="text/css" href="artdispstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Muli|Roboto+Slab|Anton|Roboto+Condensed" rel="stylesheet">
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
	<div class="contain">
		<img src="slideshow/cr71.jpg">
		<div class="parent1">
			<div id="blank">
				
			</div>
			<div id="content1">
				<h2>Rooney is back.</h2>
				<h3>Ronit</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div id="votes">
			</div>
		</div>
	</div>
</body>
</html>