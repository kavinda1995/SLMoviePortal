<?php
	require('db_con.php');

    $value = 500;

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    $username = $_SESSION['username'];
    $movie = $_SESSION['movie'];

    $add_acl_sql = "INSERT INTO `acl` (`username`, `movie_name`) VALUES ('$username', '$movie')";

    $add_sales = "INSERT INTO sales VALUES ('$movie','$username','$value')";

    // echo $add_sales;die();

    $acl_res = mysqli_query($conn,$add_acl_sql);

    $sales_res = mysqli_query($conn,$add_sales);


    if(!$acl_res && !$sales_res){
    	echo "<script>
                alert(\"You have already rented this movie. Please go to the movie and watch\");
                //load the movie page again
                window.location = \"readmore_data.php?mname=$movie\";
            </script>";
    }else{
    	echo "<script>
				alert(\"Thank you for renting the Movie. You can watch it now\");
				//load the movie page again
				window.location = \"readmore_data.php?mname=$movie\";
			</script>";
    }

?>