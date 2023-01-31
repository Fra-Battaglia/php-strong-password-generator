<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP Strong Password Generator</title>
	</head>
	<body>
		<form action="./index.php" method="GET">
			<input type="number" name="length" id="">
			<button type="submit">Invia</button>
		</form>

		<?php 
			if (isset($_GET['length'])) {
				$length = $_GET['length'];
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':<>,.?\/";
				$password = substr(str_shuffle($chars), 0, $length);
				echo "La tua password è: $password";
			}
		?>


	</body>
</html>