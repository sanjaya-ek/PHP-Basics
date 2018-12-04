<?php

#Array - Variable that holds multiple values

/*
	-Indexed
	-Associative
	-Multi-dimensional

*/

	//Indexed
	$people = array ('Kevin','Jeremy','Sara');
	$ids = array(23,10,5);
	$cars =['Honda','Toyota','Ford'];
	
	//Add another value to the current array
	$cars[3] = 'Chevy';
	
	//If we don't know what array number is next and we want to add value
	$cars[] = 'BMW';
	
	//This 'count' is a function,this will say how many values in a current array.
	// echo count($cars);

	//This 'print_r' function print the entire array.
	// print_r($cars);

	//This var_dump() function shows us actual array
	// var_dump($cars);


	// echo $cars[4];
	// echo $ids[2];
	// echo $people[0];


	//Associative arrays - We can define keys in this type of arrays

	$people = array ('Brad' => 35, 'Jose' => 32, 'William' => 37);

	$ids = [22 => 'Brad', 44 => 'Jose', 98 => 'Mike'];
	// echo $ids[98];
	// echo $people['Brad'];
	$people['jill'] = 42;
	// echo $people['jill'];
	// print_r($people);
	// var_dump($people);


	//Multi-Dimensional arrays - This means an array inside of an array

	$cars = array(
		array ('Honda',20,10),
		array ('Toyota',30,20),
		array ('Ford',23,12)
	);
	echo $cars[1][2];


?>
