<?php
	require('db_con.php');

	$mname = $_GET['mname'];

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