<?php
 session_start();
 include 'top.php';
 include 'connect.php';
 $id=$_SESSION['uid'];
 $sql="select * from `user` where `userid`='$id'";
 $result=mysql_query($sql);
 $row=mysql_fetch_array($result);
?>
<style>
 .mydiv{
	 border:0px solid #DADADA;float:left;width:83.5%;height:600px;margin-top:0px;
 }
 .mydiv span
 {
	 
	 margin-left:30px;font-size:27px;border-bottom:1px solid #DADADE;
	 margin-top:0px;padding-bottom:10px;font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	 box-shadow:5px 5px 5px #DADADA;background:skyblue;
 }
 .mydiv span a{ text-decoration:none;color:white}
 
</style>
  <div style="font-size:24px;color:white;height:40px;text-shadow:1px 1px 1px white;margin:20px 20px 20px 20px;background: -moz-linear-gradient(left,#09F,white);padding-top:5px;">
     Hi,<?=$row['username']?>
  </div>
 
    <div style="border-right:1px solid #DADADA;float:left;height:700px;width:15%;margin-top:10px">
      <div style="border-bottom:1px solid #DADADA;margin-top:10px;padding-bottom:10px;margin-right:10px"><img src="admin/<?=$row['picture']?>" width=180px height=180px /></div>
      <div></div>
    </div>
   
    <div  class="mydiv" style="">
       <span style="margin-left:600px"><a href="profile.php">View Profile</a></span>
       <span><a href="editprofile.php">Edit Profile</a></span>
       <span><a href="logout.php">Log Out</a></span>
       
    </div>
    <div style="margin-left:50px;border:1px solid #DADADA;float:left;clear:left;background:#EFEFEF;box-shadow:2px 2px 2px #EFEFEF"><a href="index.html" style="text-decoration:none">RETURN TO LOGIN PAGE</a></div>
<?php
 include 'footer.php';
?>