<?php

$host = 'localhost';
$port = 3306;
$dbName = 'employees';

// Mysql Account
$username = 'root';
$password = '';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};";

try {
	$pdo = new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch(PDOException $e) {
	echo "Connection Failed: {$e->getMessage()}";

	$e->getMessage();
}