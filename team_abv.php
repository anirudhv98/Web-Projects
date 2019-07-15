<?php
require 'api.php';
function home($count0) {
	global $matches;
	$hteam10 = $matches->matches[$count0]->homeTeam->name; //Fetch the  name of Home Team
	$hteam = chop($hteam10, " FC"); //Chopping off 'FC' from the name
	$flag = 0; //Flag 1: Team is multiple words, Flag 0: Single Word
	for($i= 0; $i < strlen($hteam); $i++)
	{
		if($hteam[$i] == " ")
		{
			$flag = 1;
			break;
		}
	}

	if($flag == 1)
	{
		$arr1 = str_split($hteam, 1); // Split the string letter by letter and store it in an array of characters
		$hoteam0 = array(); //Initialize empty array to store final 3 letter representation
		$k = 0;
		for($j = 0; $j < sizeof($arr1); $j++)
		{
			if($j == 0 || $arr1[$j-1] == ' ')
			{
				$hoteam0[$k] = $arr1[$j]; //Store the first letter and letter after every space into the result array
				$k++;
			}
		}
		if($k == 1 || $k == 2)
			$hoteam0[$k+1] = ' ';
		$hoteam1 = implode('', $hoteam0); //Join the characters of array hoteam0, convert into string and store in hoteam1
		return $hoteam1;
	}
	else
	{
		$hoteam = str_split($hteam, 3);//Split Home team into groups of 3 letters and store each 3 letter string in an element of array hoteam
		return $hoteam[0]; //Return the first element of hoteam , ie the first 3 letters of whole team name
	}
}
function away($count0) {
	global $matches;
	$ateam = chop($matches->matches[$count0]->awayTeam->name, " FC");
	$flag = 0;
	for($i = 0; $i < strlen($ateam) ; $i++)
	{
		if($ateam[$i] == " ")
		{
			$flag = 1;
			break;
		}
	}

	if($flag == 1)
	{
		$arr1 = str_split($ateam, 1);
		$awteam0 = array();
		$k = 0;
		for($j = 0; $j < sizeof($arr1); $j++)
		{
			if($j == 0 || $arr1[$j-1] == ' ')
			{
				$awteam0[$k] = $arr1[$j];
				$k++;
			}
		}
		if($k == 1 || $k == 2)
			$awteam0[$k+1] = ' ';
		$awteam = implode('', $awteam0);
		return $awteam;
	}
	else {
		$awteam = str_split($ateam, 3);
		return $awteam[0];
	}
}

?>
