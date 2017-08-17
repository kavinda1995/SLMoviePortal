<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if (isset($_SESSION['username'])){
       
    }else{
        echo "<script>
                alert(\"You dont have access here.\");
                //load the movie page again
                window.location = \"index.php\";
            </script>";
    }

	$mname = $_GET['mname'];

	$_SESSION['movie'] = $mname;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rent | SL Movie Club</title>      

        <?php include('./import/css.php'); ?>
        
        <?php include('./import/nav.php'); ?>

       	<?php include('./import/rent.php'); ?>
</head>
<body>

<div class="rentdiv">
	<h2 style="color : whitesmoke; text-align: center;">You will be charged RS: 500/= for the renting of this movie</h3>
	<form class="rent-form" action="add-acl.php" method="POST">
		<label>Credit Card Number</label>
		<input type="number" name="cardno" class="rent-input" required="" maxlength="12">
		<br><br><br>

		<label>CSV</label>
		<input type="number" name="cardno" class="rent-input" required="" maxlength="3">
		<br><br><br>

		<label>Expiry Date</label>

       	<?php include('./import/select.php'); ?>

       	<br>

       	<a href='rent.php'><input type='submit' name='read' id='rentbtn' class='btn3' value='RENT'></a>
	</form>
</div>
</body>
</html>