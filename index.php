<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Sessions</title>

</head>
<body>

<main>
	<section id="welcome-section">

		<h1>Hi <?=$_SESSION['name'] ?? 'Guest'?>, welcome to PHP lecture! </h1>

	</section>
</main>

</body>
</html>
