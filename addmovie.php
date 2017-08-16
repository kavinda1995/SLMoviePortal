<?php

require ('db_con.php');

if (isset($_POST['add'])) {

	$movie_name = $_POST['movie_name'];
	$movie_year = $_POST['movie_year'];
	$movie_genre = $_POST['movie_genre'];
	$movie_director = $_POST['movie_director'];
	$movie_desc = $_POST['movie_desc'];
	// $movie_image = $_POST['movie_image'];

	// $imagefile = $_FILES['movie_image']['name'];
	// $imagetype = $_FILES['movie_image']['type'];
	// $imagetmp = $_FILES['movie_image']['tmp_name'];

	// $image = move_uploaded_file($imagetmp, "images/imagefile");

	
	$mov = "INSERT INTO movies VALUES ('$movie_name','$movie_year','$movie_genre','$movie_director','$movie_desc','$movie_image')";
	$res = mysqli_query($conn , $mov);
	
	if ($res) {
		header("location:add-movie.php");
		echo "<div id='insertmsg'><p>Film is added to the database</p></div>";
	} else  {
		echo "<div id='errormsg'><p>Error in uploading!</p></div>";
	}
}

?>