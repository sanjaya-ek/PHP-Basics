<?php

	#CONDTIONALS

	/*

		==      -> Equals
		===     -> Matches not only the value but also the data types
		<       -> Less than
		>       -> Greather than
		<=      -> Less than or equals to
		>=      -> Greather than or equals to
		!=      -> Not equals to
		!==     -> Not identical 
	*/
		/*
		$num = 4;

		if($num==5){
			echo "5 passed";
		}elseif($num==6){
			echo "6 passsed";
		}else{
			echo "Did not pass";
		}
	*/
		

		#NESTING IF
		/*
		$num = 6;

		if($num >4){
			if($num<10){
				echo "$num passed";
			}
		}
		*/
		

		/*
			LOGICAL OPERATORS

			and  &&
			or   ||
			xor //Only one have to be true
		*/
			/*
			$num = 6;
			if($num > 4 AND $num <10){
				echo "$num passed";
			}
			*/

			$favColor = "green";

			switch($favColor){
				case "red":
					echo "Your favorite color is red";
					break;
				case "blue":
					echo "Your favorite color is blue";
					break;
				case "green":
					echo "Your favorite color is green";
					break;
				default:
					echo "Your favorite color is something else";
			}





?>