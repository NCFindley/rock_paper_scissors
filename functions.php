<?php

function randomWep() {

	$rand = rand (0, 2);
	$weparr= array("rock", "paper", "scissors");
	return $weparr[$rand];

}


function findWinner($player1, $comp){
		
	if ($player1 == "random") {
			$player1 = randomWep();
		}

	if ($player1 == $comp) { 

				return "Its a Tie! Both sides picked " . $player1; 

				}elseif ($player1 == "rock" and $comp == "scissors") { 

					return "You Win. You chose rock and the computer picked scissors.";

				}elseif ($player1 == "paper" and $comp == "rock") { 

					return "You Win. You chose paper and the computer picked rock.";

				}elseif ($player1 == "scissors" and $comp == "paper") { 

					return "You Win. You chose scissors and the computer picked paper.";

				}else { 

					return "You lost :(  The computer picked " . $comp .   " and you chose " .  $player1; 
				}



}


?>