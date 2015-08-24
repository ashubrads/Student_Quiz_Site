<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Education Zone</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
 .mydiv
 {
	margin:auto;
	clear:left;width:205px;
	height:200px;margin-right:500px;
	margin-top:0px;
	border:0px solid black;
	background:-moz-linear-gradient(left,white,skyblue);
	position:relative;
	top:100px;
	left:100px;
	overflow:auto;
	text-shadow:10px 10px 10px skyblue;
	box-shadow:10px 10px 10px #CCC;;
 }
 .mydiv div
  {
	 padding-left:10px;
	 font-size:16px
  }
 </style>
</head>
<body>
<br /><br />
<div id="bodyPan" style="width:800px;height:600px;border:0px solid black;background:-moz-radial-gradient(center,#DADADA,white);">
      <div id="bodyLeftPan">
                <div><br /><br /><h3 style="background:none"><img src="images/adminpic.jpg"  width="40px" height="40px"/><span style="color:skyblue;font-style:italic">Hi! Admin <?=date('y-m-d'); ?></span></h3></div><br />
      </div>
        
	<!--<div id="bodyRightPan">
		<h2><span>few</span> tips</h2>
		<ul>
			<li><a href="#">lorem ipsum dolor sit</a> </li>
			<li><a href="#">Amet, consectetuer</a> </li>
			<li><a href="#">Amet, consectetuer</a> </li>
			<li><a href="#">Bibendum nunc. Lorem</a> </li>
			<li><a href="#">Ipsum dolor sit amet, </a> </li>
			<li><a href="#">Consectetuer adipiscinrt.</a> </li>
			<li><a href="#">Integer porta enim vel mi.</a> </li>
			<li><a href="#">Vivamus at mi.Ut</a> </li>
		</ul>
		
	</div>-->
      <div class="mydiv">
      <form action="process.php" method="post">
         <div style="padding-left:0px;background:#06F;font-size:18px;color:#FFF">LOGIN</div><br /><br />
         <div>Username:</div><div><input type="text" name="uname" size="24"/></div><br /><div>Password:</div><div><input type="password"  name="pass" size="24"/></div>
                <div><br><input type="submit" value="LogIn" name="lin" style="background:#DADADA"/></div>
       </div>
      </form>     
</div>
</body>
</html>