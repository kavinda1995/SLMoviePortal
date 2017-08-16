<?php

require ('db_con.php');

?>
<html>
    <head>
        <title>SL Movie Club</title>

        <?php include('./import/css.php'); ?>
    </head>
    <body>
        <?php include('./import/nav.php'); ?>
        <?php include('./import/slider.php') ;?>
        <div class="container">
            <div class='movie-list'>
                <?php


                $query = "SELECT * FROM movies LIMIT 3";

                $req = mysqli_query($conn,$query);

                foreach ($req as $row) {
                    $movie = $row['movie_name'];
                    echo "<div class='movie-item'>
                            <div class='movie-thumb'>
                                <img class='movie-img' src='"; echo $row['movie_image']; echo "'>
                            </div>
                            <div class='movie_desc'>
                                <h1>";echo $row['movie_name'];echo"</h2>
                                <a href='readmore_data.php?mname=$movie'><input class='addmvbtn' type='button' name='rmore' value='Read More'></a>
                            </div>
                </div>";
                }

                ?>
            </div>
        </div>


        <?php include('./import/js.php'); ?>
    </body>
</html>