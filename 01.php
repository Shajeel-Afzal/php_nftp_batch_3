<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		// This is the single line comment!
		/*
			This 
			is 
			multi 
			line 
			comment!
		*/

		echo "Shajeel Afzal!";
		echo "<br>";
		echo "Trainer @ NFTP";
		echo "<br>";
		echo "<br>";

		// -----------variables-----------

		// $variable_name = value;
		$user_name = "Zahid Mehmood";

		echo $user_name;
		echo "<br>";

		$user_name = "Muhammad Rafee";

		echo $user_name;
		echo "<br>";

		$age;
		$age = 10;


		/* variable naming rules
		1- A variable name cannot start 
		with a number

		example: $0age <--- invalid

		2- A variable name must start with
		a letter (a-z, A-Z) or an underscore (_)

		3- A variable name can only container letters
		or and underscore (a-z, A-Z, 0-1, _)

		$cnic = 30000 <---- valid
		$cnic57 = 30000 <---- valid
		$cnic 57 = 40000 <---- invalid
		$cnic-57 = 50000 <---- invalid

		4- Variable names are case sensitive

		example: $name and $NAME are two different
		variables.

		$name = "Shajeel";
		$Name = "Sufyana";

		echo $Name;

		*/

		// -----------constants-----------
		/*
			- constants value cannot be changed
			- define(constant_name, constant_value);

		*/
		echo "<br><br>";
		define("myTrainer", "Shajeel Afzal");
		echo myTrainer;

		// -----------data types-----------
		// text based data >>> Strings
		// numeric data    >>> Integer/Decimals/Floating
		// true/false data >>> boolean

		// String Concatination
		$first_name = "Shajeel";
		$last_name = "Afzal";

		echo "<br><br>".$first_name." ".$last_name;

	?>

</body>
</html>