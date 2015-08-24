<?php
  include 'connect.php';
  $id=$_GET['id'];
  $sql="delete from `user` where userid='".$id."'";
  $result=mysql_query($sql);
  if($result)
   header("Location:user.php?msg=records deleted");
    else
     header("Location:user.php?msg=problem in deleting file");
?>