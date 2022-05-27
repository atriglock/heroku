<?php
	$User = a;
	$CPU = a;
	// $wins = 0;
	// $losses = 0;

	$CPUArray = array( "Rock", "Paper", "Scissors" );
	$CPURandomizer = array_rand($CPUArray);
	$User = $_GET["t"];
	$CPU = $CPUArray[$CPURandomizer];
	$CPUOrigin = $CPU;
	$UserOrigin = $User;
	$CPU = strtolower($CPU);
	$User = strtolower($User);

	// $twitchtv = new TwitchTV();
	// $ttv_code = $_GET['code'];
	// $access_token = $twitchtv->get_access_token($ttv_code);
	// $user_name = $twitchtv->authenticated_user($access_token);

	if($User == $CPU){
		echo "Result: Tie! $UserOrigin vs. $CPUOrigin";
	}
	else if($User == "rock"){
		if($CPU == "scissors") {
			echo "Result: User wins! $UserOrigin beats $CPUOrigin";
		} else {
			echo "Result: CPU wins! $CPUOrigin beats $UserOrigin";
		}
	}
	else if($User == "paper") {
		if($CPU == "rock") {
			echo "Result: User wins! $UserOrigin beats $CPUOrigin";
		} else {
			if($CPU == "scissors") {
				echo "Result: CPU wins! $CPUOrigin beats $UserOrigin";
			}
		}
	}
	else if($User == "scissors") {
		if($CPU == "rock") {
			echo "Result: CPU wins! $CPUOrigin beats $UserOrigin";
		} else {
			if($CPU == "paper") {
				echo "Result: User wins! $UserOrigin beats $CPUOrigin";
			}
		}
	}
?>