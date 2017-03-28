
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
          <li><a href="services.php"><span>Services</span></a></li>
          <li><a href="packages.php"><span>Packages</span></a></li>
          <li class="active"><a href="admin.php"><span>Logged In</span></a></li>
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
      <div class="r1">
        <h2><span>User  </span> Details       </h2>

<center><table border="1"></center>
<tr align='center'>
        <th>UID:</th>
        <th>Fname:</th>
		<th>Lname:</th>
        <th>Email:</th>
        
    </tr>
	
			<?php
			include("config.php");
			
				
			$result=mysql_query("SELECT * FROM user");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['UID'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['UID']."</font></td>";
				echo"<td><font color='black'>" .$test['fname']."</font></td>";
				echo"<td><font color='black'>". $test['lname']. "</font></td>";
				echo"<td><font color='black'>". $test['email']. "</font></td>";
				echo"<td> <a href ='view.php?UID=$id'>Edit</a>";
				echo"<td> <a href ='del.php?UID=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
		mysql_close($bd );
			?>
</table>
        <p><form method="post">
<table width="105%" height="280">

	  <tr>
    <td width="13%" align="left" valign="middle"><strong>Package Name</strong></td>
    <td width="2%" align="left" valign="middle">:</td>
    <td width="85%" align="left" valign="middle"><label>
      <input name="Package" type="text" class="textbox" id="Package" />
    </label></td>
  </tr>
  
  <tr>
    <td align="left" valign="middle"><strong>Price</strong></td>
    <td align="left" valign="middle">:</td>
    <td align="left" valign="middle"><label>
      <input name="Price" type="text" class="textbox" id="Price" />
    </label></td>
  </tr>
    
  
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="sub" value="add" /></td>
	</tr>
</table>
</table><br><br><br>
<h2>Package Table </h2>
<?php
if (isset($_POST['sub']))
	{	   
	include 'config.php';
	
			 		$package=$_POST['Package'];
					$price=$_POST['Price'];
																	
		 mysql_query("INSERT INTO `Package` (`Package`, `Price`) VALUES ('".$package."', '".$price."')");
				
				
	        }
?>
        </form>
<center><table border="1"></center>
<tr align='center'>
        <th>Package:</th>
        <th>Price:</th>
        
    </tr>	
			<?php
			include("config.php");
			
				
			$result1=mysql_query("SELECT * FROM package");
			

			while($test1 = mysql_fetch_array($result1))
			{

				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test1['Package']."</font></td>";
				echo"<td><font color='black'>" .$test1['Price']."</font></td>";
				
				echo"<td> <a href ='view.php?UID=$id'>Edit</a>";
				echo"<td> <a href ='del.php?UID=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
		mysql_close($bd );
			?>
</table><br><br><br>


        <h2>&nbsp;</h2>
        <div class="col c2">
          <p>&nbsp;</p>
<p class="spec"><a href="index.php" class="rm">LOGOUT</a></p>
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
