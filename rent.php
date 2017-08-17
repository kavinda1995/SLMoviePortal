<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
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

	<form class="rent-form" action="add-acl.php" method="POST">
		<label>Credit Card Number</label>
		<input type="text" name="cardno" class="rent-input">
		<br><br><br>

		<label>CSV</label>
		<input type="text" name="cardno" class="rent-input">
		<br><br><br>

		<label>Expiry Date</label>

       	<?php include('./import/select.php'); ?>

       	<br>

       	<a href='rent.php'><input type='submit' name='read' id='rentbtn' class='btn3' value='RENT'></a>
	</form>
</div>
</body>
</html>