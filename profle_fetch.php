<?php
ob_start();//start the output buffer
session_start();
if($_SESSION['email']=="")
{
header("location:login.php");
}
//echo $_SESSION['email']."<br>";
include "connection.php"; //here we are making the php and mysql connection
$search = $_REQUEST['search'];
//echo "our session name is ::".$_SESSION['email'];
//echo "search is::".$search;
$sel = "select * from register where email ='".$_SESSION['email']."'";
//echo $sel; 
$rs  = mysql_query($sel);
$row = mysql_fetch_assoc($rs);// this will fetch value from database table as assiciative array.
//print_r($row )."<br>";
//print_r ($row = mysql_fetch_assoc($rs));
$id = $row['id'];//in register table column name is ID
//echo "My id is::".$id;
$fname = $row['fname'];//fname is nothing but table field name...
//echo "fnameissssssssssssssssssssssss".$row['fname'];
//$_SESSION['firstname']= $fname;
//echo  "here first name will come::".$fname;
$lname = $row['lname'];  // lname is table fields name
$address = $row['address'];// // fname is table fields name
//echo "what is your address:".$address;
$dob = $row['dob'];
$doj = $row['doj'];
$phone = $row['phone'];
$email = $row['email'];
$password = $row['password'];
$status = $row['status'];
?>