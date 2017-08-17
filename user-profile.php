	<?php
		require 'db_con.php';
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
				echo "<div class='bio' style='color : whitesmoke;'>
					<table border=0>
					  	<tr>
							<td class='field'>Username : </td>
							<td class='field'>$row[0]</td>
						</tr>
						<tr>
							<td class='field'>Full Name : </td>
							<td class='field'>$row[1]</td>
						</tr>
						<tr>
							<td class='field'>Email : </td>
							<td class='field'>$row[2]</td>
						</tr>
						<tr>
							<td class='field'>Mobile No : </td>
							<td class='field'>$row[3]</td>
						</tr>
						<tr>
							<td class='field'>NIC: </td>
							<td class='field'>$row[4]</td>
						</tr>
						<tr>
							<td><button class='profilebtn'>Update Profile</button></td>
							<td><button class='profilebtn'>Deactivate Profile</button></td>
						</tr>
					</table>
				</div>
	        </div> ";
	    }
	}
	?>    
	</body>
	</html>
