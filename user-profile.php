<?php
	session_start();
	require 'db_con.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile | StudentMate</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<?php include('./import/css.php'); ?>
    <?php include('./import/profile.php'); ?>   
    
</head>
<body>
<?php include('./import/nav.php'); ?>
		<center><p id="backhome"><a href="index.php">BACK TO HOME</a></p></center>
		    <div class='wrapper'>
		   
		    <img src='./images/user1.png'><br><br>

			<div class='bio'>
				<table border=0>
				  	<tr>
						<td class='field'>Username : </td>
						<td class='field'></td>
					</tr>
					<tr>
						<td class='field'>Full Name : </td>
						<td class='field'></td>
					</tr>
					<tr>
						<td class='field'>Email : </td>
						<td class='field'></td>
					</tr>
					<tr>
						<td class='field'>Mobile No : </td>
						<td class='field'></td>
					</tr>
					<tr>
						<td class='field'>NIC: </td>
						<td class='field'></td>
					</tr>
				</table>
			</div>
        </div>     
</body>
</html>