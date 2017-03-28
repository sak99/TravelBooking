<?php
session_start();
include('config.php');
$Expiry=$_SESSION['SESS_EXPIRY'];
$UID=$_SESSION['SESS_MEMBER_ID'];
$Bal=$_SESSION['SESS_PRICE'];
$Bid=$_SESSION['SESS_BOOKING_ID'];
$cid=$_SESSION['SESS_CREDIT'];
$Date=date("Y/m/d");	
	mysql_query("INSERT INTO `balance` (`UID`,`Bid`, `Bal`) VALUES ('".$UID."','".$Bid."', '".$Bal."')");
	header("location: mem1.php");

?>