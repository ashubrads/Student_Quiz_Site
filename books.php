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
		<h2><span>Contacts:-</span></h2>
                <p style="color:#999999;text-decoration:underline">books:-</p>
                <p>php and mysql, kevin yank<br></p>
                <p>php,kevin yank<br></p>
                <p>java ,balagurusamy<br></p>
                <p>c ,balagurusamy<br></p>
                <p>c++ ,balagurusamy<br></p>
                <p>data structure ,balagurusamy<br></p>
		<p class="more"><a href="#">contacts</a></p>
	</div>
	<div id="bodyRightPan">
		
		  <?php
		   if(!isset($_SESSION['u'])) 
		     include 'login.php'; 
			 else
			  include 'afterlogin.php';
		  ?>
		
	</div>
</div>
<?php
  include "footer.php";
?>
</body>
</html>