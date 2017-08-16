<?php

require ('db_con.php');

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
	<form class="add-form" method="POST" action="addmovie.php">
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
		
		<input type='file' name ='movie_image' class="inputimg">
		<br><br>
		<label style="margin-left: 65px;">Browse Image</label>
		
		<input type='file' name ='browse_image' class="inputimg">
		<br><br>


		<a href='addmovie.php'><input type='submit' name='add' id='addmvbtn' class='btn3' value='ADD MOVIE'></a><br><br><br>
		<a href='addmovie.php'><input type='button' name='reset' id='resetbtn' class='btn3' value='RESET'>
		</a>
	</form>


<?php


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

	
	$mov = "INSERT INTO movies (`movie_name`,`movie_year`,`movie_genre`,`movie_director`,`movie_desc`) VALUES ('$movie_name','$movie_year','$movie_genre','$movie_director','$movie_desc')";
	$res = mysqli_query($conn , $mov);
	
	if ($res) {
		echo "<div id='insertmsg'><p>Film is added to the database</p></div>";
	} else  {
		echo "<div id='errormsg'><p>Error in uploading!</p></div>";
	}
}
echo "</div>";
?>
<?php

	$q = "SELECT movie_name FROM movies ORDER BY movie_id DESC LIMIT 10";

	$qrun = mysqli_query($conn,$q);

echo "<div class='film-div'>
	<h2>MOVIE LIST</h2>";

foreach($qrun as $row) {

echo "	
	<form action='add-movie.php' method='POST'><ul id='div-row'>
		<li><a href='#'><p>"; echo $row['movie_name']; echo "</p></a></li>
		<div class='bttns'>
		<li><input type='button' name='update' value='Update' class='btn3' id='upbtn'></li>
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