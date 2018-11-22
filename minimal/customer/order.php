<?php
session_start();

// initializing variables
$nasite = "";
$address = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'management');

// REGISTER USER
if (isset($_POST['order'])) {
  // receive all input values from the form
  $nasite = mysqli_real_escape_string($db, $_POST['nasite']);
  $address = mysqli_real_escape_string($db, $_POST['address']);


  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 

  // first check the database to make sure
  // a user does not already exist with the same username and/or email



  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {// if user exists

  	$query = "INSERT INTO orders (nasite, address)
  			  VALUES('$nasite','$address')";
  	mysqli_query($db, $query);
  	header('location: success.php');
   }

  }


// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM clients WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>



