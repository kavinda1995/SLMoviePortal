<?php
	require('db_con.php');

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    $username = $_SESSION['username'];
    $movie = $_SESSION['movie'];

    $add_acl_sql = "INSERT INTO `acl` (`username`, `movie_name`) VALUES ('$username', '$movie')";


    $acl_res = mysqli_query($conn,$add_acl_sql);

    if(!$acl_res){
    	"Error in Insertion";
    }else{
    	echo "<script>
				alert(\"Thank you for renting the Movie. You can watch it now\");
				//load the movie page again
				window.location = \"readmore_data.php?mname=$movie\";
			</script>";
    }

?>