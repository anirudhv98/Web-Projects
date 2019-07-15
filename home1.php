<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>TFH: Home</title>
	<link rel="stylesheet" type="text/css" href="homestyle1.css">
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
					<li><a href="stats.php">Statistics</a>
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
							echo '<li id="si"><a href="dashboard.php">Dashboard</a>
									<ul>
									<li><a href = "logout.php">Sign Out</a></li>
									</ul>
									</li>';
							// echo '<li id ="si"><a href = "logout.php">Sign Out</a></li>';
						}
						else 
							echo '<li id="si"><a href="login.php">Sign In</a></li>';
					?>
				</ul>
			</nav>
		</div>
	</header>
	<div id="slider" style="margin-top:0">
		<figure>
			<img src="slideshow\cr71.jpg">
			<img src="slideshow\Wayne_Rooney2.jpg">
			<img src="slideshow\Wayne_Rooney1.jpg">
			<img src="slideshow\kaka1.jpg">
		</figure>
	</div>
	<div class = "main">
		<div class="sidebar">
			<h2>League Table</h2>
			<?php
			include('api2.php');
			echo 
			'<table>
			<tr class="head"><td style="padding:0">Pos</td><td>Club</td><td style="padding:0">Pts</td></tr>';
			echo '<tr class="top1"><th>'.$standings->standings[0]->table[0]->position.'</th><td><img class = standimg src="'.$standings->standings[0]->table[0]->team->crestUrl.'"><p>'.chop($standings->standings[0]->table[0]->team->name," FC").'</p></td><td>'.$standings->standings[0]->table[0]->points.'</td>';
			$count2 = 1;
			while($count2 < 4)
			{
				$name = $standings->standings[0]->table[$count2]->team->name;
				$name = chop($name, " FC");
				echo '<tr class="top4"><th>'.$standings->standings[0]->table[$count2]->position.'</th><td><img class = standimg src="'.$standings->standings[0]->table[$count2]->team->crestUrl.'"><p>'.$name.'</p></td><td>'.$standings->standings[0]->table[$count2]->points.'</td>';
				$count2++;
			}
			while($count2 < 6)
			{
				$name = $standings->standings[0]->table[$count2]->team->name;
				$name = chop($name, " FC");
				echo '<tr class="top6"><th>'.$standings->standings[0]->table[$count2]->position.'</th><td><p><img class = standimg src="'.$standings->standings[0]->table[$count2]->team->crestUrl.'">'.$name.'</p></td><td>'.$standings->standings[0]->table[$count2]->points.'</td>';
				$count2++;
			}
			while($count2 < 17)
			{
				$name = $standings->standings[0]->table[$count2]->team->name;
				$name = chop($name, " FC");
				echo '<tr><th>'.$standings->standings[0]->table[$count2]->position.'</th><td><img class = standimg src="'.$standings->standings[0]->table[$count2]->team->crestUrl.'"><p>'.$name.'</p></td><td>'.$standings->standings[0]->table[$count2]->points.'</td>';
				$count2++;
			}
			while($count2 < 20)
			{
				$name = $standings->standings[0]->table[$count2]->team->name;
				$name = chop($name, " FC");
				echo '<tr class="bot3"><th>'.$standings->standings[0]->table[$count2]->position.'</th><td><img class = standimg src="'.$standings->standings[0]->table[$count2]->team->crestUrl.'"><p>'.$name.'</p></td><td>'.$standings->standings[0]->table[$count2]->points.'</td>';
				$count2++;
			}
			echo '</table>';
			?>
		</div>
		<div id="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class = "sidebar" id="fix">
		</div>
	</div>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="script1.js"></script>
</body>
</html>