<?php
session_start();
include('config.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$query=mysql_query("INSERT INTO `user` (`UID`, `fname`, `lname`,`username`, `email`, `password`) VALUES ('', '".$fname."', '".$lname."','".$username."', '".$email."', '".$password."')");
header("location: register.php?remarks=success");
mysql_close($con);
?>