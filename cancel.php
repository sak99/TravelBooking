<?php
session_start();

include('config.php');
$BID =$_POST['Bid2'];
$UID=$_SESSION['SESS_MEMBER_ID'];


$qry1="SELECT * FROM Receipt WHERE Bid='$BID'";
	$result1=mysql_query($qry1);
	$member1 = mysql_fetch_assoc($result1);
	$price = $member1['Price'];
	
mysql_query("DELETE FROM booking WHERE Bid = '$BID'");
echo "Your booking has been deleted";

header("location: mem.php?remarks=success");
?>
