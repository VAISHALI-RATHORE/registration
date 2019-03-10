<?php
session_start();
$username="";
$email ="";
$errors = array();
$password_1='';
$password_2='';
//connecti2on database

$mysqli = new mysqli('localhost','root','','crud') or die(mysql_error($mysqli));

if (isset($_POST['Register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
}
if (empty($username)) {
  array_push($errors, "Username is required");
}
if (empty($email)) {
  array_push($errors, "Email is required");
}
if (empty($password_1)) {
  array_push($errors, "password is required");
}
if ($password_1!=$password_2) {
  array_push($errors, "Two passwords are not matching" );
}
if (count($errors)== 0) {
	$password =md5($password_1);
	$mysqli->query("INSERT INTO data (username,email,password) VALUES ('$username', '$email','$password')");
  
    $_session['username'] = $username;
    $_session['success'] = "you are now logged in";
    header('location:index.php');
}
if (isset($_GET['login'])) {
	$username = $_POST['username'];
	
    $password = $_POST['password'];
   
}
if (empty($username)) {
  array_push($errors, "Username is required");
}
if (empty($password)) {
  array_push($errors, "password is required");
}
if (count($errors)== 0) {
	$password =md5($password);
    $mysqli->query("SELECT * FROM data WHERE username='$username' AND password ='$password'");

}




if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	 header('location:login.php');
}
?>