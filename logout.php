<?php
   session_start();
   if(isset($_SESSION['u']))
   {
	  unset($_SESSION['u']);
	  unset($_SESSION['p']);
	  header("Location:index.php?msg=Log out");
   }
?>