<?php
ob_start();// output buffer. 
include "connection_dept.php"; //here we are making the php and mysql connection

/*
how to read value which is coming from register page:
1) $_POST['name-of-text-field'];// from one page to another page using post method. Means if in register page method=post 
2) $_REQUEST['name-of-text-field'];//from one page to another page    ||  you can get the value from url as well as body. Means if in register page method=get or post any
3) $_GET['name-of-text-field'];// this is only for getting the value from url
 Means if in register page method=get
*/
/*
why 0777
The first number is always zero
The second number specifies permissions for the owner
The third number specifies permissions for the owner's user group
The fourth number specifies permissions for everybody else
1 = execute permissions
2 = write permissions
4 = read permissions
--------
total 7   => 0777
*/


$emp_name = $_POST['emp_name'];  //WE ARE READING THE HTML VALUE AND STORING INTO PHP VARIABLE
$emp_email = $_REQUEST['emp_email'];
//echo $lastname."<br>";
$emp_pass = $_REQUEST['emp_pass'];
$emp_phone = $_REQUEST['emp_phone'];
$emp_dob=$_REQUEST['emp_dob'];
$emp_address=$_REQUEST['emp_address'];
$emp_city=$_REQUEST['emp_city'];
$emp_doj=$_REQUEST['emp_doj'];
$status = "Active";

$qry = "insert into mis_emp (emp_name,emp_email,emp_pass,emp_phone,emp_dob,emp_address,emp_city,emp_doj,emp_status) values ('$emp_name','$emp_email','$emp_pass','$emp_phone','$emp_dob','$emp_address','$emp_city','$emp_doj','$status')" ;

$rs = mysql_query($qry);
if($rs)
{
header("location:loginaa.php");	
}

?>