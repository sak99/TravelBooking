<?php
require("config.php");
$id =$_REQUEST['UID'];

$result = mysql_query("SELECT * FROM user WHERE UID  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
					$fname=$test['fname'];
					$lname=$test['lname'];
					$username=$test['username'];
					$password=$test['password'];
					$email=$test['email'];

if(isset($_POST['save']))
{	
					$fnamenew=$_POST['fname'];
					$lnamenew=$_POST['lname'];
					$usernamenew=$_POST['username'];
					$passwordnew=$_POST['password'];
					$emailnew=$_POST['email'];


	mysql_query("UPDATE user SET fname ='$fnamenew', lname ='$lnamenew',
		 username ='$usernamenew',password ='$passwordnew',email ='$emailnew' WHERE UID = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: admin.php");			
}
mysql_close($bd);
?>
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
          <li><a href="index.html"><span>Home Page</span></a></li>
          <li><a href="support.html"><span>Services</span></a></li>
          <li><a href="about.html"><span>Blog</span></a></li>
          <li class="active"><a href="blog.html"><span>Packages</span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li>
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
      <div class="r1">
        <h2><span>Exciting </span> Packages        </h2>
        <p><form method="post">
<table>
	 <tr>
    <td width="13%" align="left" valign="middle"><strong>First Name</strong></td>
    <td width="2%" align="left" valign="middle">:</td>
    <td width="85%" align="left" valign="middle"><label>
      <input name="fname" type="text" class="textbox" id="fname" value="<?php echo $fname ?>"/>
    </label></td>
  </tr>
  
  <tr>
    <td align="left" valign="middle"><strong>Last Name</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="lname" type="text" class="textbox" id="lname" value="<?php echo $lname ?>" />
    </label></td>
  </tr>
    <tr>
    <td align="left" valign="middle"><strong>Username</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="username" type="text" class="textbox" id="username" value="<?php echo $username ?>"/>
    </label></td>
  </tr>
  <tr>
    <td width="13%" align="left" valign="middle"><strong>Password</strong></td>
    <td width="2%" align="left" valign="middle">:</td>
    <td width="85%" align="left" valign="middle"><label>
      <input name="password" type="password" class="textbox" id="password" value="<?php echo $password ?>" />
    </label></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><strong>Email</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="email" type="text" class="textbox" id="email" value="<?php echo $email ?>"/>
    </label></td>
  </tr>
  <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

        <h2>&nbsp;</h2>
        <div class="col c2">
          <p>&nbsp;</p>
<p class="spec"><a href="loginpage.php" class="rm">Book Tickets</a></p>
 </div>
</div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; WE ADB Project</p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div align=center></div></body>
</html>
