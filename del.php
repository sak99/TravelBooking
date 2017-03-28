<?php
  include("config.php");  

	$id =$_REQUEST['UID'];
	
	
	// sending query
	mysql_query("DELETE FROM user WHERE UID = '$id'")
	or die(mysql_error());  	
	
	header("Location: admin.php");
?>