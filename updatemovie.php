<?php
	require('db_con.php');

	var_dump($_POST);

	$movie_name = $_POST['movie_name'];
	$movie_year = $_POST['movie_year'];
	$movie_genre = $_POST['movie_genre'];
	$movie_director = $_POST['movie_director'];
	$movie_desc = $_POST['movie_desc'];

	$mov = "UPDATE movies SET movie_name = '$movie_name',movie_year = '$movie_year',movie_genre = '$movie_genre',movie_director = '$movie_desc' WHERE movie_name = '$movie_name'";
	echo $mov;
	$res = mysqli_query($conn,$mov);

	if(!$res){
		echo "Error in updating";
		
	}else{
		echo "Done updating";
		header('Location: admin.php');
	}
?>