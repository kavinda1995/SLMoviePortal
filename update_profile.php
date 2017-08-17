<?php
	require 'db_con.php';

	$username = $_GET['username'];

	$sql = "SELECT * FROM customer WHERE username='$username'";

	$res = mysqli_query($conn,$sql);

	$user = mysqli_fetch_array($res);

?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Profile | StudentMate</title>
		
		<?php include('./import/css.php'); ?>
	    <?php include('./import/profile.php'); ?>   
	    
	</head>
	<body>
	<?php include('./import/nav.php'); ?>
			<center><p id="backhome"><a href="index.php"><b><</b> BACK TO HOME</a></p></center>
			    <div class='wrapper'>
			   
			    <img src='./images/user1.png'><br><br>
			<?php
				$sql = "SELECT * FROM customer WHERE username='$_SESSION[username]'";

				$res = mysqli_query($conn,$sql);

				if($res){
					while($row = mysqli_fetch_row($res)){
						// var_dump($row);
				echo "<div class='bio' style='color : whitesmoke;'>
				<form action='updateUser.php' method='POST'>
					<table border=0>
					  	<tr>
							<td class='field'>Username : </td>
							<td class='field'><input type='text' value='$row[0]' readonly name='username'></td>
						</tr>
						<tr>
							<td class='field'>Full Name : </td>
							<td class='field'><input type='text' value='$row[1]'  name='fullName'></td>
						</tr>
						<tr>
							<td class='field'>Email : </td>
							<td class='field'><input type='text' value='$row[2]'  name='email'></td>
						</tr>
						<tr>
							<td class='field'>Mobile No : </td>
							<td class='field'><input type='text' value='$row[3]'  name='mobile_no'></td>
						</tr>
						<tr>
							<td class='field'>NIC: </td>
							<td class='field'><input type='text' value='$row[4]' name='nic'></td>
						</tr>
						<tr>
							<td><input class='profilebtn' type='submit' value='Update Profile'></td>
						</tr>
					</table>
				</div>
	        </div> ";
	    }
	}
	?>    
	</body>
	</html>