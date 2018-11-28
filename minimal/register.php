<?php

require('init.php');

session_start();

$errors = array();

if (isset($_POST['reg_user'])) { // REGISTER USER
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM admin WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);// if user exists

        $sql = "INSERT INTO admin (username, password)
                      VALUES('$username','$password')";
        mysqli_query($db, $sql);
        header('location: success.php');
    }

}


?>


<!DOCTYPE html>
<html>
<head>  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Login - Order management system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta author="">
    <meta property="og:type" content="website">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>

<section id='LoginContent'>
    <form method="post" action="login.php">
        <div class="error">
            <?php if(!empty($errors)){ foreach($errors as $error) { echo $error . "<br>"; } } ?>
        </div>
        <div class='login'>
            <div class='SaavHeader'>
                <h3>Order Management System</h3>
            </div>
            <div class='login_title'>
                <span>Admin Login</span>
            </div>
            <div class='login_fields'>
                <div class='login_fields__user'>
                    <div class='icon'>
                        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
                    </div>
                    <input placeholder='Username' name="username" type='text' id='UsuarioInput'>
                    <div class='validation'>
                        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
                    </div>
                </div>

                <div class='login_fields__password'>
                    <div class='icon'>
                        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
                    </div>
                    <input placeholder='Password'name="password_1" id='SenhaInput' type='password'>
                    <div class='validation'>
                        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
                    </div>
                </div>

                <div class='login_fields__password'>
                    <div class='icon'>
                        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
                    </div>
                    <input placeholder='Password'name="password_2" id='SenhaInput' type='password'>
                    <div class='validation'>
                        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
                    </div>
                </div>

                <div class='login_fields__submit'>
                    <input type='submit' name="login_user" id='loginButton' value='Log In'>
                    <div class='forgot'>
                        <a href='login.php'>Login?</a>
                    </div>
                </div>
            </div>
            <div class='disclaimer'>
                <p>Take care of your password, do not inform it to anyone to avoid theft and fraud. All rights reserved.</p>
            </div>
        </div>
    </form>


</section>
<!-- <a href="https://dribbble.com/shots/5541964-Animated-login-form" target="_blank" class='dribbble'>
    <img src="https://cdn.worldvectorlogo.com/logos/dribbble-icon-1.svg"> On Dribbble
</a> -->
<script>
</script>
</body>
</html>


