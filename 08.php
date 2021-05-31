<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		echo "---------- PHP Abstract Classes -----------";
		/*
			- The abtract keyword is used to create an abstract class 	or abstract method.
			- Can be inherited but they cannto be instantiated.
			- they can contain both members and functions
			- An Abstract class can have Abstract methods.
			- A class inheriting from an abstract class must implement all the abstract methods.				
		*/

		abstract class Fruit {
			private $color;

			abstract function eat();

			public function setColor($c){
				$this->color = $c;
			}

			public function getColor(){
				return $this->color;
			}
		}

		class Apple extends Fruit {
			public function eat(){
				echo "<br>Eating Apple...<br>";
			}
		}

		class Orange extends Fruit{
			public function eat(){
				echo "<br>Eating Orange...<br>";	
			}
		}

		$apple = new Apple();
		$apple->setColor("Red");		
		$apple->eat();
		echo $apple->getColor();

		$orange = new Orange();
		$orange->setColor("Orange");		
		$orange->eat();
		echo $orange->getColor();

		echo "<br><br>---------- Static keyword -----------<br><br>";
		/*
			- static keyword defines static properties and static methods.
			- A static property or static method of a class can be accessed without creating an object of that class.
			- A static property or method is accessed by using the scope resolution operator (::)
			- if you want to access static property inside a static function then you need to use self keyword.
		*/

		class Abc {
			static $myStaticProperty = 20;

			static function myStaticFunction(){
				echo "<br>Hey, I am a static function!<br>";
				echo self::$myStaticProperty;
			}
		}

		echo Abc::$myStaticProperty;
		echo "<br>";
		echo Abc::myStaticFunction();

		echo "<br><br>---------- Static keyword -----------<br><br>";
		/*
			- final keyword defines methods that cannot be overriden in child class
			- final keyword can be used with the functions or the classes
			- final classes cannot be inherited.
		*/

		class myClass {
			final function myFinalFunction(){
				echo "<br>Final Function in the Parent Class.<br>";
			}
		}

		class myClass2 extends myClass {
			// function myFinalFunction(){
			// 	echo "<br>My final function inside Child Class.<br>";
			// }
		}

		// $obj = new myClass2();
		// $obj->myFinalFunction(); ERROR

		final class mFinalClass {

		}

		// ERROR: Fatal error: Class subClass may not inherit from final class (mFinalClass)
		// class subClass extends mFinalClass{
		// }

		$myObject = new mFinalClass();

		$getRecordQuery = "SELECT * FROM students";


	?>

</body>
</html>