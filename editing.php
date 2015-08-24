<?php
 include 'connect.php';

 if(isset($_POST['usr']))
 {
    $user=$_POST['usr'];
    $id=$_GET['id'];
    $sql="update `user` set `username`='$user' where `userid`='$id'";
    $result=mysql_query($sql);
    if($result)
      header("Location:editprofile.php?id=$id");
     else
       echo "update not successfully";
  }
 if(isset($_POST['em']))
 {
    $email=$_POST['em'];
    $id=$_GET['id'];
    $sql="update `user` set `email`='$email' where `userid`='$id'";
    $result=mysql_query($sql);
    if($result)
	header("Location:editprofile.php?id=$id");
      
     else
       echo "update not successfully";
  }
 if(isset($_POST['pass']))
 {
    $password=$_POST['pass'];
    $id=$_GET['id'];
    echo $id;
    $sql="update `user` set `password`='$password' where `userid`='$id'";
    $result=mysql_query($sql);
    if($result)
      header("Location:editprofile.php?id=$id");
     else
       echo "update not successfully";
  }
 if(isset($_POST['ct']))
 {
    $city=$_POST['ct'];
    $id=$_GET['id']; 
    $sql="update `user` set `city`='$city' where `userid`='$id'";
    $result=mysql_query($sql);
    if($result)
      header("Location:editprofile.php?id=$id");
     else
       echo "update not successfully";
  }
 if(isset($_POST['ph']))
 {
    $phone=$_POST['ph'];
    $id=$_GET['id'];
    $sql="update `user` set `phone`='$phone' where `userid`='$id'";
    $result=mysql_query($sql);
    if($result)
      header("Location:editprofile.php?id=$id");
     else
       echo "update not successfully";
  }
  if(isset($_POST['addr']))
 {
    $address=$_POST['addr'];
    $id=$_GET['id'];
    $sql="update `user` set `address`='$address' where `userid`='$id'";
    $result=mysql_query($sql);
    if($result)
      header("Location:editprofile.php?id=$id");
     else
       echo "update not successfully";
  }
 if(isset($_POST['cou']))
 {
    $course=$_POST['cou'];
    $id=$_GET['id'];
    $sql="update `user` set `course`='$course' where `userid`='$id'";
    $result=mysql_query($sql);
    if($result)
      header("Location:editprofile.php?id=$id");
     else
       echo "update not successfully";
  }
?>