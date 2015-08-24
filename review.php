<?php
 include 'top.php';
 session_start();
 ?>
 <style>
   .green{ color:green;}
   </style>
 <?php
 include 'connect.php';
 $id=$_SESSION['esid'];
 $result=mysql_query("select * from `question` where `sid`='$id'");
 $rs=mysql_num_rows($result)-1;
  if(!isset($_POST['submit']))
 {
	 $_SESSION['cn']=0;
	 
 }
 else if($_POST['submit']=="next")
    {
	    mysql_data_seek($result,$_SESSION['cn']);
	    $row=mysql_fetch_array($result);
	    $_SESSION['cn']++;
		echo $_SESSION['cn'];
		
    }
    else
    {
	    header("Location:selectSub.php");
	  
    }

 mysql_data_seek($result,$_SESSION['cn']);
 $r=mysql_fetch_array($result);
 ?>
 <div id="bodyPan">
 <div id="bodyLeftPan" style="height:300px">
		<h3 style="width:600px"><span>Question</span> are below</h3><br /><br />
		<form action="review.php" method="post">
          <h4>Q NO.<?=$_SESSION['cn']+1?>&nbsp;&nbsp;<?=$r['qname']?></h4><br />
           &nbsp;&nbsp;<input type="radio" disabled="disabled" name="ans" /><span class="<?=(($r['ans']==$r['op1'])?'green':'none')?>"><?=$r['op1']?>
</span><br />
            &nbsp;&nbsp;<input type="radio" disabled="disabled" name="ans" /><span class="<?=(($r['ans']==$r['op2'])?'green':'none')?>"><?=$r['op2']?></span><br />
             &nbsp;&nbsp;<input type="radio" disabled="disabled" name="ans" /><span class="<?=(($r['ans']==$r['op3'])?'green':'none')?>"><?=$r['op3']?></span><br />
              &nbsp;&nbsp;<input type="radio" disabled="disabled" name="ans" /><span class="<?=(($r['ans']==$r['op4'])?'green':'none')?>"><?=$r['op4']?></span><br />
              <?php
			   if(!($_SESSION['cn']==$rs))
			   {
				   //echo $_SESSION['cn'];echo $rs;
			   ?>
              <input type="submit" name="submit" value="next" />
			  <?php 
			   }
			   else
			   {
			  ?>
              <input type="submit" name="submit" value="finish" /><?php }?>
         </form>
		
 </div>
 </div>
 <?php
  include 'footer.php';
 ?>
 