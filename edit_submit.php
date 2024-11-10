<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	require 'database.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$address = $_POST['address'];

	// colon sign is for the placeholder. A security prevention to sanitize the input preventing unwanted codes.
	$query = 'UPDATE employees SET name = :name, age = :age, address = :address WHERE id = ' .$id;
	$params = [
		'name' => $name,
		'age' => $age,
		'address' => $address
	];

	$statement = $pdo->prepare($query);

	$statement->execute($params);

	header('Location: index.php');

}