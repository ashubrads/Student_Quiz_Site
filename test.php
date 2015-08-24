<?php
 session_start();
 if(isset($_POST['submit']) && $_POST['submit']=="submit")
    unset($_SESSION['per']);
 include 'top1.php';
 include 'connect.php';

if(isset($_SESSION['esid']))
{
 if(!isset($_POST['continue']) && isset($_POST['id']))
 {
   header("Location:index.php");
   exit();
 }
 
  $id=$_SESSION['esid'];
  //echo $id;
  $sql="select * from `question` where `sid`='$id'";
  $result=mysql_query($sql);
  $rs=mysql_num_rows($result)-1;
  //echo $rs;

 if(!isset($_POST['submit']))
 {
	 $_SESSION['qn']=0;
	 $_SESSION['tan']=0;
 }
}
if(isset($_SESSION['qn']))
 {
  if(isset($_POST['submit']))
  {
   if($_POST['submit']=="next" && isset($_POST['ans']))
    {
	    mysql_data_seek($result,$_SESSION['qn']);
	    $row=mysql_fetch_array($result);
	   if($row['ans']==$_POST['ans'])
	   {
	     $_SESSION['tan']++; 
		 //echo $_SESSION['tan'];
	    }
		 
		$_SESSION['qn']++;
		//echo $_SESSION['qn'];
		
    }
    else
    {
	  mysql_data_seek($result,$_SESSION['qn']);
	  $r=mysql_fetch_array($result);
	 // echo $r['ans'];
	 // echo $_POST['ans'];
	  if($r['ans']==$_POST['ans'])
	   {
	     $_SESSION['tan']++; 
		 //echo $_SESSION['tan'];
	   }
	   $_SESSION['qn']++;
	 //  echo $_SESSION['qn'];
	 $wrong=$_SESSION['qn']-$_SESSION['tan'];
	  echo "<div id='bodyPan'><div id='bodyLeftPan' style='margin-top:40px;font-size:10px;color:lightblack;color:gray;font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif;background-color:gray'><h1>Total question:$_SESSION[qn]</h1>";
	 echo "<h1>Total right answer:$_SESSION[tan]</h1>";
	 echo "<h1>Total wrong answer:$wrong</h1>";
	 echo "<a href='review.php?id=$id'>Review</a></div></div>";
	 unset($_SESSION['qn']);
	 unset($_SESSION['tan']);
	 exit();
	
    }
  }
 }
 
 
 if(isset($_SESSION['qn']))
 {
 mysql_data_seek($result,$_SESSION['qn']);
 $r=mysql_fetch_array($result);
 ?>
 <div id="bodyPan">
 <div id="bodyLeftPan" style="height:300px">
		<h3 style="width:600px"><span>Question</span> are below</h3><br /><br />
		<form action="test.php" method="post">
          <h4>Q NO.<?=$_SESSION['qn']+1?>&nbsp;&nbsp;<?=$r['qname']?></h4><br />
           &nbsp; &nbsp;<input type="radio" name="ans" value="<?=$r['op1']?>" /><?=$r['op1']?><br />
            &nbsp; &nbsp;<input type="radio" name="ans" value="<?=$r['op2']?>" /><?=$r['op2']?><br />
             &nbsp; &nbsp;<input type="radio" name="ans" value="<?=$r['op3']?>" /><?=$r['op3']?><br />
              &nbsp; &nbsp;<input type="radio" name="ans" value="<?=$r['op4']?>" /><?=$r['op4']?><br />
              &nbsp; 
			  <?php
			   if(!($_SESSION['qn']==$rs))
			   {
			   ?>
             <input type="submit" name="submit" value="next" /><?php }?><input type="submit" name="submit" value="submit" />
         </form>
		
 </div>
 </div>
 <?php

 }
	 
 include 'footer.php';
 ?>
 