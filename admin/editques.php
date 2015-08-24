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
  include 'connect.php';
  $id=$_GET['id'];
  $sql="select * from `question` where `quid`='$id'";
  $result=mysql_query($sql);
  $row=mysql_fetch_array($result);
  $s="select * from `subject`";
  $result=mysql_query($s);
  
?>
<div id="bodyPan" style="border:0px solid black; overflow:auto;width:750px">
      <div id="bodyLeftPan" style="float:left width:400px">
       <div><h3 style="color:skyblue">Registration form</h3></div><br />
          <form action="process.php"   method="post">
               <table border=0px style="border:0px;background:-moz-linear-gradient(left,white,skyblue);font-size:16x;box-shadow:15px 16px 15px #0099FF">
                  <tr><td>Subject:</td><td><select name="sj">
                                           <option value="Select">select</option>
                                         <?php  while($r=mysql_fetch_array($result))
										          {
								          ?>
                                                   <option value="<?=$r['subid']?>" <?php if($r['subid']==$row['sid'])
												   											{
																								echo "selected='selected'";
																				  			}
																				  ?> ><?=$r['sname']?></option>
                                            <?php
												  }
										   ?>
                                              </select>
                  <tr><td>Question:<br /></td><td><input type="text" name="ques" id="qs" value="<?=$row['qname']?>"/><br /></td></tr>
                   <tr><td>option 1:<br /></td><td><input type="text" name="op1" id="o1" value="<?=$row['op1']?>"/><br /></td></tr>
                   <tr><td>option 2:<br /></td><td><input type="text" name="op2" id="o2" value="<?=$row['op2']?>"/><br /></td></tr>
                   <tr><td>option 3:<br /></td><td><input type="text" name="op3" id="o3" value="<?=$row['op3']?>"/><br /></td></tr>
                   <tr><td>option 4:<br /></td><td><input type="text" name="op4" id="o4" value="<?=$row['op4']?>"/><br /></td></tr>
                   <tr><td>answer:<br /></td><td><input type="text" name="ans" id="an" value="<?=$row['ans']?>"/><br /></td></tr>
                  <tr><td><input type="hidden" name="quid" value="<?=$id?>" /><input type="submit" value="EDIT" name="qsub" /></td></tr>
                  
                </table><br /><br />
            </form>
           
            
   	</div>
	<div id="bodyRightPan" style="float:right;padding-right:0px">
		<h2><span>MENU</span> options</h2>
		<ul>
			<li><a href="question.php">Question</a> </li><br /><br />
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
