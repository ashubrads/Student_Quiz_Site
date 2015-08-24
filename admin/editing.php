<?php
 include 'connect.php';
   $id=$_GET['id'];
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
   $sql="update`user`set `username`='$username',`password`='$password',`email`='$email',`city`='$city',`address`='$address',
   `picture`='$targ',`course`='$course',`totalMarks`='$total',`marksObt`='$marks',`grade`='$grade' where `userid`='$id'";
  $result=mysql_query($sql);
  if($result)
	  header("Location:user.php?msg=Records updated sucessfully");
  else
      header("Location:user.php?msg=Problem occured while updating the records");
?>	