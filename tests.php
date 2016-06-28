<?php
	include("functions.php");

	echo "Testing starts here";

	echo "\n\n\nTesting 1 if player and computer picked rock resulting in tie";

	if (findWinner("rock", "rock") == "Its a Tie! Both sides picked rock"){

		echo "\nSucces";
	}
	else{
		echo "\nFailure";
	}


	echo "\n\n\nTesting 2 if player picks paper and computer picked scissors resulting in computer winning";
	
	if (findWinner("paper", "scissors") == "You lost :(  The computer picked scissors and you chose paper"){

		echo "\nSucces";
	}
	else{
		echo "\nFailure " . findWinner("paper", "scissors");
	}


	echo "\n\n\nTesting 3 if player picks paper and computer picked rock resulting in player winning";
	
	if (findWinner("paper", "rock") == "You Win. You chose paper and the computer picked rock."){

		echo "\nSucces";
	}
	else{
		echo "\nFailure " . findWinner("paper", "scissors");
	}
	?>