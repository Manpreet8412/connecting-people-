<?php
global $conn;   
$conn = mysql_connect("localhost","root","") or die ('host name problem: ' . mysql_error());
   //host name(localhost), user name (root), password(blank)
$db = mysql_select_db("dept_mis") or die ('System cannot connect to the database because: ' . mysql_error());
if (!$db)
	{
   		echo "DATABASE NOT CONNECT";
   
	}

?>