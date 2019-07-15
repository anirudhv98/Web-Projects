<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TFH: Sign In</title>
	<link rel="stylesheet" type="text/css" href="homestyle1.css">
	<link href="https://fonts.googleapis.com/css?family=Muli|Roboto+Slab|Anton" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="signstyle.css">
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
							echo '<li id="si"><a href="dashboard.php">Sign Out</a></li>';
						}
						else 
							echo '<li id="si"><a href="login.php">Sign In</a></li>';
					?>
				</ul>
			</nav>
		</div>
	</header>
	<div class="grand_parent">
	<div class="parent">
		<?php 
		if(isset($_SESSION['userid'])) {
			header("Location: dashboard.php");
		}
		else {
			echo '
				<form id="sign_in" method="post" action="login1.php">
				<h2>SIGN IN / REGISTER </h2>
				<div class="details">
					<div>
					<input type="text" name="username" class="textb" placeholder = "Username"><br><br>
					</div>
					<div>
					<input type="password" name="pwd" class="textb" placeholder = "Password"> <br>
					</div>
				</div>';
				if(isset($_GET['error']))
				{
					if ($_GET['error'] == 'nouser')
						echo "<p>No such user exists.</p>";
					elseif($_GET['error'] == 'wrongpassword')
						echo "<p>ERROR: Wrong Password Entered</p>";
					elseif ($_GET['error'] == 'emptyfield') {
						echo "<p>Fill in All the Fields!</p>";
					}
				}
				echo '<input type="submit" name="sub" value="SIGN-IN" class="button" id="reg">
				</form>
				<button class="button"><a href="register.php">REGISTER</a></button>
				</div>
				</div>
				';
		}
		?>
	</div>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>