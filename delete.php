<?php

	require 'database.php';

	$id = $_POST['delete-record-id'];

	$query = "DELETE FROM employees WHERE id = {$id}";

	$statement = $pdo->prepare($query);

	$statement->execute();

	header('Location: index.php');