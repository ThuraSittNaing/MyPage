<?php
include "config/dbconnect.php";

$username = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];




$dbconnect = mysqli_connect('localhost','root','','myweb');
$sql = mysqli_query($dbconnect,"INSERT INTO register(username, email, password)
       VALUES ('$username','$email','$password')");
if ($sql){
	echo "Register Sucessully";
}
 	else {
 	echo "Register Failed";
 	}
// var_dump($sql);
// header("location:http://localhost/linntest/login/register.php");
?>