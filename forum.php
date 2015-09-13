<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Education Zone</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
 include 'top.php';
 session_start();
 include 'connect.php';
 $sql="select * from `forum`";
 $result=mysql_query($sql);
 ?>
<div id="bodyPan" style="width:1100px">
	<div id="bodyLeftPan" style="width:700px">
		<table border="1" style="border:hidden;width:800px">
          <thead>
             <tr><th>Date</th>
             <th>Topic</th>
             <th>User</th></tr>
          </thead>
          <tbody>
           <?php
		     while($row=mysql_fetch_array($result))
			 {
				 $id=$row['uid'];
				// echo $id;
				 $r=mysql_query("select * from `user` where `userid`='$id'");
				 $ro=mysql_fetch_array($r);
				 //echo $_SESSION['u'];
			?>
            <tr height="50px"><td><?=$row['date']?></td>
                 <td><?=$row['question']?></td>
                 <form action="process.php" method="post">
                 <td><img src="admin/<?=$ro['picture']?>" width=25px height=25px/>&nbsp;&nbsp;<?php echo $ro['username'];
				                if(isset($_SESSION['u']) && $_SESSION['u']==$ro['username'])
								 {
					             ?>
                                <input type="submit" value="delete" name="fdel" />
                                <input type="hidden" value="<?=$row['fid']?>" name="fid" />
                                 <?php } ?>
								</td>
                                </form>
            <?php
			 }
			 ?>
         </tbody>
        </table> 
        <?php if(isset($_SESSION['u']))
		{
		?>
        <form action="process.php" method="post">
        <div><textarea rows="5" cols="50" name="top"></textarea><br />
        <input type="submit" value="submit" name="fsub"/>
        </div></form>
        <?php } ?>
     </div>
  <div id="bodyRightPan" style="margin-left:70px">
	
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
