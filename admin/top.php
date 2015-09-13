<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Education Zone</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="topPan">
	<a href="#"><img src="images/logo.gif" alt="Education Zone" width="245" height="37" border="0"	class="logo" title="Education Zone"/></a>
	<p>Your cool punch line</p>
	<div id="topContactPan"></div>
	<div id="topMenuPan">
		
        <?php
		  session_start();
		if(isset($_SESSION['usr']))
		      {
		  ?>
          <div id="topMenuLeftPan" style="width:60px;margin-left:45px"></div>
		<div id="topMenuMiddlePan" style="width:610px">
		  <?php 
			  }
		    else
			{ 
		  ?>
          <div id="topMenuLeftPan"></div>
           <div id="topMenuMiddlePan">
           <?php } ?>
			<ul style="width:670px">
				<li class="home"><a href="index.php">Home</a></li>
				<li><a href="About.php">About</a></li>
				<li><a href="contacts.php">Contact</a></li>
				<li><a href="books.php">Books</a></li>
				<li><a href="universities.php">University</a></li>
				<li><a href="../index.php ">&nbsp;&nbsp;&nbsp;User Panel</a></li>
                
              
                <?php
				  
				  if(isset($_SESSION['usr']))
				  {
			    ?>
                <li ><a href="contacts.php" >Contact</a></li>
				<li class="contact"><a href="logout.php" class="contact">Logout</a></li>
                <?php
				  }
				  else
				  {
				  ?>
                  
				      <li class="contact"><a href="contacts.php" class="contact">Contact</a></li>
                <?php 
					 }
				 ?>
				   <div id="topMenuRightPan"></div>
			</ul>
		</div>
		<div id="topMenuRightPan" style="width:0px"></div>
	</div><div class="inner_copy"></div>
</div>
</body>