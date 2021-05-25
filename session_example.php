<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		echo $_SESSION['name'];
		echo "<br>";
		echo $_SESSION['Domain'];

	?>

</body>
</html>