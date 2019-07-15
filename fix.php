<?php
			require 'connection.php';
			$matchday = $_REQUEST['match'];
			// echo '<p>Gameweek '.$matchday.'</p>';
			include('api.php') ;
			require 'team_abv.php';
			$count1 = $matches->count;
			$count0 = 0;
			$home_team = '';
			while($count0 < $count1)
			{
				$home_team = home($count0);
				$away_team = away($count0);
				$sql1 = "SELECT url FROM logos WHERE name='".$home_team."'";
				$sql2 = "SELECT url FROM logos WHERE name='".$away_team."'";
				$res1 = mysqli_query($conn, $sql1);
				while($row = mysqli_fetch_assoc($res1))
				{
					$team1 = $row['url'];
				}
				$res2 = mysqli_query($conn, $sql2);
				while($row = mysqli_fetch_assoc($res2))
					$team2 = $row['url'];
				echo '
				<div><p>'.$home_team.'</p><img src="'.$team1.'"><div>';
				if($matches->matches[$count0]->status == "FINISHED" || $matches->matches[$count0]->status == "LIVE")
					echo '<p>'.$matches->matches[$count0]->score->fullTime->homeTeam.' - '.$matches->matches[$count0]->score->fullTime->awayTeam.'</p>';
				else
				{
					$time = $matches->matches[$count0]->utcDate;
					$l = strlen($time);
					$string1 = '';
					for($i = 0; $i < $l; $i++)
					{
						if($time[$i] == 'T')
							break;
						$string1 = $string1.$time[$i];
					}
					$time = ltrim($time, $string1);
					$time = chop($time, "00Z");
					$time1 = chop($time, ":");
					$time1 = ltrim($time1, "T");
					echo "<p>".$time1."</p>";
				}
				echo'</div><img src="'.$team2.'"><p>'.$away_team.'</p></div>';
				$count0 = $count0 +1;
			}
?>