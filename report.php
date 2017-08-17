	<?php
		require 'db_con.php';

		$tot_sales = 0;

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
		<title>Report | SL Movie Portal</title>
		
		<?php include('./import/css.php'); ?>
	    <?php include('./import/profile.php'); ?>   
	    
	</head>
	<body>
	<?php include('./import/nav.php'); ?>
			<center><p id="backhome"><a href="admin.php"><b><</b> BACK TO HOME</a></p></center>
			    <div class='wrapper'>
			    <?php
			    	$sql = "SELECT * FROM sales";

					$res = mysqli_query($conn,$sql);

			    	foreach($res as $row){
			    		$tot_sales = $tot_sales + $row['value'];
			    	}
			    	echo "</br><div style='display : block; margin : auto; background-color :#b4b6b8; width : 50%; border-radius : 10px; padding : 5px;'><h2>Total Income From Movie Rental : </h2><h1>$tot_sales</h1></div>";
			    ?>
			   	<h1 style="color : whitesmoke; padding-top: 20px;"><u>Movie Sales Report</u></h1>
			    <!-- <img src='./images/user1.png'><br><br> -->
			    <table border=1 border style="color:whitesmoke; padding-left: 0px; font-size: 18px;" width="100%" align="center">
						<th style="font-size: 24px;">Movie Name</th>
						<th style="font-size: 24px;">Customer Name</th>
						<th style="font-size: 24px;">Price</th>
			<?php

					foreach ($res as $row){


				echo "<div class='bio' style='color : whitesmoke;'>
					
					  	<tr>
					  		<td><i>";
					  		echo $row['movie_name']; echo"
					  		</i></td>
					  		<td><i>";
					  		echo $row['username']; echo"
					  		</i></td>
					  		<td><i>";
					  		echo "RS : ".$row['value']; echo"
					  		</i></td>
						</tr>";
	    }
	    echo "
	    </table>
				</div>
	        </div>
	        ";

	?>    
	</body>
	</html>
