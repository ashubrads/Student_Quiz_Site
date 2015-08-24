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
	 border:0px solid #DADADA;float:left;width:83.5%;height:600px;margin-top:200px;
 }
 .mydiv div
 {
	 
	 margin-left:30px;font-size:27px;border-bottom:1px solid #DADADE;
	 margin-top:30px;padding-bottom:10px;font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	 box-shadow:5px 5px 5px #DADADA;
 }
 .mydiv div span{
	 font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;font-size;20px;
	 margin-left:6px;color:#09F;
 }
 .mypr{ border:1px solid skyblue;width:400px;height:100px;font-size:24px;margin:auto;padding:50px 0px 0px 150px;font-family:"Trebuchet MS", Arial, Helvetica, sans-serif }
</style>
  <div style="font-size:24px;color:white;height:40px;text-shadow:1px 1px 1px white;margin:20px 20px 20px 20px;background: -moz-linear-gradient(left,#09F,white);padding-top:5px">
     HI! <?=$row['username']?> 
  </div>
 <div style="width:100%;border:0px solid #DADADA;height:700px;margin-top:10px">
    <div style="border-right:1px solid #DADADA;float:left;height:700px;width:15%;margin-top:10px">
      <div style="border-bottom:1px solid #DADADA;margin-top:10px;padding-bottom:10px;margin-right:10px">><img src="admin/<?=$row['picture']?>" width=180px height=180px /></div>
      <div></div>
    </div>
   <?php if($row['grade']!=NULL)
         {
	   ?>
    <div  class="mydiv" style="">
       <div>USERNAME:<span><?=$row['username']?></span></div>
       <div>EMAIL:<span><?=$row['email']?></span></div>
       <div>CITY:<span><?=$row['city']?></span></div>
       <div>PHONE:<span><?=$row['phone']?></span></div>
       <div>ADDRESS:<span><?=$row['address']?></span></div>
       <div>COURSE:<span><?=$row['course']?></span></div>
       <div>TOTAL MARKS:<span><?=$row['totalMarks']?></span></div>
       <div>MARKS OBTAINED:<span><?=$row['marksObt']?></span></div>
       <div>GRADE:<span><?=$row['grade']?></span></div>
    </div>
    <?php
	  }
	   else
	   {
	 ?>
	    <div class="mypr">Your Result is pending..</div>
      <?php } ?>
    <div style="margin-left:50px;border:1px solid #DADADA;float:left;clear:left;background:#EFEFEF;box-shadow:2px 2px 2px #EFEFEF"><a href="index.php" style="text-decoration:none">RETURN TO USER PAGE</a></div>
 </div>
<?php
 include 'footer.php';
?>