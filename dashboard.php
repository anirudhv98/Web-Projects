<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="homestyle1.css">
	<link rel="stylesheet" type="text/css" href="dashboardstyle.css">
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
							echo '<li id="si"><a href="logout.php">Sign Out</a></li>';
							
						}
						else 
							echo '<li id="si"><a href="login.php">Sign In</a></li>';
					?>
				</ul>
			</nav>
		</div>
	</header>
	<div class="main1">
		<?php

		if($_SESSION['type'] == 0) {
		echo '<div>
				<div>
				<h1>Dashboard</h1><a class="arrow"></a>
				</div>
				<a href="writeA.php"><button id="write">
					<h2>Write an Article</h2>
				</button></a>
				<button>
					<h2>Request Admin Rights</h2>
				</button>
				<button>
					<h2>View Article History</h2>
				</button>
			</div>';
		}
		else {
		echo '<div>
				<div>
				<h1>Dashboard</h1><a class="arrow"></a>
				</div>
				<button id="appa">
					<h2>Approve Articles</h2>
				</button>
				<button id="appadmin">
					<h2>Approve Admin Rights</h2>
				</button>
				<button id="rmart">
					<h2>Remove Articles</h2>
				</button>
			</div>';
		}
		?>
	</div>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="approve.js"></script>
</body>

</html>