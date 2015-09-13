<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
	  session_start(); 
	   
 ?>


<title>Education Zone</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="topPan">
	<a href="#"><img src="images/logo.gif" alt="Education Zone" width="245" height="37" border="0"	class="logo" title="Education Zone"/></a>
	<p>Your cool punch line</p>
	<div id="topContactPan"></div>
	<div id="topMenuPan" style="position:none">
		<div id="topMenuLeftPan"></div>
		<div id="topMenuMiddlePan">
			<ul>
				<li class="home"><a href="index.php">Home</a></li>
				<li><a href="About.php">About</a></li>
				<li><a href="admin/">admin</a></li>
				<li><a href="contacts.php">Contact</a></li>
                <li><a href="books.php">Books</a></li>
				<li><a href="universities.php">University</a></li>			
                <li class="contact"><a href="forum.php" class="contact">Forum</a></li>
			</ul>
		</div>
		<div id="topMenuRightPan"></div>
	</div><div class="inner_copy"></div>
</div>
<div id="bodyPan">
	<?php
	  
	   include 'beforebodyleft.php';
     ?>
	<div id="bodyRightPan">
		
		  <?php
		   if(!isset($_SESSION['u'])) 
		     include 'login.php'; 
			 else
			  include 'afterlogin.php';
		  ?>
		
	</div>
  
</div>
<div id="footermainPan">
	<div id="footerPan">
		<ul>
			<li><a href="#">Home</a>| </li>
			<li><a href="#">About us</a>| </li>
			<li><a href="#">Support</a>| </li>
			<li><a href="#">Books</a>| </li>
			<li><a href="#">University</a>| </li>
			<li><a href="#">Blog</a>| </li>
			<li><a href="#">Ideas</a>| </li>
			<li><a href="#">Contact</a> </li>
		</ul>
		
		
	</div>
</div>
</body>
</html>
