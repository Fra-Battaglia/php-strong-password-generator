<?php 
	include __DIR__ .'/functions.php'; 

	session_start();
	$_SESSION['length'] = $_GET['length'];

	if(empty($_SESSION['length'])) {
		header("Location:./index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<h1><?php echo generate_password($_GET["length"]) ?></h1>
	</body>
</html>