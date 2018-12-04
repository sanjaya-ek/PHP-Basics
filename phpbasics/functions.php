<?php

	# FUNCTION - Block of code that can be repeatedly called

	//Create Simple Function
	function simpleFunction(){
		echo "Hello World";
	}

	//Run Simple Function
	//simpleFunction();

	function sayHello($name = "World"){ #if user didn't enter a value default values take.
		echo "Hello $name<br>";
	}

	//sayHello("Sanjaya");
	//sayHello("Bob"); //We can call it many time as we want
	//sayHello();//User didn't enter a value

	//Return Value
	function addNumbers($num1,$num2){
		return $num1 + $num2;

	}
	//echo addNumbers(2,3);

	//By Reference

	$myNum = 10;

	function addFive($num){
		$num +=5;
	}

	function addTen(&$num){
		$num += 10;
	}

	addFive($myNum);

	echo "Value: $myNum<br>";

	addTen($myNum);

	echo "Value: $myNum<br>";




?>