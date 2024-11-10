<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	require 'database.php';

	$name = $_POST['name'];
	$age = $_POST['age'];
	$address = $_POST['address'];

	$query = 'INSERT INTO employees (name, age, address) VALUES (:name, :age, :address)';
	$params = [
		'name' => $name,
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
	<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>
<div class="mt-4">
	<h2 class="text-center font-medium text-3xl mb-4">Add new employee</h2>
	<form method="POST" class="max-w-sm mx-auto">
		<div class="mb-5">
			<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
			<input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  />
		</div>
		<div class="mb-5">
			<label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
			<input type="number" name="age" id="age" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  />
		</div>
		<div class="mb-5">
			<label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
			<input type="text" name="address" id="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  />
		</div>
		<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
	</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>