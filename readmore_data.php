<?php

    $mname = $_GET['mname'];
	// echo $mname;die();
	require('db_con.php');
		
    $movie = "SELECT * FROM movies WHERE movie_name = '$mname'";

	$res = mysqli_query($conn,$movie); 

    // $movie = mysqli_fetch_array($res);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Read More | SLMoviePortal</title>

        <?php include('./import/read.php'); ?>        

        <?php include('./import/css.php'); ?>
        
        <?php include('./import/nav.php'); ?>
</head>
<body>

<?php 

echo "<div class='container'>";
            
    foreach ($res as $row){
        $mname = $row['movie_name'];
        echo "       
            
        
            <div class='leftdiv'>
           		<div class='filmpic'>
                     <img src='"; echo $row['browse_image']; echo "'>
                    <a href='rent.php?mname=$mname'><input type='submit' name='read' id='rentbtn' class='btn3' class='form-input' value='RENT'></a>
                    <a href='watch.php?mname=$mname'><input type='submit' name='read' id='watchbtn' class='btn3' class='form-input' value='WATCH'></a>
                    
                </div>
        	</div>
            </div>
                
            <div class='rightdiv'>
                <div class='movtitle'>"; echo $row['movie_name']; echo "</div>
                <div class='movdiv'><img src='"; echo $row['movie_image']; echo "'>"; echo "</div>
                <div class='mvideo'>";
                    echo $row['embed_link']; echo "
                </div>
                    <div class='movtab'>
                        <table border='1'>
                            <tr>
                                <th>Type</th>
                                <th>Pricing</th>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td>123</td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td>123</td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td>123</td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td>123</td>
                            </tr>                                                                       
                        </table>
                    </div>
                
           ";
        	}

echo " </div>";
?>

</body>
</html>