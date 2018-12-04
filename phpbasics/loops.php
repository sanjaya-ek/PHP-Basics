<?php
	# LOOPS - Ececute code set number of times.
	
	/*
		For
		While
		Do..While
		Foreach
	*/

	#For Loop - If you know number of times it's gonna be executed
	# @params -	init,conditon,increment

	/*	
	for($i=0;$i<=10;$i++){
		echo 'Number'.' '. $i;
		echo "<br>";
	}	
	*/

	#While Loop
	# @params - Just take the conditon,That's it. 
	
	/*
	$i = 0;

	while($i <10){
		echo $i;
		echo "<br>";
		$i++;
	}
	*/

	#Do...While
	# @params - condition

	/*
	$i = 0;

	do{
		echo $i;
		echo "<br>";
		$i++;
	}

	while($i <10);
	*/

	#Foreach Loop - For arrays
	/*
	$people = array ('Brad','Jose','William');

	foreach ($people as $person) { # in here we take the singular verb of people.It is apply to all things in this 									array
			echo $person;
			echo "<br>";
		}	
	*/

	$people = array ('Brad' =>'brad@gmail.com','Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

	foreach ($people as $person => $email){

		echo $person.': '.$email;
		echo "<br>";
	}

 ?>