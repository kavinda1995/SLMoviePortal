<?php
	include('db_con.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
	// echo $password;
	// die();
	//turning password into md5
	$password = md5($password);

	$userSQL = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

	$res = mysqli_query($conn,$userSQL);
	
	if (mysqli_num_rows($res) > 0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['logged'] = 'TRUE';

		if ($_SESSION['username'] == 'admin'){
			header("Location: admin.php");
		}else{
			header("Location: index.php");
		} 
	}else{
		header("Location: login.php?error=1&flag=1"); //error is for incorrect username or password, flag is for navbar
	}
?>