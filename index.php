<?php

require 'database.php';

$statement = $pdo->prepare('SELECT * FROM users');

$statement->execute();

$users = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Address</th>
		</tr>
			<?php 
				foreach ($users as $user) {
					echo '<tr>';
					echo "<td>{$user['first_name']}</td>";
					echo "<td>{$user['last_name']}</td>";
					echo "<td>{$user['age']}</td>";
					echo "<td>{$user['address']}</td>";
					echo '</tr>';
				}
			?>
	</table>
</body>
</html>