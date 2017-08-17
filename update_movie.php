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

$movie = $_GET['mname'];

$sql = "SELECT * FROM movies WHERE movie_name = '$movie'";

$res = mysqli_query($conn,$sql);

$movie = mysqli_fetch_array($res);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Movie | SL Movie Club</title>      


        <?php include('./import/css.php'); ?>
        
        <?php include('./import/nav.php'); ?>

       	<?php include('./import/addmovie.php'); ?>
  
</head>
<body>

<div class="update-div" style="display: block; margin: auto;">
	<form class="add-form" method="POST" action="updatemovie.php" enctype="multipart/form-data">
		<?php 
		$moviename =  $movie['movie_name']; 
		$movieYear =  $movie['movie_year'];
		$movieDirector =  $movie['movie_director'];
		$movieDesc =  $movie['movie_desc'];
		?>
		<label>Movie Name</label><br>
		<div class='form-input'>
			<input type='text' name='movie_name' value="<?php echo $moviename; ?>" class='form-input2' required="required" readonly>
		</div>
		<br><br>
		<label>Year released</label><br>
		<div class='form-input'>
			<input type='text' name='movie_year' value="<?php echo $movieYear; ?>" class='form-input2' required="required">
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
			<input type='text' name='movie_director' value="<?php echo $movieDirector; ?>" class='form-input2' required="required">
		</div>
		<br><br>
		<label>Short description of movie</label><br>
		<div class='form-input'>
		<textarea rows="5" cols="50" name='movie_desc' placeholder="<?php echo $movieDesc; ?>" class='form-input2' required="required"></textarea>
		</div>
		<br><br><br>
		<label style="margin-left: 80px;">Movie Image</label>
		
		<input type='file' name ='movie_image' id="movie_image" class="inputimg">
		<br><br>
		<label style="margin-left: 65px;">Browse Image</label>
		
		<input type='file' name ='browse_image' id="browse_image" class="inputimg">
		<br><br>


		<a href='updatemovie.php'><input type='submit' name='add' id='addmvbtn' class='btn3' value='UPDATE MOVIE'></a><br><br><br>
		<a href='update_movie.php'><input type='button' name='reset' id='resetbtn' class='btn3' value='RESET'>
		</a>
	</form>

</body>
</html>