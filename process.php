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
   include 'upload.php';  
  $sql="insert into `user` values(NULL,'$username','$password','$city','$phone','$email',CURDATE(),'$address','$targ','$course','','','')";
  $result=mysql_query($sql);
  if($result)
    {
	  header("Location:index.php?msg=registered successfully");
   }
  else
      header("Location:index.php?msg=Problem occured while adding the records");
 }
 
 //login
 session_start();
 if(isset($_POST['lsub']))
 {
	  $user=$_POST['us'];
	  $password=$_POST['pass'];
	  $sql="select * from `user` where `username`='$user' and `password`='$password'";
	  $result=mysql_query($sql);
	  $row=mysql_fetch_array($result);
	  $c=mysql_num_rows($result);
	  if($c>0)
	  {
		  $_SESSION['u']=$user;
		  $_SESSION['p']=$row['picture'];
		  $_SESSION['uid']=$row['userid'];
		  header("Location:.?msg=login successfull");
	  }
	  else
	      header("Location:.?msg=login not successfull");
 }
 if(isset($_POST['fsub']))
 {
	$id=$_SESSION['uid'];
	$topic=$_POST['top'];
	$sql="insert into `forum` values(null,'$id','$topic',CURDATE())";
	$result=mysql_query($sql);
	if($result)
	  header("Location:forum.php?msg=successfully added");
	  else
	    header("Location:forum.php?msg=unsucessfull");
 }
 if(isset($_POST['fdel']))
 {
	 $id=$_POST['fid'];
	 $sql="delete from `forum` where `fid`='$id'";
	 $result=mysql_query($sql);
	 if($result)
	    header("Location:forum.php?msg=topic successfully deleted");
		else
		 header("Location:forum.php?msg=unable to delete the topic");
 }
?>	