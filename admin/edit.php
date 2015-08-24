<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <script type="text/javascript" src="validation.js">
 </script>
</head>

<body>
<?php
  include 'top.php';
  include 'connect.php';
  $id=$_GET['id'];
  
  $sql="select * from user where userid='".$id."'";
  $result=mysql_query($sql);
  $row=mysql_fetch_array($result);
 
?>
<div id="bodyPan" style="border:0px solid black;overflow:auto;width:750px">
      <div id="bodyLeftPan" style="float:left width:400px">
       <div><h3 style="color:skyblue">Edit form</h3></div><br />
          <form action="editing.php?id=<?=$id?>" onsubmit="return check()" enctype="multipart/form-data" method="post">
               <table style="border:0px;background:-moz-linear-gradient(left,white,skyblue);font-size:16x;box-shadow:15px 16px 15px #0099FF">
                  <tr><td>Username:<br /></td><td><input type="text" name="user" id="us" value="<?=$row['username']?>"/><br /></td></tr>
                  <tr><td>Password:<br /></td><td><input type="password" name="pass" id="pas" value="<?=$row['password']?>"/><br /></td></tr>
                  <tr><td>Confirm Password:<br /></td><td><input type="password" name="cpass" id="cp" value="<?=$row['password']?>"/><br /></td></tr>
                  <tr><td>Email:<br /></td><td><input type="text" name="em" id="eml" value="<?=$row['email']?>"/><br /></td></tr>
                  <tr><td>Phone:<br /></td><td><input type="text" name="ph" id="pho" value="<?=$row['phone']?>"/><br /></td></tr>
                  <tr><td>City:<br /></td><td><select name="ci" id="ct">
                   					          <option vlaue="none">select</option>
                                              <option value="ranchi" <?php if($row['city']=="ranchi")
									   {
									        echo "selected='selected'";
									   }
									?>>ranchi</option>
                                              <option value="patna" <?php if($row['city']=="patna")
									   {
									        echo "selected='selected'";
									   }
									?>>patna</option>
                                              </select><br /></td></tr>
                  <tr><td>Address:<br /></td><td><input type="text" name="Addr" id="Add" value="<?=$row['address']?>"/><br /></td></tr>
                  <tr><td valign="top">Picture:</td><td><input type="file" name="pic" value="<?=$row['picture']?>"/><br /><img src="<?=$row['picture']?>" width=40px height=40px /></td></tr>
                   <tr><td>Course:</td><td>
					<select name="cour" id="cour">
                                         <option value="none">select</option>
					<?php
         				    $cou=array("BCA","MCA","DCA");
						foreach($cou as $c):
					?>
                                         <option value="<?=$c?>" <?php if($row['course']==$c)
								  {
								    echo 'selected="selected"';
								  }
  								 ?>
								><?=$c?></option>
					<?php endforeach; ?>
                                   </select></td></tr>
                   <tr><td>Total marks:</td><td><input type="text" name="tm" id="tm" value="<?=$row['totalMarks']?>"/></td></tr>
                   <tr><td>Marks Obtain:</td><td><input type="text" name="mo" id="mo" value="<?=$row['marksObt']?>"/></td></tr>
                   <tr><td>Grade:</td><td><input type="number" name="gr" id="gr" value="<?=$row['grade']?>"/><button onclick="calculation()">Calcuate</button></td></tr>          
                  <tr><td colspan="2"><input type="submit" value="Edit" name="sub" /></td></tr>
                </table><br /><br />
            </form>
   	</div>
	<div id="bodyRightPan" style="float:right;padding-right:0px">
		<h2><span>MENU</span> options</h2>
		<ul>
			<li><a href="user.php">USERS</a> </li><br /><br />
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
    <div id="xyz" style="float:left;clear:left;background:-moz-linear-gradient(left,white,skyblue);border:0px solid black">
    </div>
</div>

<?php
  include 'footer.php';
?>
