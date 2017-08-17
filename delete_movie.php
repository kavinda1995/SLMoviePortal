<?php
	require("db_con.php");
	
	$movie = $_GET['mname'];

	$sql = "DELETE FROM movies WHERE movie_name = '$movie'";

	$res = mysqli_query($conn,$sql);

	if(!$res){
		echo "Error in Deletion";
	}else{
		echo "<script>
				alert(\"Movie Deleted.\");
				//load the movie page again
				window.location = \"addmovie.php\";
			</script>";
	}
?>