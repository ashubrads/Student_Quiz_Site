<?php
$q = $_GET['q'];
include "connect.php";
$sql="SELECT * FROM `user` WHERE `username` = '".$q."'";
//$sql="SELECT * FROM `states` WHERE `country_id` = '1'";
$result = mysql_query($sql);
$a=mysql_num_rows($result);

if($a)
{
echo "invalid username";
}

?>