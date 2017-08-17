<?php
	require('db_con.php');
	//check the session
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	
	//check the ACL
	$username = $_SESSION['username'];
	$mname = $_GET['mname'];

	//checking the ACL from the table whether the user get the privilages
	//all movies for admin
	if ($username == 'admin'){
		//give the permission
		echo "<script>console.log('Access Granted for Admin')</script>;";
	}
	else{
		//check the table for the currents user
		$acl_sql = "SELECT * FROM acl WHERE username = '$username' AND movie_name = '$mname'";
		$acl_res = mysqli_query($conn,$acl_sql);

		if (mysqli_num_rows($acl_res) > 0){
			echo "<script>console.log('Access Granted for User')</script>;";
		}else{
			echo "<script>
				alert('You dont have access to watch the movie. Please rent it.');
				//load the previous page again
				window.history.back();
			</script>";
		}
	}



	$sql = "SELECT * FROM movies WHERE movie_name = '$mname'";

	$res = mysqli_query($conn,$sql);

	$movie = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
	<title>title | SL Movie Club</title>

    <?php include('./import/css.php'); ?>
  
</head>
<body>
	<?php include('./import/nav.php'); ?>
	<center><h1><?php echo $movie['movie_name'];?></h1></center>
	<div align="center">
		<?php
			echo $movie['embed_link'];
		?>
	</div>
</body>
</html>