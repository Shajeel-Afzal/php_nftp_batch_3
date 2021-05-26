<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		echo "<br><br>----------- $_COOKIES ----------<br><br>";

		/*
			- They work just like Sessions but on Browser side
			- not used for storing sensitive informatoin.
			- setcookie(
				name, (use to specify the cookie name)
				value, (whatever we want to store)
				expire, (In seconds)

					time() function gives current
					* 86400 * 30

				path,

					if path is '/', cookie will be available on the entire website.

					if path is '/about/' then the cookie will be available in the about directory only.

				domain, 

					example.com

				secure, 

					default value is false.

				httponly

					default value is false.
			);
			- only name parameter is required, everything else is option. 

		*/

		$name = "Shajeel Afzal";
		setcookie("user", $name, time() + (86400 * 30), '/');

		if(isset($_COOKIES['user'])){
			echo $_COOKIES['user'];;
		} else {
			echo "Cookie does not exist.";
		}

		echo "<br><br>----------- File Management ----------<br><br>";

		/*
			- CRUD in files.
			- fopen function is used to open the file.
			- fopen(
				fileName <----- name of the file.
				mode <----- file opening mode.
			);
			- different modes that can be used:
				r used for reading the files only
				w is used for writing the files
		*/

		/*
			- ./ means the current directory
			- ../ means move it back to the parent directory
			- ./folder_name/folder_name
		*/
		$fileName = "file.txt";
		$myFile = fopen($fileName, "w");

		$textToBeSaved = "Writing text to the file.\n";

		fwrite($myFile, $textToBeSaved);
		fwrite($myFile, "New Text.\n");

		fclose($myFile);

		$myFile = fopen($fileName, "a");
		// a means append.
		fwrite($myFile, "Adding a new String.\n");
		fclose($myFile);

		/*
		
			Write a PHP program which takes Name, Email, Domain (Technical, Non-Technical, Creative), Age from the user (through an HTML form) and save inside a .txt file through PHP.
	
		*/

		echo "<br><br>----------- Reading Files ----------<br><br>";

		/*
			- file() function is used to read entire file.
			- returns an array
		*/

		$fileContent = file($fileName);
		foreach ($fileContent as $line) {
			echo $line." ";
		}

		$numberOfLines = count($fileContent);
	?>

</body>
</html>