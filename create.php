<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	require 'database.php';

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$age = $_POST['age'];
	$address = $_POST['address'];

	$query = 'INSERT INTO users (id, first_name, last_name, age, address) VALUES (:id, :first_name, :last_name, :age, :address)';
	$params = [
		'id' => 4,
		'first_name' => $firstName,
		'last_name' => $lastName,
		'age' => $age,
		'address' => $address
	];

	$statement = $pdo->prepare($query);

	$statement->execute($params);

	header('Location: index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST">
		<div>
			<label>First Name</label>
			<input type="text" name="firstName" id="">
		</div>
		<div>
			<label>Last Name</label>
			<input type="text" name="lastName" id="">
		</div>
		<div>
			<label>Age</label>
			<input type="number" name="age" id="">
		</div>
		<div>
			<label>Address</label>
			<input type="text" name="address" id="">
		</div>
		<input type="submit" value="Submit">
	</form>
</body>
</html>