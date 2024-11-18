<?php

$email = 'curiosojet@gmail.com';
$password = 'password';

$formEmail = $_POST['email'];
$formPassword = $_POST['password'];

if ($email === $formEmail && $password === $formPassword) {
	session_start();

	$_SESSION['email'] = $email;
	$_SESSION['name'] = 'Jet';
	echo $_SESSION['email'];
	echo $_SESSION['name'];
} else {
	echo 'Invalid credentials';
}


