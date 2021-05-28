<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		/*
			- Access Modifiers

			public:		
			it is accessible within the class, outside the class and in the inherited class

			private: 
			It is accessible within the class that creates it and not in the inherited class.

			protected: 
			It is accessible within the class and in the inherited class.

		*/

		class Person {
			// member variables
			private $name;  // not accessible in the child class 
			
			protected $age; // accessible within the child class but not through objects
			
			public $height; // accessible within the child class and through objects			

			// methods / class functions
			public function setHeight($h){
				$this->height = $h;
			}

			public function getHeight(){
				return $this->height;
			}

			public function setAge($a){
				$this->age = $a;
			}			

			public function getAge(){
				return $this->age;
			}

			public function setName($n){
				$this->name = $n;
			}

			public function getName(){
				return $this->name;
			}
		}

		class Tecaher extends Person{

		}

		class Staff extends Person{

		}

		class Student extends Person implements StudentInterface{
			private $rollNumber;

			public function setRollNumber($rn){
				$this->rollNumber = $rn;
			}

			public function getRollNumber(){
				return $this->rollNumber;
			}

			public function printValues(){
				echo $this->height;
				echo "<br>";
				echo $this->age;
				echo "<br>";
				// echo $this->name; // we will get an error since we are trying to access the private field.
			}

			public function markAttendance(){
				echo "<br>Mark Attendance<br>";
			}

			public function takeExame(){
				echo "<br>Take Exam<br>";
			}

			public function payFee(){
				echo "<br>Pay Fee<br>";	
			}

			public function checkResult(){
				echo "<br>Check Result<br>";	
			}
		}		

		$zahid = new Student();
		$zahid->setHeight(5.8);
		echo $zahid->getHeight();

		echo "<br><br>";

		$zahid->setAge(25);
		echo $zahid->getAge();

		echo "<br><br>";

		$zahid->setName("Zahid");
		echo $zahid->getName();

		echo "<br><br>";

		$zahid->printValues();
		
		echo "<br><br> --------- interfaces ----------- <br><br>";
		/*
			- Interface specifies list o methods that a class must implement.
			- Interface itself does not container any method implementation.
			- interface keyword is used to create an interface class.
			- implements keyword is used in a class to implement an interface.
			- A class can implmenet multiple interfaces
			- An interface can inherit another inteface by using the extends keyword.
		*/

		interface PersonInterface(){
			public function speak();
			public function sleep();
			public function walk();
		}

		interface StaffInterface(){
			public function hireTeacher();
			public function giveSalary();
			public function fireTeacher();
			public function enrollStudent();
		}

		interface TeacherInterface{
			public function calculateMarks();
			public function checkPapers();			
		}

		interface StudentInterface{
			public function markAttendance();
			public function takeExame();
			public function payFee();
			public function checkResult();
		}

	?>

</body>
</html>