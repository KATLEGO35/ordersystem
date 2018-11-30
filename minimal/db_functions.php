<?php
/**
 * Created by PhpStorm.
 * User: anonymous
 * Date: 2018/11/30
 * Time: 06:24 PM
 */

session_start();

$errors = array();

//login user
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
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }

}


//register user
if (isset($_POST['reg_user'])) { // REGISTER USER
    // receive all input values from the form
    $contact = mysqli_real_escape_string($db, $_POST['contact']);
    $company = mysqli_real_escape_string($db, $_POST['company']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $registration = mysqli_real_escape_string($db, $_POST['registration']);
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
    $user_check_query = "SELECT * FROM clients WHERE username='$username' LIMIT 1";
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

        $sql = "INSERT INTO clients (contact, company, username, registration, password)
                      VALUES('$contact', '$company', '$username', '$registration', '$password')";
        mysqli_query($db, $sql);
        header('location: success.php');
    }

}

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

//  if (!isset($_SESSION['username'])) {
//  	$_SESSION['msg'] = "You must log in first";
//      header('location: login.php');
//  }
//  if (isset($_GET['logout'])) {
//  	session_destroy();
//  	unset($_SESSION['username']);
//  	header("location: login.php");
//  }

$query = mysqli_query($db, 'SELECT * FROM clients');

// Get number of orders
$user = $_SESSION['username'];

$sql1 = "SELECT id FROM clients WHERE username = '$user'";
// var_dump($sql1);
// exit();
$query = mysqli_query($db, $sql1);
$result = mysqli_fetch_assoc($query);
$id = intval($result['id']);
$sql2 =  "SELECT COUNT(*) from orders WHERE id = $id";
$result2 = mysqli_query($db, $sql2);
$orderNum = mysqli_fetch_assoc($result2);


// receive all input values from the form
$nasite = mysqli_real_escape_string($db, $_POST['nasite']);
$site = mysqli_real_escape_string($db, $_POST['site']);
$petrol = mysqli_real_escape_string($db, $_POST['petrol']);
$petrol_litres = mysqli_real_escape_string($db, $_POST['litresp']);
$diesel = mysqli_real_escape_string($db, $_POST['diesel']);
$diesel_litres = mysqli_real_escape_string($db, $_POST['litresd']);
$address = mysqli_real_escape_string($db, $_POST['address']);



// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array


// first check the database to make sure
// a user does not already exist with the same username and/or email


// Finally, register user if there are no errors in the form
if (empty($errors)) {// if user exists
    $orderId = uniqid();

    $sql = "INSERT INTO orders (order_id, id, nasite,site, petrol, litresp, diesel, litresd, address)
                  VALUES ('$orderId', 1, '$nasite', '$site', '$petrol', '$petrol_litres', '$diesel', '$diesel_litres' ,'$address')";

    mysqli_query($db, $sql);
    header('location: success.php');
}


?>