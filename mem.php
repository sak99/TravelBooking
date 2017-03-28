 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Travel Agency</title>
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
          <li><a href="packages.php"><span>Packages</span></a></li>
          <li class="active"><a href="mem.php"><span>Loged In</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">
        </f
      ></div>
      <div class="logo">
        <h1><a href="index.php">MSK Travels<span></span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="article">
 <?php
  	
  	session_start();
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: loginpage.php");
		exit();
	}

	$username=$_SESSION['SESS_USERNAME'];
	

	
    
?>
<p><form   action="cancel.php"  method="post">
</form></p>
   
          <h2>&nbsp;</h2>
		  <h2>&nbsp;</h2>
          <div class="clr"></div>
         
       
      </div>
      
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2>Successfully logged in!!</h2>
        <p>We'll Make Sure you have the Best Vacation!!</p>
        <h2><span>Profile</span></h2>
      
	   <p>Dear user,Welcome to MSK Travels!<br>We are happy to service you.<br>
		Hope you enjoy our services.</p>
	
        <h2><a href="booking.php"><span>BOOK NOW!!</a></span></h2>
		<form   action="cancel.php"  method="post">
          <table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td colspan="2"><div align="center">
                <?php 
		  
		 if (!isset($_GET['remarks'])) {$remarks=""; }
		else {$remarks=$_GET['remarks']; }
		if ($remarks==null and $remarks=="")
		{
		echo 'Cancel reservation';
		}
		if ($remarks=='success')
		{
		echo 'Cancellation successful';
		
		
		}
		?>
              </div></td>
            </tr>
            <tr>
              <td align="left" valign="middle"><strong>Bid</strong></td>
              <td align="left" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <input name="Bid2" type="text" class="textbox" id="Bid2" />
              </label></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
              <td align="left" valign="middle"><label>
                <input name="cancel2" type="submit" class="submit" id="cancel2" value="Cancel" />
              </label></td>
            </tr>
          </table>
        </form>
        <p align="right"><a href="index.php">LOGOUT</a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
      </div>
      <div class="footer">
    <div class="footer_resize">
      <p class="lf"></p>
      <p class="rf"></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div align=center></div></body>

</html>
