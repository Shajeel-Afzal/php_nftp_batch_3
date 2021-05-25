<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php		
		require 'header.php';

		echo "<br><br>----------- switch statement -------------<br><br>";
		/*
			- alternative of if-else
			- it is better in performance/speed than if-else
			- Syntax
				switch(expression){
					case 1:
						code statements
						break;
					case 2: 
						code statements
						break;
					case 3:
					case 4:
						code statement
						break;
					default:
						code statements
						break;
				}
		*/

		$x = 200;
		switch($x){
			case 100:
				echo "<br><br>Case 100.";
				break;
			case 200:
				echo "<br><br>Case 200.";
				break;
			case 300:
			case 400:
				echo "<br><br>Case 300 & 400.";				
				break;
			default:
				echo "<br><br>Default Case!";
				break;	
		}

		echo "<br><br>----------- break in loops -------------<br><br>";

		for ($i=0; $i < 10; $i++) { 
			if($i == 5){
				break;
			}
			echo $i." ";
		}

		echo "<br><br>----------- continue in loops -------------<br><br>";

		for ($i=0; $i < 10; $i++) { 
			if($i == 5 || $i == 6 || $i == 7){
				continue;
			}
			echo $i." ";
		}

		echo "<br><br>----------- include -------------<br><br>";

		echo "<br><br>----------- functions -------------<br><br>";

		/*
			- A block of code that can be used repeatedly
			- Provides code reuseability
			- Can take one to many inputs, and can output only one thing
			- Inputs are called parameters
			- Output is called return type
			- Syntax: 
				function nameOfTheFunction(){
					code to be executed.
				}
			- function name always starts with the letter.
			- function name cannot have spaces in them.
			- function names are NOT case-sensitive.
			- nameOfTheFunction(); <---- function calling!
		*/

		function sayHelloWorld(){
			echo "<br><br>Hello World!<br><br>";
		}

		sayHelloWorld();

		echo "<br><br>----------- function Parameters -------------<br><br>";

		function sum($num1, $num2){
			echo "<br>SUM: ";
			echo $num1 + $num2;
			echo "<br>";
		}

		sum(10, 20);

		echo "<br><br>----------- defalut values for parameters -------------<br><br>";

		function multiply($num1, $num2 = 1){
			echo "<br>Multiply Result: ";
			echo $num1 * $num2;
			echo "<br>";
		}

		multiply(10);

		echo "<br><br>----------- difference -------------<br><br>";

		function difference($num1, $num2){			
			return $num1 - $num2;			
			return "Another Return";
		}

		echo difference(10, 20);

		echo "<br><br>----------- Predefined Variables (Super Globals) -------------<br><br>";

		/* 
			- $_SERVER
			- It is an associative array

		*/

		echo $_SERVER['SCRIPT_NAME'];
		echo "<br>";
		echo $_SERVER['SERVER_ADDR'];

		// read more here: https://www.php.net/manual/en/reserved.variables.server.php		

		echo "<br><br>----------- Sessions -------------<br><br>";

		session_start();

		$_SESSION['name'] = "Shajeel Afzal";
		$_SESSION['Domain'] = "Technical";

		

	?>

</body>
</html>




