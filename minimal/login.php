<?php session_start();

    require('init.php');
    include('db_functions.php');



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
                    <input placeholder='Password'name="password" id='SenhaInput' type='password'>
                    <div class='validation'>
                        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
                    </div>
                </div>
                <div class='login_fields__submit'>
                <input type='submit' name="login_user" id='loginButton' value='Log In'>                   
                        <div class='forgot'>
                        <a href='/forgot'>Forgot password?</a>
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

