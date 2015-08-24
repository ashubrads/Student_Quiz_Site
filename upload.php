<?php
   function file_upload($pict)
   {
	   $ext=explode(".",$pict);
       $x=end($ext);
       if($x=="jpg" || $x=="png" || $x=="gif")
       {
        $newname=md5(rand(1,1000).$pict).".".$x;
	    $target="images/$newname"; 
            $t="admin/$target";
	   if(!copy($_FILES['pic']['tmp_name'],$t))
	     header("Location:reg.php?msg=uploading problem");
       }
	  else
        header("Location:reg.php?msg=photo format not supported"); 
	return $target;
   }
    if($picture!="")
   {
      $targ=file_upload($picture);
   }
   else
   {
     $targ="images/adminpic.jpg";
   }
?>