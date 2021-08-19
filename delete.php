<?php
ob_start();
session_start();
include "connection.php"; //here we are making the php and mysql connection
$del= "delete from register where email ='".$_REQUEST['del']."'";
//echo $del. "<br>";
$rs_del = mysql_query($del) or die (mysql_error());
/*
error handle:
1) this you can pass after any variable =>     or die (mysql_error());
2) print the sql query and copy the query in browser and paste into phpmyadmin
*/
if($rs_del)
{
header("location:register.php?stat=del");
}
?>