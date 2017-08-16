<?php

require ('db_con.php');

?>
<html>
    <head>
        <title>SL Movie Club | Register or Login</title>
        <?php include('./import/css.php'); ?>
    </head>
    <body>
        <?php include('./import/nav.php'); ?>
        <div class="register_form" style="color : whitesmoke;">
            <form class="form_reg" action="register.php" method="POST">
                <label>Full Name</label></br>
                <input type="text" name="fname" class="input_fill" required></br></br>
                <label>Email</label></br>
                <input type="email" name="email" class="input_fill" required></br></br>
                <label>User Name</label></br>
                <input type="text" name="username" class="input_fill" required></br></br>
                <label>NIC</label></br>
                <input type="text" name="nic" class="input_fill" required></br></br>
                <label>Contact Number </label></br>
                <input type="text" name="contact" class="input_fill" required></br></br>
                <label>Password</label></br>
                <input type="password" name="password" class="input_fill" id="password" required></br></br>
                <label>Confirm Password</label></br>
                <input type="password" name="cpassword" id="cpassword" class="input_fill" required onkeyup='check();'></br></br>
                <span id='message'></span>
                </br>
                </br>
                <button type="submit" class="btn">Register</button>
                <button type="reset" class="btn">Reset</button>
            </form>
        
        </div>
        <div class="login_form" style="color : whitesmoke;">
            <form class="form_login" action="log.php" method="POST">
                <label>Username</label></br>
                <input type="text" name="username" class="input_fill"></br></br>
                <label>Password</label></br>
                <input type="password" name="password" class="input_fill"></br></br>
                </br>
                </br>
                <button type="submit" class="btn">Login</button>
                <a href="login.php"><input type="submit" class="btn" value="Reset"></a>
            </form>
            <?php
            	if (isset($_GET['error'])){
            		if ($_GET['error'] == 1){
					echo "<h3 style='color:red;'>Username or Password Incorrect</h3>";
				}
            	}
			?>
        </div>
        <script type="text/javascript">
        	var check = function() {
			  if (document.getElementById('password').value ==
			    document.getElementById('cpassword').value) {
			    document.getElementById('message').style.color = 'green';
			    document.getElementById('message').innerHTML = 'Password matching';
			  } else {
			    document.getElementById('message').style.color = 'red';
			    document.getElementById('message').innerHTML = 'Password not matching';
			  }
			}
        </script>
    </body>
</html>