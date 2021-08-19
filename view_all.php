<?php
ob_start();//start the output buffer
session_start();
if($_SESSION['email']=="")
{
header("location:login.php");
}
include "connection.php"; //here we are making the php and mysql connection


/*
$language = array("PHP","Mysql","apache","Linux");

foreach ($language as $v) {
    echo "Current value of language: $v"."<br>";
}
*/



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home: Webpage </title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style3 {color: #FFFFFF}
-->
</style></head>

<body><table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td height="150" align="left" valign="middle"><table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="25%" height="150" align="center"> <width="177" height="80" /> </td>
        <td height="150">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
 <?php include "menu.php"; ?>
  <tr>
    <td height="600" align="left" valign="top"><table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="600" align="left" valign="top">
      <div style="width:950px; height:auto; border:5px #069 solid; border-radius:10px; margin-left:50px; margin-bottom:25px">
        <table width="100%" border="1" cellspacing="0" cellpadding="0">
          
          <tr>
            <td align="center" bgcolor="#333333"><span class="style3">ID</span></td>
            <td align="center" bgcolor="#333333"><span class="style3">Name</span></td>
            <td align="center" bgcolor="#333333"><span class="style3">Email </span></td>
            <td align="center" bgcolor="#333333"><span class="style3">Image</span></td>
            <td align="center" bgcolor="#333333"><span class="style3">Edit</span></td>
            <td align="center" bgcolor="#333333"><span class="style3">Delete</span></td>
            </tr>
          <?php
session_start();
include "connection.php"; //here we are making the php and mysql connection
$sel = "select * from register order by id desc";
$rs = mysql_query($sel);
while($row = mysql_fetch_assoc($rs))
 {                      //starting the loop
$id = $row['id'];
//echo "id is::".$id."<br>";
$fname = $row['fname'];
//echo "First name:".$fname . "<br/>";
$lname = $row['lname'];
$address = $row['address'];
$dob = $row['dob'];
$doj = $row['doj'];
$phone = $row['phone'];
$email = $row['email'];
//echo $email ."<br>";
$password = $row['password'];
$status = $row['status'];
$image1_type = $row['image1_type'];

?>
          <tr>
            <td align="center" valign="middle"><? echo $id;?></td>
            <td align="center" valign="middle"><? echo $fname;?></td>
            <td align="center" valign="middle"><? echo $email;?></td>
            <td align="center" valign="middle">
              <?php
	if($image1_type!="")
	{
	?>
              <img src="catalogue_image.php?id=<?php echo $id;?> " width='100	', height='100'/>
              <?php
	}
	else
	{
	?>
              <img src="images/noimg.gif" width="150" height="146" />
              <?php
	}
	?>       </td>
            <td align="center" valign="middle">
              
    <?php 
	if($_SESSION['email']==$email)
	{
	?>
              <a href="edit_profile.php?email_all=<? echo $email;?>">Edit</a>
              <?
	}
	else
	{
	echo "--";
	}
	 ?>    </td>
            <td align="center" valign="middle">
			<?php 
	if($_SESSION['email']==$email)
	{
	?>
              <a href="delete.php?del=<?php echo $email;?>" onClick="return confirm('Are You Sure You want to Delete ..?')">Delete</a>
              <?
	}
	else
	{
	echo "--";
	}
	 ?></td>
            </tr>
 
  <?php
  }    //closing the loop
  ?>
  </table>
  </div>
</td>
    </tr>
</table>
</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle">Footer </td>
  </tr>
</table>

</body>
</html>
