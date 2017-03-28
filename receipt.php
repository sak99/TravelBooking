
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Travel Agency | Packages</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span>Home</span></a></li>
          <li><a href="support.php"><span>Services</span></a></li>
          <li class="active"><a href="packages.php"><span>Packages</span></a></li>
          <li><a href="loginpage.php"><span>Login</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      
      <div class="logo">
        <h1><a href="index.html">MSK Travels<span></span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="clr"></div>
    </div>
  </div>
  
  <div class="fbg">
    <div class="fbg_resize">
      <div class="row r1">
        <h2><span>Receipt</span></h2>
        <h2>&nbsp;</h2>
      <p>
		<?php
session_start();
	include('config.php');
	$Expiry=$_SESSION['SESS_EXPIRY'];
	$UID=$_SESSION['SESS_MEMBER_ID'];
	$BID=$_SESSION['SESS_BOOKING_ID'];
	$Pack=$_SESSION['SESS_PACKAGE'];
	$qry="SELECT * FROM user WHERE UID='$UID'";
	$result=mysql_query($qry);
	$member = mysql_fetch_assoc($result);
	
			$fname = $member['fname'];
			
			$username=$_SESSION['SESS_USERNAME'];
			
			
	$qry1="SELECT * FROM booking WHERE Bid='$BID'";
	$result1=mysql_query($qry1);
	$member1 = mysql_fetch_assoc($result1);
	$no = $member1['No_tickets'];
	$date=$member1['Date'];

	
	
	$qry4="SELECT * FROM booking WHERE Uid='$UID'";
	$result4=mysql_query($qry4);
	
	if(mysql_num_rows($result4) > 1) {
	$discount=0.1;
	}
	else{
	$discount=1;}
	
	$Package=$_SESSION['SESS_PACKAGE'];
	$qry2="SELECT * FROM Package WHERE Package='$Package'";
	$result2=mysql_query($qry2);
	$member2 = mysql_fetch_assoc($result2);
	
	$Price=$member2['Price'];
	$Price=$Price*$no;
	$dis=$Price*$discount
	
	

?> 


  
  <center><table border="1"></center>
	
			<?php
			include("config.php");
			
				
			$result=mysql_query("SELECT * FROM user where UID=$UID");
			
			$test = mysql_fetch_array($result);
			$id = $test['UID'];	
mysql_query("INSERT INTO `Receipt` (`Rid`, `Uid`, `Bid`,`Date`, `price`) VALUES ('', '".$id."', '".$BID."','".$date."', '".$Price."')");
			
				
				echo "<tr align='center'>";	
				echo"<tr>
				<th>Name:</th>
				<td>" .$test['fname']." " .$test['lname']."</td>
				</tr>";
				echo"<tr>
				<th>Billing ID:</th>
				<td>$BID</td>
				</tr>";
				echo"<tr>
				<th>Email:</th>
				<td>" .$test['email']." </td>
				</tr>";
				echo"<tr>
				<th>Package:</th>
				<td>$Pack</td>
				</tr>";
				echo"<tr>
				<th>No. of tickets:</th>
				<td>$no</td>
				</tr>";
				echo"<tr>
				<th>Date:</th>
				<td>$date</td>
				</tr>";
				$fin=$Price-$dis;
				echo"<tr>
				
				<th>Amount without discount:</th>
				<td>$Price</td>
				</tr>";				
				echo"<tr>
				
				<th>Amount with discount:</th>
				<td>$fin</td>
				</tr>";
$_SESSION['SESS_PRICE']=$fin;


				
		mysql_close($bd );
			?>
</table>


</p>
        <h2>&nbsp;</h2>
        <div class="col c2">
          <p>
    </p>
<p class="spec"><a href="bal.php" class="rm">Pay Now</a></p>
<p class="spec"><a href="packages.php" class="rm">Log out</a></p>
 </div>
</div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf"></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div align=center></div></body>
</html>

