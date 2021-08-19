<?php
include "connection.php"; //here we are making the php and mysql connection

$fname = $_POST['fname'];

$lastname = $_POST['lname'];

$address = $_POST['address'];
$email = $_POST['email'];
$dob = $_POST['dob'];

$sql = "insert into register (fname,lname,address,dob,email) values ('$fname','$lastname','$address','$dob','$email')";
echo $sql;
mysql_query ($sql);



?>