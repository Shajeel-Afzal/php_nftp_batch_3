<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		class Person {
			// properties
			private $height;
			public $name;
			public $dob;
			public $color;
			public $weight;
			private $gender;

			public function setGender($g){
				$gender = $g;
			}

			public function getGender(){
				return $gender;
			}

			public function setHeight($h){
				$height = $h;
			}

			public function getHeight(){
				return $height;
			}

			// Constructor is called each time a new Object is created.
			public function __construct(){
				echo "It is a Constructor!";
			}

			// Destructor is called each time an existin Object is destroyed.
			// unset($hammad)
			public function __destruct(){
				echo "Destructor called!";
			}

			/*
				- keywords can be public, private
			*/

			// methods
			public function speak(){
				echo "<br>Speaking...<br>";
			}

			public function eat(){
				echo "<br>Eating...<br>";	
			}

		}

		class Student extends Person{
			public $class;
			public $registrationNumber;
			public $parentPhoneNumber;
		}

		$mSaleem = new Student();
		$mSaleem->name = "Saleem";
		echo $mSaleem-name;

		$hammad = new Person(); 	// Object Creation Proces.
		
		$hammad->height = 5.7;		
		$hammad->name = "Hammad";
		$hammad->dob = "05/05/2000";

		echo $hammad->height;

		$hammad->eat();

		$ali = new Person();

		$ali->height = 5.9;		
		$ali->name = "Ali";
		$ali->dob = "05/05/1995";

		echo $ali->height;

		$ali->eat();



	?>

</body>
</html>