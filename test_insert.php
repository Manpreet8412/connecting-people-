<?php
ob_start();
include "conn.php";
$name = $_REQUEST['name'];

$email = $_REQUEST['email'];
echo $email ;
$password = $_REQUEST['password'];
$address = $_REQUEST['address'];
$country = $_REQUEST['country'];

$qry = "insert into regis (name, email, password, address, country) values ('$name','$email','$password','$address','$country')";
//echo $qry;
$rs = mysql_query ($qry);
if($rs)
{
header ("location: login.php");

}
?>