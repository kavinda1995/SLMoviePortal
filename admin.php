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
        <div class="container">
           
                <div class="taskbox">
                    <img src="./images/movies.png" class="task-image"><br>
                    <a href="#"><h2>Movies</h2></a>
                    <p></p>
                    <br>
                    <a href="addmovie.php"><input type="button" class="btn2" id="enter-btn" value="ENTER"></a>
                </div>
                <div class="taskbox">
                    <img src="./images/reports.png" class="task-image"><br>
                    <a href="#"><h2>Reports</h2></a>
                    <p></p>
                    <br>
                    <a href="add-fac-admin.php"><input type="button" class="btn2" id="enter-btn" value="ENTER"></a>
                </div>
                <div class="taskbox">
                    <img src="./images/admin1.png" class="task-image"><br>
                    <a href="#"><h2>Profile</h2></a>
                    <p></p>
                    <br>
                    <a href="user-profile.php"><input type="button" class="btn2" id="enter-btn" value="ENTER"></a>
                </div>

        </div>


    
    </body>
</html>