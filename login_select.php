<?php
session_start();
include 'connection.php';
?>
<?php
$email=$_REQUEST['email'];
//echo $email ."<br>";
$pass=$_REQUEST['pass'];
//echo $pass ."<br>";
$qry1="select * from register where email='".$email."' and  password='".$pass."'";
//echo $qry1;
$rs=mysql_query($qry1); //this is used for execute the query
//echo $rs;
$no_of_rows=mysql_num_rows($rs);//how many rows are affect in mysql operation
//echo "<font color='red'>".$no_of_rows."</font>";
$row=mysql_fetch_assoc($rs);
//$fname=$row['fname'];
if($no_of_rows==0)
{
?>
<script>
//alert("invalide user id and pass");
location.href="login.php?stat=N";
</script>
<?
}
else
{
if($no_of_rows==1)
{
	 
  $_SESSION['email']=$email;
   //$_SESSION['fname']=$fname;
   //session_register("fname");
   //$fname="ranjan";
  //echo "Session Created";
  if($remember)
     	{
	   		setcookie("cookname", $email, time()+60*60*24*30, "/");
       		setcookie("cookpass", $pass, time()+60*60*24*30, "/");
     	}
?>
<script>location.href="profile.php?email=<? echo $_SESSION['email']?>";</script>
<?php
}
}//close of else
?>
