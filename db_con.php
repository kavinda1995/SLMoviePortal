<?php
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'movieportal';

	$conn = mysqli_connect($server,$username,$password,$db);
	if (!$conn){
		die(mysqli_connect_error.'Database connection error!');
	}
?>