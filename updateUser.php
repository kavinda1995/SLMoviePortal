<?php
	var_dump($_POST);

	require("db_con.php");

	$username = $_POST['username'];
	$fullName = $_POST['fullName'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile_no'];
	$nic = $_POST['nic'];

	$sql = "UPDATE customer SET name = '$fullName', email = '$email', contactNo = '$mobile', NIC = '$nic' WHERE username = '$username'";

	$res = mysqli_query($conn,$sql);

	if (!$res){
		echo "Not Updated";
	}else{
		echo "<script>
                alert(\"Profile Updated\");
                //load the movie page again
                window.location = \"user-profile.php\";
            </script>";
	}
?>