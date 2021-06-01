<?php

	require_once 'credentials.php';

?>

<!DOCTYPE html>
<html>
	 <head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	    <title>Hello, world!</title>
  	</head>
	<body>

		<?php

			echo "Program Execution Started.<br><br>";

			echo "Building connection with the database!.<br><br>";
			$dbConnection = new mysqli(
				$hostName, 
				$userName, 
				$password, 
				$databaseName
			);

			if($dbConnection->connect_error){
				echo $dbConnection->connect_error;
				die();
			}

			echo "<br><br>Query Database and show results!";

			$queryStudents = "SELECT * FROM ".$studentsTable;

			$queryResult = $dbConnection->query($queryStudents);

			if(!$queryResult){
				echo "<br><br>Query Execution Failed. Something went wrong.<br><br>";
				die();
			}

			echo "<br><br>Query Executed Successfuly!";
			echo "<br><br>Numbe of Rows: ".$queryResult->num_rows;

			echo "<br><br><table class='table table-striped table-dark'>";

			for ($i=0; $i < $queryResult->num_rows; $i++) { 
				$queryResult->data_seek($i);
				$row = $queryResult->fetch_assoc();
				echo "<tr>";

				echo "<td>".$row['id']."</td><td>".$row['Name']."</td><td>".$row['Email']."</td><td>".$row['Domain']."</td>";	
				
				echo "</tr>";			
			}

			echo "</table>";

		?>

		
		<!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		

	</body>
</html>




