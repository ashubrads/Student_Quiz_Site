
<?php
   include 'top.php';
   if(isset($_SESSION['usr']))
   {
   include 'connect.php';
   $res=mysql_query("select * from `subject`");
   
 ?>
   <div id="bodyPan" style="border:0px solid black; overflow:auto;width:900px">
      <div id="bodyLeftPan" style="float:left width:400px">
       <div><h3 style="color:skyblue">QUESTIONS</h3></div><br />
       <div><h4 style="color:skyblue"><form action="question.php" method="post"><select name="subt">
																<option value="0">ALL</option>
                                                                <?php
																  while($row=mysql_fetch_array($res))
																  {
															    ?>
                                                                 <option value="<?=$row['subid']?>" <?php
                                                                 								if(isset($_POST['subt']))
																								{
																								   $id=$_POST['subt'];
																									if($id==$row['subid'])
																									echo "selected='selected'";
																								}
																 ?> ><?=$row['sname']?></option>
                                                                 <?php 
																  }
																  ?>
                                                                 </select><input type="submit" value="Enter" />
                                       </form></h4></div>       							
                <table border="1" >
                  <tr><td>SubId</td><td>qname</td>
                  <td>opt1</td> <td>opt2</td>
                   <td>opt3</td> <td>opt4</td>
                    <td>ans</td>
                  <td colspan="2">Action</td>
                </tr>
                   <?php
				    if(isset($_POST['subt']))
					{
						$id=$_POST['subt'];
						if($_POST['subt']>0)
						  $sql="select * from `question` where `sid`='$id'";
						  else
						    $sql="select * from `question`";
					}
					else
					   $sql="select * from `question`";
						$result=mysql_query($sql);
				     $id=1;
				     while($row=mysql_fetch_array($result))
				     {
				   ?>
			     <tr>
                    <td><?=$id?></td>
                    <td><?=substr($row['qname'],0,7)?></td>
                     <td><?=$row['op1']?></td>
                      <td><?=$row['op2']?></td>
                       <td><?=$row['op3']?></td>
                        <td><?=$row['op4']?></td>
                         <td><?=$row['ans']?></td>
                    <td><a href="editques.php?id=<?=$row['quid']?>">Edit</a></td>
                    <td><a href="process.php?dqid=<?=$row['quid']?>">Delete</a></td>
                 </tr>
                 <?php
				     $id++;
					}
			     ?>
                 
                </table><br /><br />
             <div sytle="float:right;border:1px solid black;margin-right:20px"><form action="regques.php" method="post"><input type="submit" value="ADD QUESTION" /></form></div><br /><br />
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