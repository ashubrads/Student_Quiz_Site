<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="ajax.js"></script>
 <script type="text/javascript" src="validation.js">
 </script>
 
</head>

<body>
<?php
  include 'top.php';
?>
<div id="bodyPan" style="border:0px solid black; overflow:auto;width:750px">
      <div id="bodyLeftPan" style="float:left width:400px">
       <div><h3 style="color:skyblue">Registration form</h3></div><br />
          <form action="process.php"   method="post">
               <table border=0px style="border:0px;background:-moz-linear-gradient(left,white,skyblue);font-size:16x;box-shadow:15px 16px 15px #0099FF">
                  <tr><td>Subject:<br /></td><td><input type="text" name="subj" id="us" /><br /></td></tr>
                  
                  <tr><td><input type="submit" value="SUBMIT" name="subject" /></td></tr>
                  
                </table><br /><br />
            </form>
           
            
   	</div>
	<div id="bodyRightPan" style="float:right;padding-right:0px">
		<h2><span>MENU</span> options</h2>
		<ul>
			<li><a href="subject.php">SUBJECT</a> </li><br /><br />
			<!--<li><a href="#">Amet, consectetuer</a> </li>
			<li><a href="#">Amet, consectetuer</a> </li>
			<li><a href="#">Bibendum nunc. Lorem</a> </li>
			<li><a href="#">Ipsum dolor sit amet, </a> </li>
			<li><a href="#">Consectetuer adipiscinrt.</a> </li>
			<li><a href="#">Integer porta enim vel mi.</a> </li>
			<li><a href="#">Vivamus at mi.Ut</a> </li>
		</ul>
	     <h3><span>Log</span> In</h3>
		<p class="boldtext">Username:</p><p><input type="text"/></p><p class="boldtext">Password:<input type="password"/></p>
                <p><br><input type="submit" value="LogIn"/></P> -->
	</div>
    <div id="xyz" style="float:left;clear:left;background:#F9C;border:1px solid #F00">
    </div>
</div>

<?php
  include 'footer.php';
?>
