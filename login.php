<html>
    <head>
        <title>SL Movie Club - Register or Login</title>
        <?php include('./import/css.php'); ?>
    </head>
    <body>
        <?php include('./import/nav.php'); ?>
        <div class="register_form" style="color : whitesmoke;">
            <form class="form_reg">
                <label>Full Name</label></br>
                <input type="text" name="fname" class="input_fill"></br></br>
                <label>Email</label></br>
                <input type="email" name="email" class="input_fill"></br></br>
                <label>User Name</label></br>
                <input type="text" name="username" class="input_fill"></br></br>
                <label>NIC</label></br>
                <input type="text" name="nic" class="input_fill"></br></br>
                <label>Contact No : </label></br>
                <input type="text" name="contact" class="input_fill"></br></br>
                <label>Password</label></br>
                <input type="password" name="password" class="input_fill"></br></br>
                <label>Confirm Password</label></br>
                <input type="password" name="confirm_password" class="input_fill"></br></br>
                </br>
                </br>
                <button type="submit">Register</button>
                <button type="reset">Reset</button>
            </form>
        </div>
        <div class="login_form" style="color : whitesmoke;">
            <form class="form_login">
                <label>Full Name</label></br>
                <input type="text" name="fname" class="input_fill"></br></br>
                <label>Email</label></br>
                <input type="email" name="email" class="input_fill"></br></br>
                </br>
                </br>
                <button type="submit">Register</button>
            </form>
        </div>
    </body>
</html>