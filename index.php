<!DOCTYPE html>
<html>
<head>
	<title>PHP tutorial</title>
</head>
<body>
	<?php
	//print statement
	echo "hello world!!";
	//can also use
	//print("Hello world!!");

	//declare variable
	$a = 1;
	$b = 2;
	$sum = $a + $b;
	echo "<br>The sum is ".$sum;

	$name = "john";
	echo "<br>Hi, I am ". $name;

	$firstName = "Xyz";
	$lastName = "Abc";
	$age = 22;
	$isStudent = TRUE;

	echo "<br>My name is ".$firstName. " ". $lastName. "<br>My age is ".$age . "<br>I am a student ".$isStudent;

	define("pi", 3.1415);
	echo "<br>".pi;

	//If else statement
	$age = 18;
	if($age >= 18){
		echo "<br>You are a voter";
	} else {
		echo "<br>You are not a voter";
	}
	echo "<br><h1>Switch Statement</h1> <br>";
	//Switch
	$noOfDay = 7;
	switch($noOfDay){
		case 1:
		echo "Sunday";
		break;
		case 2:
		echo "Monday";
		break;
		case 3:
		echo "Tuesday";
		break;
		case 4:
		echo "Wednesday";
		break;
		case 5:
		echo "Thursday";
		break;
		case 6:
		echo "Friday";
		break;
		case 7:
		echo "Saturday";
		break;
		default:
		echo "Something went wrong";
	}
	//While Loop
	echo"<br><h2>While loop</h2><br>";
	$x = 1;
	while($x != 100){
		echo $x. "<br>";
		$x++;
	}
	//Do-while
	echo"<br><h3>Do-while Loop</h3><br>";
	$a = 1;
	do{
		echo $a;
		$a++;
		echo("<br>");
	}
	while($a <= 100);
	
	//For loop
	echo"<br><h3>For Loop</h3><br>";
	$z = 100;
	for($z=100; $z>=1; $z--){
		echo $z;
		echo("<br>");
	}
	//Array
	echo"<br><h3>Array</h3><br>";
	$name = array("Ram", "hari", "Sita", "Gopal");
	foreach ($name as $key => $value) {
		echo $value ."<br>";
	}
	//Function 1) Built in -> eg echo"";(2) UserDefined (3) 
	echo"<br><h3>Function</h3><br>";
	function myName(){
		echo "Name: Ram";
	}
	myName();

	echo"<br><h3>Function2</h3><br>";
	function name($name){
		echo "Name:".$name;
	}
	name("hari");

	//Array sort
	echo"<br><h3>More on Array</h3><br>";
	$number = array(1,2,3,4,5,6,7,8,9,0);
	echo $number[0]."<br>";
	//sort($number);
	rsort($number);//reverse sort
	foreach ($number as $key => $value) {
		echo $value."<br>";
	}
	?>
</body>
</html>