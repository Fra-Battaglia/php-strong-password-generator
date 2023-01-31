<?php include __DIR__ .'/functions.php'; ?>
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
			<input type="number" name="length">
			<button type="submit">Invia</button>
		</form>
		<h1><?php echo generate_password($_GET["length"]) ?></h1>
	</body>
</html>