<?php

require ('db_con.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if ($_SESSION['username'] == 'admin'){
       
    }else{
        echo "<script>
                alert(\"You dont have access here.\");
                //load the movie page again
                window.location = \"index.php\";
            </script>";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Movie | SL Movie Club</title>      


        <?php include('./import/css.php'); ?>
        
        <?php include('./import/nav.php'); ?>

       	<?php include('./import/addmovie.php'); ?>
  
</head>
<body>

<div class="add-div">
	<form class="add-form" method="POST" action="add_movie.php" enctype="multipart/form-data">
		<label>Movie Name</label><br>
		<div class='form-input'>
			<input type='text' name='movie_name' placeholder="Movie Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Movie Name'" class='form-input2' required="required">
		</div>
		<br><br>
		<label>Year released</label><br>
		<div class='form-input'>
			<input type='text' name='movie_year' placeholder="Year" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Year'" class='form-input2' required="required">
		</div>
		<br><br>
		<label>Genre of Movie</label><br>
		<div class='form-input'>
		<select name="movie_genre" class="form-input" id="movgenre">
            <option value="">Select Genre</option>
            <option>Animation</option>
            <option>Action</option>
            <option>Romance</option>
            <option>Horror</option>
            <option>Fiction</option>
        </select>              
		</div>
		<br><br>
		<label>Movie Director</label><br>
		<div class='form-input'>
			<input type='text' name='movie_director' placeholder="Director" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Director'" class='form-input2' required="required">
		</div>
		<br><br>
		<label>Short description of movie</label><br>
		<div class='form-input'>
		<textarea rows="5" cols="50" name='movie_desc' placeholder="Movie description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Movie description'" class='form-input2' required="required"></textarea>
		</div>
		<br><br><br>
		<label style="margin-left: 80px;">Movie Image</label>
		
		<input type='file' name ='movie_image' id="movie_image" class="inputimg">
		<br><br>
		<label style="margin-left: 65px;">Browse Image</label>
		
		<input type='file' name ='browse_image' id="browse_image" class="inputimg">
		<br><br>


		<a href='addmovie.php'><input type='submit' name='add' id='addmvbtn' class='btn3' value='ADD MOVIE'></a><br><br><br>
		<a href='addmovie.php'><input type='button' name='reset' id='resetbtn' class='btn3' value='RESET'>
		</a>
	</form>

	<?php

	echo "</div>";

	$q = "SELECT movie_name FROM movies ORDER BY movie_id DESC LIMIT 10";

	$qrun = mysqli_query($conn,$q);

		echo "<div class='film-div'>
			<h2>MOVIE LIST</h2>";

		foreach($qrun as $row) {
			$mname = $row['movie_name'];
		echo "	
			<form action='add-movie.php' method='POST'><ul id='div-row'>
				<li><a href='#'><p>"; echo $row['movie_name']; echo "</p></a></li>
				<div class='bttns'>
				<li><a href='update_movie.php?mname=$mname'><input type='button' name='update' value='Update' class='btn3' id='upbtn'></a></li>
				<li><input type='button' name='delete' value='Delete' class='btn3' id='delbtn'></li></div>
			</ul></form>
		";
		}
		echo "</div>";

		if (isset($_POST['delete'])) {

		$movie_id = $_POST['delete'];

		$sql1 = "DELETE FROM movies WHERE movie_id='$movie_id'";

		$res1 = mysqli_query($conn,$sql1);

		if($res1){
			echo "success";
		}
		else {
			echo "error";
		}
		}

		?>
</body>
</html>