<?php

require 'database.php';

$id = $_GET['id'];

$query = 'SELECT * FROM users WHERE id = ' . $id;

$statement = $pdo->prepare($query);

$statement->execute();

$user = $statement->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
		<p><strong>First Name:</strong> <?= $user['first_name'] ?></p>
		<p><strong>Last Name:</strong> <?= $user['last_name'] ?></p>
		<p><strong>Age:</strong> <?= $user['age'] ?></p>
		<p><strong>Address:</strong> <?= $user['address'] ?></p>
</body>
</html>