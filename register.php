<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Travel Agency | About</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript">
function validateForm()

{

var a=document.forms["reg"]["fname"].value;

var b=document.forms["reg"]["lname"].value;

var c=document.forms["reg"]["username"].value;

var d=document.forms["reg"]["password"].value;

var e=document.forms["reg"]["email"].value;



if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") 

)

{

 alert("All Field must be filled out");

 return false;

}

if (a==null || a=="")

 {

  alert("First name must be filled out");

  return false;
 }

if (b==null || b=="")

 {

 alert("Last name must be filled out");

  return false;

 }

 if (c==null || c=="")

 {

  alert("Enter Username");

  return false;

 }

if (d==null || d=="")

{

 alert("Password not entered");

  return false;

  }

if (e==null || e=="")

  {

  alert("Email not entered");

  return false;

 }

 
}

</script>

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
      <div class="clr"></div>
     
      <div class="logo">
        <h1><a href="index.html">MSk Travels<span></span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /><span> </span></a> <a href="#"><img src="images/slide2.jpg" width="960" height="360" alt="" /><span></span></a> <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" /><span> </span></a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">

           <p><form name="reg"  action="submit-form.php" onsubmit="return validateForm()" method="post">
<table width="100%" border="0" cellpadding="2" cellspacing="2">
<tr>
    <td colspan="2">
		<div align="center">
		  <?php 
		  session_start();
		 if (!isset($_GET['remarks'])) {$remarks=""; }
		else {$remarks=$_GET['remarks']; }
		if ($remarks==null and $remarks=="")
		{
		echo 'Fill registration form';
		}
		if ($remarks=='success')
		{
		header("location: packages.php");
		}
		?>	
	    </div></td>
  </tr>
 
  
  <tr>
    <td width="13%" align="left" valign="middle"><strong>First Name</strong></td>
    <td width="2%" align="left" valign="middle">:</td>
    <td width="85%" align="left" valign="middle"><label>
      <input name="fname" type="text" class="textbox" id="fname" />
    </label></td>
  </tr>
  
  <tr>
    <td align="left" valign="middle"><strong>Last Name</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="lname" type="text" class="textbox" id="lname" />
    </label></td>
  </tr>
    <tr>
    <td align="left" valign="middle"><strong>Username</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="username" type="text" class="textbox" id="username" />
    </label></td>
  </tr>
  <tr>
    <td width="13%" align="left" valign="middle"><strong>Password</strong></td>
    <td width="2%" align="left" valign="middle">:</td>
    <td width="85%" align="left" valign="middle"><label>
      <input name="password" type="password" class="textbox" id="password" />
    </label></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><strong>Email</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="email" type="text" class="textbox" id="email" />
    </label></td>
  </tr>
  
  
 
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle"><label>
      <input name="register" type="submit" class="submit" id="register" value="Register" />
    </label></td>
  </tr>
</table>
</form></p>
          <div class="clr"></div>
          <p>&nbsp;</p>
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
