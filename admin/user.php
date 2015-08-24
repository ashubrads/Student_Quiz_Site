
<?php
   include 'top.php';
   if(isset($_SESSION['usr']))
   {
   include 'connect.php';
   $result=mysql_query("select * from `user`");
   
 ?>
   <div id="bodyPan" style="border:0px solid black; overflow:auto;width:900px">
      <div id="bodyLeftPan" style="float:left width:400px">
       <div><h3 style="color:skyblue">USER</h3></div><br />
                <table border="1" >
                  <tr><td>UserId</td><td>Username</td>
                      <td>Total Marks</td><td>City</td>
                      <td>Phone</td><td>email</td>
                      <td>Picture</td><td>Grade</td>
                      <td colspan="2">Action</td>
                  </tr>
                   <?php
				    $id=1;
				    while($row=mysql_fetch_array($result))
				    {
				   ?>
			     <tr>
                    <td><?=$id;?></td>
					<td><a href="userprofile.php?id=<?=$row['userid']?>"><?= $row['username'];?></a></td>
                    <td><?=$row['totalMarks']?></td>
                    <td><?=$row['city'];?></td>
                    <td><?=$row['phone'];?></td>
                    <td><?=$row['email'];?></td>
                    <td><img src="<?=$row['picture'];?>" width="20px" height="20px" /></td>
                    <td><?=$row['grade']?></td>
                    <td><a href="edit.php?id=<?=$row['userid']?>">Edit</a></td>
                    <td><a href="delete.php?id=<?=$row['userid']?>">Delete</a></td>
                 </tr>
                 <?php
				     $id++;
					}
			     ?>
                 
                </table><br /><br />
             <div sytle="float:right;border:1px solid black;margin-right:20px"><form action="reg.php" method="post"><input type="submit" value="ADD USER" /></form></div><br /><br />
   	</div>
	<div id="bodyRightPan" style="float:right;padding-right:0px">
		<h2><span>MENU</span> options</h2>
		<ul>
    		<li><a href="user.php">USER</a> </li><br /><br />
            <li><a href="subject.php">SUBJECT</a> </li><br /><br />
            <li><a href="question.php">QUESTION</a> </li><br /><br />
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
</div>
<?php
   }
   else
   {
?>
<div id="bodyPan" style="border:0px solid black; overflow:auto;width:900px;height:400px">
  <div style="margin:auto;border:1px solid red;height:100px;padding:50px 0px 0px 90px;width:300px;background:#FF8C8C;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;font-size:18px">Please Login to view the page</div>
  <a href="index.php">Please click to login</a>
 </div>
<?php
   }
 include 'footer.php';
?>