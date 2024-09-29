<?php

$host = 'localhost';
$port = 3306;
$dbName = 'information_management';
$username = 'root';
$password = '';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
	$pdo = new PDO($dsn, $username, $password);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	// $user = ['name' => 'Jet'];
	// $user['name'];
	echo 'Database connected...';

} catch(PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}