<!DOCTYPE html>
<html>
<head>
	<title>TFH: Register</title>
	<link rel="stylesheet" type="text/css" href="homestyle1.css">
	<link href="https://fonts.googleapis.com/css?family=Muli|Roboto+Slab|Anton" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="signstyle.css">
	<link rel="stylesheet" type="text/css" href="regist.css">
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
					<li id="si"><a href="">Sign In</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="grand_parent">
	<div class="parent">
	<form id="sign_in" method="post" action="reg.php">
		<h2>REGISTER </h2>
		<div class="details">
				<input type="text" name="name" class="textb" placeholder="Full Name"> <br>
				<input type="text" name="username" class="textb" placeholder="New Username"><br>
				<input type="email" name="email" class="textb" placeholder="E-Mail"> <br>
				<div style="display: inline; text-align: center; margin-right: 10px">
				<label style="font-size: 1em; margin-left: 10px">DOB:</label><input type="date" name="dob" > <br><br>
				</div>
				<input type="password" name="pwd" class="textb" placeholder="New password"> <br>
				<input type="password" name="pwd1" class="textb" placeholder="Confirm Password"> <br>
				<div style="display: inline;">
				<label style="font-size: 1em; float: left; margin-right: 30px; margin-left: -25px;">Gender:</label><select name="gender">
					<option value="M">Male</option>
					<option value="F">Female</option>
					<option value="O">Others</option>
				</select>
				<?php
				if(isset($_GET['error']))
				{
					if($_GET['error'] == "emptyfields")
						echo '<p> ERROR: Empty Fields</p>';
					elseif($_GET['error'] == "invalidusername")
						echo "<p> ERROR: Invalid Username</p>";
					elseif ($_GET['error'] == "passwordnotmatch") {
						echo "<p>ERROR: Passwords do not match!</p>";
					}
					elseif ($_GET['error'] == "usernameoremailtaken") {
						echo "<p>Sorry, the username/email is already taken</p>";
					}
				}

				?>
				</div>
		</div>
		<input type="submit" name="reg" value="REGISTER" class="button" id="reg">
	</form>
	</div>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>