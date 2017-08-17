<?php
	require ('db_con.php');

	$username = $_POST['username'];
	$name = $_POST['fname'];
	$nic = $_POST['nic'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$contact = $_POST['contact'];

	if ($password == $cpassword) {
		$password = md5($password);
		$query1 = "SELECT * FROM users WHERE username='$username'";
		$query_run1 = mysqli_query($conn , $query1);

		if (mysqli_num_rows($query_run1)>0) {
			// echo "User already exists";
			echo "<script>
                alert(\"User already exists\");
                //load the movie page again
                window.location = \"login.php\";
            </script>";

		}else {
			$querycus = "INSERT INTO customer VALUES ('$username','$name','$email','$contact','$nic')";
			$query_run2 = mysqli_query($conn , $querycus);
			header("Location: login.php?errormsg=1&flag=1");

			$queryusr = "INSERT INTO users VALUES ('$username','$password')";
			$query_run3 = mysqli_query($conn , $queryusr);
			echo "User Registered in users!";
		}
	}
	?>