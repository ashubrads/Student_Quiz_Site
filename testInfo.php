<?php
 include 'top1.php';
 include 'connect.php';
 session_start();
 $id=$_POST['sel'];
 $sql="select * from `subject` where `subid`='$id'";
 $result=mysql_query($sql);
 $row=mysql_fetch_array($result);
 $s="select * from `question` where `sid`='$id'";
 $res=mysql_query($s);
 $r=mysql_num_rows($res);
 ?>
 <div id="bodyPan">
 <div id="bodyLeftPan" style="height:300px">
		<h2 style="width:600px"><span>You</span> can start the exam</h2><br />
		<p><form action="test.php" method="post">
            <h3 style="background:none">Subject:<?=$row['sname']?></h3>
            <h3 style="background:none">Total Question:<?=$r?></h3><br />
            <input type="hidden" name="id" value="<?=$row['subid']?>" />
              <input type="submit" name="continue" value="continue"  />&nbsp;&nbsp;<input type="submit" name="cancel" value="cancel" /></form>
		
 </div>
 </div>
 <?php
 $_SESSION['esid']=$id;
 include 'footer.php';
 ?>
 