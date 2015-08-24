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
 
 .mydiv div
 {
	 
	 margin-left:30px;font-size:27px;border-bottom:1px solid #DADADE;
	 margin-top:30px;padding-bottom:10px;font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	 box-shadow:5px 5px 5px #DADADA;
 }
 .mydiv span
 {
	 
	 margin-left:30px;font-size:27px;border-bottom:1px solid #DADADE;
	 margin-top:0px;padding-bottom:10px;font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	 box-shadow:5px 5px 5px #DADADA;background:skyblue;
 }
 .mydiv span a{ text-decoration:none;color:white}
 
 .mydiv div span{
	 font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;font-size;20px;
	 margin-left:6px;color:#09F;background:none;box-shadow:0px 0px 0px 0px;border:0px;
 }
.mydiv div span input[type="text"]{
	 font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;font-size:25px;
	 margin-left:6px;color:#09F;background:none;box-shadow:0px 0px 0px 0px;border:0px;
 }
.mydiv div span select{
	 font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;font-size:25px;
	 margin-left:6px;color:#09F;background:none;box-shadow:0px 0px 0px 0px;border:0px;
 }
.mydiv div span input[type="password"]{
	 font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;font-size:25px;
	 margin-left:6px;color:#09F;background:none;box-shadow:0px 0px 0px 0px;border:0px;
 }
 .mydiv div span input[type="submit"]{ color:skyblue; text-decoration:none; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;font-size:25px;
	 margin-left:6px;color:#09F;background:none;box-shadow:0px 0px 0px 0px;border:0px;}
 .mydiv div span input[type="submit"]:hover{ text-decoration:underline;}
 .myspan{ float:right;}

</style>
  <div style="font-size:24px;color:white;height:40px;text-shadow:1px 1px 1px white;margin:20px 20px 20px 20px;background: -moz-linear-gradient(left,#09F,white);padding-top:5px">
     Hi, <?=$row['username']?> 
  </div>
 <div style="width:100%;border:0px solid #DADADA;height:800px;margin-top:10px;">
    <div style="border-right:1px solid #DADADA;float:left;height:700px;width:15%;margin-top:10px">
      <div style="border-bottom:1px solid #DADADA;margin-top:10px;padding-bottom:10px;margin-right:10px"><img src="admin/<?=$row['picture']?>" width=180px height=180px /></div>
      <div></div>
    </div>
   
    <div  class="mydiv" style="">
       <span style="margin-left:600px"><a href="editprofile.php">View Profile</a></span>
       <span><a href="editprofile.php">Edit Profile</a></span>
       <span><a href="logout.php">Log Out</a></span>
       <form action="editing.php?id=<?=$id?>" method="post"><div style="margin-top:180px">USERNAME:<span><input type="text" value="<?=$row['username']?>" name="usr"/></span><span class="myspan"><input type="submit" value="edit"/></div></form>
       <form action="editing.php?id=<?=$id?>" method="post"><div>PASSWORD:<span><input type="password" value="<?=$row['password']?>" name="pass"/></span><span class="myspan"><input type="submit" value="edit"/></div></form>
       <form action="editing.php?id=<?=$id?>" method="post"><div>EMAIL:<span><input type="text" value="<?=$row['email']?>" name="em"/></span><span class="myspan"><input type="submit" value="edit"/></div></form>
       <form action="editing.php?id=<?=$id?>" method="post"><div>CITY:<span><input type="text" value="<?=$row['city']?>" name="ct"/></span><span class="myspan"><input type="submit" value="edit"/></div></form>
       <form action="editing.php?id=<?=$id?>" method="post"><div>PHONE:<span><input type="text" value="<?=$row['phone']?>" name="ph"/></span><span class="myspan"><input type="submit" value="edit"/></div></form>
       <form action="editing.php?id=<?=$id?>" method="post"><div>ADDRESS:<span><input type="text" value="<?=$row['address']?>" name="addr"/></span><span class="myspan"><input type="submit" value="edit"/></div></form>
       <form action="editing.php?id=<?=$id?>" method="post"><div>COURSE:<span><select name="cou">
                                         <option value="none">select</option>
					<?php
         				    $cou=array("BCA","MCA","DCA");
						foreach($cou as $c):
					?>
                                         <option value="<?=$c?>" <?php if($row['course']==$c)
									{
										echo 'selected="selected"';
								        }
							 	?>><?=$c?></option>
					<?php endforeach; ?>
                                   </select></span><span class="myspan"><input type="submit" value="edit"/></div></form>
       
    </div>
    <div style="margin-left:50px;margin-top:90px;border:1px solid #DADADA;float:left;clear:left;background:#EFEFEF;box-shadow:2px 2px 2px #EFEFEF"><a href="index.php" style="text-decoration:none">RETURN TO LOGIN PAGE</a></div>
 </div>
<?php
 include 'footer.php';
?>