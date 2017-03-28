<?php
session_start();
include('config.php');
$Package=$_POST['Package'];
$No_tickets=$_POST['No_tickets'];
$Date=$_POST['Date'];
$CType=$_POST['CType'];
$Cardno=$_POST['Cardno'];
$UID=$_SESSION['SESS_MEMBER_ID'];
$Expiry=$_POST['Expiry'];

$query=mysql_query("INSERT INTO `booking` (`Bid`, `Date`, `No_tickets`,`Uid`,`Package`) VALUES ('', '".$Date."', '".$No_tickets."','".$UID."','".$Package."')");
$last_ID = mysql_insert_id();
$q=mysql_query("INSERT INTO `credit` (`Cid`, `Cardno`, `CType`, `Expiry`,`UID`) VALUES ('','".$Cardno."', '".$CType."', '".$Expiry."', '".$UID."')");
$c_ID = mysql_insert_id();




$_SESSION['SESS_BOOKING_ID'] = $last_ID;
$_SESSION['SESS_PACKAGE'] = $Package;
$_SESSION['SESS_EXPIRY']=$Expiry;
$_SESSION['SESS_CREDIT']=$c_ID;
			
header("location: booking.php?status=success");
mysql_close($con);
?>

