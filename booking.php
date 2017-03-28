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

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.html"><span>Home Page</span></a></li>
          <li><a href="support.html"><span>Services</span></a></li>
          <li class="active"><a href="about.html"><span>Blog</span></a></li>
          <li><a href="blog.html"><span>Packages</span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="searchform"></div>
      <div class="logo">
        <h1><a href="index.html">MSk Travels<span></span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /></a> <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" /></a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><spanBooking</span></h2>
          <p><form name="book"  action="insertbooking.php" method="post">
<table width="100%" border="0" cellpadding="2" cellspacing="2">
<tr>
    <td colspan="2">
		<div align="center">
		  <?php 
		  session_start();
		 if (!isset($_GET['status'])) {$status=""; }
		else {$status=$_GET['status']; }
		if ($status==null and $status=="")
		{
		echo 'Fill booking details';
		}
		if ($status=='success')
		{
		echo 'Booking successful';
		header("location: receipt.php");
		}
		?>	
	    </div></td>
  </tr>
 
  
 
    <tr>
    <td width="16%" align="left" valign="middle"><strong>Package </strong></td>
    <td width="8%" align="left" valign="middle">:</td>
    <td width="76%" align="left" valign="middle"><label>
	<select name="Package" type="text" class="textbox" id="Package">
<option value="LA">LA</option>
<option value="Rome">Rome</option>
<option value="France">France</option>
<option value="Europe">Europe</option>
<option value="Singapore">Singapore</option>
</select>
      
    </label></td>
  </tr>
  
  <tr>
    <td align="left" valign="middle"><strong>Number of tickets</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="No_tickets" type="text" class="textbox" id="No_tickets" />
    </label></td>
  </tr>
    <tr>
    <td align="left" valign="middle"><strong>Date</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="Date" type="date" class="textbox" id="Date" />
    </label></td>
  </tr>
  <tr>
    <td width="16%" align="left" valign="middle"><strong>Credit Card No:</strong></td>
    <td width="8%" align="left" valign="middle">:</td>
    <td width="76%" align="left" valign="middle"><label>
      <input name="Cardno" type="password" class="textbox" id="Cardno" />
    </label></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><strong>Credit Card Type</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="CType" type="text" class="textbox" id="CType" />
    </label></td>
  </tr>
  
   <tr>
    <td align="left" valign="middle"><strong>Credit Card Expiry</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="Expiry" type="date" class="textbox" id="Expiry" />
    </label></td>
  </tr>
  
 
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle"><label>
      <input name="register" type="submit" class="submit" id="register" value="Book now" />
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
