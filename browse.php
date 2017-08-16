<?php
	require('db_con.php');

	$movie_list = "SELECT * FROM movies LIMIT 3";

	$res = mysqli_query($conn,$movie_list);
    
?>
<html>
    <head>
        <title>Browse | SL Movie Club</title>    

        <?php include('./import/css.php'); ?>
        <?php include('./import/browser.php'); ?>
    </head>
    <body>
        <?php include('./import/nav.php'); ?>
    </head>
    <body>

        <div class="container">
        <center><h1 style="color:white;">SEARCH FOR MOVIES</h1></center>
            <div class="searchbar">
                <div class="searchform">
                    <form method="POST" action="search.php">
                        <!-- <label id="filmname">Search by name</label><label id="filmgenre">Select Genre</label><label id="filmyear">Search by year</label><br> -->
                        <input type="text" name="name" class="form-input" placeholder="Search By Name">
                        <select name="genre" class="form-input">
                            <option value="">Select Genre</option>
                            <option>Animation</option>
                            <option>Action</option>
                            <option>Romance</option>
                            <option>Horror</option>
                            <option>Fiction</option>
                        </select>
                        
                        <select name="year" class="form-input">
                            <option value="">Select Year</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                            <option>2011</option>
                            <option>2010</option>
                            <option>2009</option>
                            <option>2008</option>
                            <option>2007</option>
                            <option>2006</option>
                            <option>2005</option>
                            <option>2004</option>
                            <option>2003</option>
                            <option>2002</option>
                            <option>2001</option>
                            <option>2000</option>
                            <option>1999</option>
                            <option>1998</option>
                        </select>
                        <input type="submit" class="form-input" id="sbtn" value="Search">
                    </form>
                </div>
            </div>
            <?php
            
            	foreach ($res as $row){
                    $movie = $row['movie_name'];
            		echo "
                        <div class='filmdata'>
                			<div class='filmpic'>
    		                    <img src='"; echo $row['browse_image']; echo"'' class='movie-img'>
    		                </div>
    		                <div class='filmdes'>
    		                    <h1>";echo $row['movie_name']; echo "</h1>
    		                    <p>";echo $row['movie_desc']; echo "</p>
    		                    <a href='readmore_data.php?mname=$movie'><input class='btn-readmore' type='button' name='rmore' value='Read More'></a>
    		                </div>
                        </div>            
            		";
            	}

            ?>
        </div>
    </body>
</html>