<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		// -----------arithmetic operators-----------
		// +, -, /, *, %

		$x = 50;
		$y = 20;

		echo $x + $y;

		// -----------increment operator-----------
		// ++

		echo "<br><br>";

		$x++; // post increment operator
		$x = $x + 1;
		// echo $x;

		++$x; // pre increment operator

		echo ++$x; // 



		// -----------decrement operator-----------
		// --

		$x--; // 51
		$x = $x - 1;
		echo "<br>";		
		echo "<br>";		
		echo "<br>";		
		// echo $x;

		// -----------Assignment operator-----------
		// = 

		echo "x = ".$x."<br>";
		echo "y = ".$y."<br><br>";

		// $x = $x + $y;
		// echo "x + y = ".$x;
		
		$x += $y; // x = x + y;
		echo "x += y: ".$x;

		// x -= y >>> x = x - y;
		// x += y >>> x = x + y;
		// x *= y >>> x = x * y;
		// x /= y >>> x = x / y;
		// x %= y >>> x = x % y;

		// -----------Comparison operator-----------
		// == (equal to operator, it compares the value only)
		// !=, <> (not equal to operator, it compares the value only)
		// === (equal to operator but it compares both value and data type)
		// !== ( it compares both the value and operator)
		// >
		// <
		// >=
		// <=

		echo "<br><br>Comparison operator<br><br>";

		$x = "20";
		$y = 20;
		$result = $x == $y;

		echo "<br><br>== example<br><br>";

		if ($result) {
			echo "true";
		} else {
			echo "false";
		}

		echo "<br><br>=== example<br><br>";

		$result = $x === $y;

		if ($result) {
			echo "true";
		} else {
			echo "false";
		}

		echo "<br><br>!= example<br><br>";

		$result = $x != $y;

		if ($result) {
			echo "true";
		} else {
			echo "false";
		}

		echo "<br><br>!== example<br><br>";

		$result = $x !== $y;

		if ($result) {
			echo "true";
		} else {
			echo "false";
		}

		// -----------Logical operator-----------
		// and, && (True if both x and y are true)
		// or, ||  (True if either x or y is true)
		// xor (True if either x or y is true but not both)
		// ! (not operator, True if x is not true)

		echo "<br><br>Logical operator<br><br>";

		$y = true; $z = true;

		echo "AND Operator<br>";
		if($y && $z){
			echo "true";
		} else {
			echo "false";
		}

		echo "<br><br>OR Operator<br>";
		if($y || $z){
			echo "true";
		} else {
			echo "false";
		}

		echo "<br><br>XOR Operator<br>";
		if($y xor $z){
			echo "true";
		} else {
			echo "false";
		}

		// -----------Array-----------

		echo "<br><br>Arrays<br><br>";
		// $name1 = "Zahid";
		// $name2 = "Abbas";
		// $name3 = "Abdul Ghaffar";

		// echo $name1;
		// echo $name2;
		// echo $name3;

		$names = array("Zahid", "Abbas", "Abdul Ghaffar");
		$ages = array(20, 25, 30, 34, 28, 22);
		
		$names[0] = "Abdurrehman Liaqat";
		echo $names[0];

		// -----------Associative Arrays-----------
		echo "<br><br>Associative Arrays<br><br>";
		$students = array(
			"Zahid" => 20,
			"Abbas" => 25,
			"Abdul Ghaffar" => 24
		);

		echo $students["Zahid"];
	?>

</body>
</html>


