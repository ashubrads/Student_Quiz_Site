<?php
 include 'connect.php';
  if(isset($_POST['sub']))
  {
   $username=$_POST['user'];
   $password=$_POST['pass'];
   $email=$_POST['em'];
   $phone=$_POST['ph'];
   $city=$_POST['ci'];
   $address=$_POST['Addr'];
   $picture=$_FILES['pic']['name'];
   $course=$_POST['cour'];
   $total=$_POST['tm'];
   $marks=$_POST['mo'];
   $grade=$_POST['gr'];
   include 'upload.php';  
  $sql="insert into `user` values(NULL,'$username','$password','$city','$phone','$email',CURDATE(),'$address','$targ','$course','$total','$marks','$grade')";
  $result=mysql_query($sql);
  if($result)
	  header("Location:user.php?msg=Records added sucessfully");
  else
      header("Location:user.php?msg=Problem occured while adding the records");
  }
  if(isset($_POST['subject']))
  {
	  $subject=$_POST['subj'];
	  $sql="insert into `subject` values(null,'$subject')";
	  $result=mysql_query($sql);
	  if($result)
	      header("Location:subject.php?msg=subject added successfully");
	   else
	       header("Location:subject.php?msg=unsuccessfull");
  }
  if(isset($_POST['esub']))
  {
	  $subject=$_POST['subj'];
	  $id=$_POST['suid'];
	  $sql="update `subject` set `sname`='$subject' where `subid`='$id'";
	  $result=mysql_query($sql);
	  if($result)
	    header("Location:subject.php?msg=edited successfully");
	   else
	     header("Location:editsub.php?msg=unsuccessfull edition");
  }
  if(isset($_POST['question']))
  {
	  $question=$_POST['ques'];
	  $sub=$_POST['sj'];
	  $op1=$_POST['op1'];
	  $op2=$_POST['op2'];
	  $op3=$_POST['op3'];
	  $op4=$_POST['op4'];
	  $ans=$_POST['ans'];
	  $sql="insert into `question` values(null,'$question','$sub','$op1','$op2','$op3','$op4','$ans')";
	  $result=mysql_query($sql);
	  if($result)
	    header("Location:question.php?msg=question insertion successfully");
		else
		 header("Location:regques.php?msg=unsuccessfull insertion");
  }
 if(isset($_POST['qsub']))
 {
	 $question=$_POST['ques'];
	 $sub=$_POST['sj'];
	 $id=$_POST['quid'];
	  $op1=$_POST['op1'];
	  $op2=$_POST['op2'];
	  $op3=$_POST['op3'];
	  $op4=$_POST['op4'];
	  $ans=$_POST['ans'];
	 $sql="update `question` set `qname`='$question',`sid`='$sub',`op1`='$op1',`op2`='$op2',`op3`='$op3',`op4`='$op4' where `quid`='$id'";
	 $result=mysql_query($sql);
	 if($result)
	   header("Location:question.php?msg=updated successfully");
	   else
	     header("Location:editques.php?msg=updation unsuccesfull");
 }
 if(isset($_GET['dqid']))
 {
	 $id=$_GET['dqid'];
	 $sql="delete from `question` where `quid`='$id'";
	 $result=mysql_query($sql);
	 if($result)
	    header("Location:question.php?msg=deleted");
	   else
	      header("Location:question.php?msg=unable to delete");
 }
 if(isset($_GET['suid']))
 {
	 $id=$_GET['suid'];
	 $sql="delete from `subject` where `subid`='$id'";
	 $s="delete from `question` where `sid`='$id'";
	 $res=mysql_query($s);
	 $result=mysql_query($sql);
	 if($res && $result)
		 header("Location:subject.php?msg=deleted successfully");
		 else
		   header("Location:subject.php?msg=unable to delete");
 }
 if(isset($_POST['lin']))
 {
	 session_start();
	 $user=$_POST['uname'];
	 $pass=($_POST['pass']);
	 
	 $sql="select * from `admin` where `adname`='$user' and `password`='$pass'";
	 $result=mysql_query($sql);
	 $row=mysql_num_rows($result);
	 if($row>0)
	  {
		$_SESSION['usr']=$user;
	    header("Location:user.php");
	  }
		else
		  header("Location:index.php?msg=unable to login");
 }
?>