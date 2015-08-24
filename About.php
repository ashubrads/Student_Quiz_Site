<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Education Zone</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
 include "top.php";
 session_start();
?>
<div id="bodyPan">
	<div id="bodyLeftPan">
		<h2><span>Abouts:-</span></h2>
        <p>Education zone provies student with many things that will help in their studies.<br />
         It has online test facility and forum facility where student can submit their query.</p>        
		<p class="more"><a href="#">ABOUT</a></p>
	</div>
	<div id="bodyRightPan">
		
		</ul>
        <?php
		  if(!isset($_SESSION['u']))
		  {
	    ?>
		<h3><span>Log</span> In</h3>
		<p class="boldtext">Username:</p><p><input type="text"/></p><p class="boldtext">Password:<input type="password"/></p>
                <p><br><input type="submit" value="submit"/></P>
        <?php
		  }
		  ?>
	</div>
</div>
<?php
  include "footer.php";
?>
</body>
</html>