<?php
	$User = a;
	$CPU = a;
	$wins = 0;
	$losses = 0;
	$user_name = "atriglock";
	// $n = 1;
	$CPUArray = array( "Rock", "Paper", "Scissors" );
	$CPU = array_rand($CPUArray);
	$User = $_GET["t"];
	// echo $User;
	// echo $CPUArray[$CPU];
	// $input[$rand_keys[0]]
	// t=[input from nightbot]
	// if (!empty($id) && file_exists($filename))

	// $t = date("H");
	// if ($t < "10") {
	//   echo "Have a good morning!";
	// } elseif ($t < "20") {
	//   echo "Have a good day!";
	// } else {
	//   echo "Have a good night!";
	// }

	$twitchtv = new TwitchTV();
	$ttv_code = $_GET['code'];
	$access_token = $twitchtv->get_access_token($ttv_code);
	$user_name = $twitchtv->authenticated_user($access_token);

	if($User == $CPUArray[$CPU]){
		echo 'Result: Tie!';
	}
	else if($User == "Rock"){
		if($CPUArray[$CPU] == "Scissors") {
			++$wins($user_name);
  			echo 'Result: User wins!' . $wins($user_name);
		} else {
			++$losses(user_name);
			echo 'Result: CPU wins!' . $losses($user_name);
		}
	}
	else if($User == "Paper") {
		if($CPUArray[$CPU] == "Rock") {
			++$wins($user_name);
			echo 'Result: User wins!' . $wins($user_name);
		} else {
			if($CPUArray[$CPU] == "Scissors") {
				++$losses(user_name);
				echo 'Result: CPU wins!' . $losses($user_name);
			}
		}
	}
	else if($User == "Scissors") {
		if($CPUArray[$CPU] == "Rock") {
			++$losses(user_name);
			echo 'Result: CPU wins!' . $losses($user_name);
		} else {
			if($CPUArray[$CPU] == "Paper") {
				++$wins($user_name);
				echo 'Result: User wins!' . $wins($user_name);
			}
		}
	}

?>





<?php
	// if ($User === $CPU) {
	// 	echo 'Result: Tie!';
	// } elseif ($User === "Rock") && ($CPU === "Scissors") {
	// 	echo 'Result: User wins!';
	// } elseif ($User === "Paper") && ($CPU === "Rock") {
	// 	echo 'Result: User wins!';
	// } elseif ($User === "Scissors") && ($CPU === "Paper") {
	// 	echo 'Result: User wins!';
	// } elseif ($User === "Rock") && ($CPU === "Paper") {
	// 	echo 'Result: CPU wins!';
	// } elseif ($User === "Paper") && ($CPU === "Scissors") {
	// 	echo 'Result: CPU wins!';
	// } elseif ($User === "Scissors") && ($CPU === "Rock") {
	// 	echo 'Result: CPU wins!';
	// } else echo 'Unknown input, make sure Rock, Paper, or Scissors are Capitalized';
?>



<?php
// if ($User === $CPU) {
// 		echo 'Result: Tie!';
// 	} elseif ($User === "Rock") {
// 		if ($CPU === "Scissors") {
// 			echo 'Result: User wins!';
// 		} else {
// 			if ($CPU === "Paper") {
// 				echo 'Result: Computer wins!';
// 			}
// 		}
// 	} elseif ($User === "Paper") {
// 		if ($CPU === "Rock") {
// 			echo 'Result: User wins!';
// 		} else {
// 			if ($CPU === "Scissors") {
// 				echo 'Result: Computer wins!';
// 			}
// 		}
// 	} elseif ($User === "Scissors") {
// 		if ($CPU === "Paper") {
// 			echo 'Result: User wins!';
// 		} else {
// 			if ($CPU === "Rock") {
// 			echo 'Result: Computer wins!';
// 			}
// 		}
// 	} else echo 'Unknown input, make sure Rock, Paper, or Scissors are Capitalized';
?>




<?php
//    if($User === $CPU){
//        echo 'Result: Tie!';
//    }
//    else if($User === "Rock"){
//        if($CPU === "Scissors") {
//            echo 'Result: User wins!';
//        } else {
//            echo 'Result: CPU wins!';
//        }
//    }
//    else if($User === "Paper") {
//        if($CPU === "Rock") {
//            echo 'Result: User wins!';
//        }else {
//            if($CPU === "Scissors") {
//                echo 'Result: Computer wins!';
//            }
//        }
//    }
//    else if($User === "Scissors") {
//        if($CPU === "Rock") {
//            echo 'Result: CPU wins!';
//        } else {
//            if($CPU === "Paper") {
//                echo 'Result: User wins!';
//            }
//        }
//    }
//    else echo 'Unknown input';
?>