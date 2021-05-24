<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		// -----------if else -----------
		/*
			if(condition){
				code when condition is true
			} else {
				code when condition is false
			}
	
		*/

		$age = 31;

		if($age > 30) {
			echo "Sorry, you're not eligible for admission.";		
		} else if($age == 0){
			echo "Sorry, age can't be zero";
		} else if($age < 0) {
			echo "Age can't be less than 0.";
		} else {
			echo "Congratulations you're eligible for admission.";
		}

		// ----------- Loops -----------
		/*
			- used for executing code repeatedly
			- while, for, do-while, foreach				
		*/
		// ----------- While -----------

		/*
			while(condition){
				code to be executed.
			}
		*/

		$limit = 1;
		while($limit <= 500){

			if($limit == 10) {
				echo "<br>I don't want to print anything when limit is 10";
			} else {
				echo "<br>NFTP ".$limit;	
			}
			
			$limit++;
		}

		// ----------- For Loops -----------

		/*
			for(statement 1; statement 2; statement 3){
				// statements
			}

			"statement 1 > statement 2 > loop body > statement 3"

			statement 1: executes before the loop 
			starts

			statement 2: defines the condition
			for running the loop.

			statement 3: executes after every loop

		*/

		echo "<br><br>";

		for($i = 0; $i < 10; $i++){
			echo "<br>".$i;
		}

		echo "<br><br>";

		$y = 0;
		for(print("Statement # 1<br>"); $y < 10; print("Statement # 3<br> ")){
			echo "<br>".$y;
			$y++;
		}

		// ----------- Do While Loop -----------
		/*
			do{
				statements 
			}while(condition);

			- It is executed at least one time, even if the condition if false
		*/
			echo "<br><br>";
			$z = 0;
			do{
				echo "<br>".$z;
				$z++;
			}while ($z < 10);

		// ----------- Foreach Loop -----------
		/*
			- used with arrays usually

			foreach(array as $value){
				code statements
			}

			foreach(array as $key => $value){
				code statements
			}
		*/

		echo "<br><br>";

		$names = array("Muhammad Fahad", "Juwairiah", "Mahnoor");
		foreach($names as $key => $n){
			echo "Name #".$key." ".$n."<br>";
		}
		
	?>

</body>
</html>