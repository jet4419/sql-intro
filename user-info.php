<?php

session_start();

if ($_SESSION['email']) {
	echo 'Welcome to the page';
	echo '<br>';
	echo $_SESSION['name'];
} else {
	echo 'Unauthorized access';
}

