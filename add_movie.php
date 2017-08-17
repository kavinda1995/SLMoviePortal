<?php
var_dump($_POST);
var_dump($_FILES);
require('db_con.php');
?>

<!-- upload the images -->
<!-- For the movie_thumb -->
<?php
$target_dir_movie = "images/movie_thumb/";
$target_file_movie = $target_dir_movie . basename($_FILES["movie_image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file_movie,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["movie_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file_movie)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["movie_image"]["tmp_name"], $target_file_movie)) {
        echo "The file ". basename( $_FILES["movie_image"]["name"]). " has been uploaded.";
       	echo $target_file_movie;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

for the browse_image
<?php
$target_dir_browse = "images/browseimg/";
$target_file_browse = $target_dir_browse . basename($_FILES["browse_image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file_browse,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["browse_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file_browse)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["browse_image"]["tmp_name"], $target_file_browse)) {
        echo "The file ". basename( $_FILES["browse_image"]["name"]). " has been uploaded.";
        echo $target_file_browse;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<!-- add data to the database -->
<?php
if (isset($_POST['add'])) {

	$movie_name = $_POST['movie_name'];
	$movie_year = $_POST['movie_year'];
	$movie_genre = $_POST['movie_genre'];
	$movie_director = $_POST['movie_director'];
	$movie_desc = $_POST['movie_desc'];
	$movie_image = $target_file_movie;
	$browse_image = $target_file_browse;

	// $imagefile = $_FILES['movie_image']['name'];
	// $imagetype = $_FILES['movie_image']['type'];
	// $imagetmp = $_FILES['movie_image']['tmp_name'];

	// $image = move_uploaded_file($imagetmp, "images/imagefile");

	
	$mov = "INSERT INTO movies (`movie_name`,`movie_year`,`movie_genre`,`movie_director`,`movie_desc`,`movie_image`,`browse_image`) VALUES ('$movie_name','$movie_year','$movie_genre','$movie_director','$movie_desc','$movie_image','$browse_image')";

	echo "$mov";
	$res = mysqli_query($conn , $mov);
	
	if ($res) {
		echo "<script>alert('Movie added to the database');</script>";
		header('Location: admin.php');
	} else  {
		echo "<div id='errormsg'><p>Error in uploading!</p></div>";
	}

}
?>