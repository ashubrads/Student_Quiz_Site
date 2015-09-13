<?php

 include 'top.php';
 include 'connect.php';
 $sql="select * from `subject`";
 $result=mysql_query($sql);
  session_start();
 $_SESSION['per']=0;
 if(!isset($_SESSION['u']))
 	header("Location:index.php?msg=Login to Appear for the test");
 ?>
 <div id="bodyPan">
 <div id="bodyLeftPan" style="height:300px">
		<h3 style="width:600px"><span>Please</span> select your subject for the online test</h3>
		<p><form action="testInfo.php" method="post">
            <select name="sel">
             <option value="select">select</option>
             <?php
			     while($row=mysql_fetch_array($result))
				 {
			 ?>
             <option value="<?=$row['subid']?>"><?=$row['sname']?></option>
              <?php 
				 }
			  ?>
              </select>
              <input type="submit" value="enter"  /></form>
		
 </div>
 </div>
 <br><br><br><br><br>
 <?php
		   
			  include 'afterlogin.php';
		  ?>
 <?php
 include 'footer.php';
 ?>
 