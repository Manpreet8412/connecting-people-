<?php
ob_start();
session_start();
include "connection.php"; //here we are making the php and mysql connection
$search = $_REQUEST['search'];
echo "you are searching : ".$search;
//echo "our session name is ::".$_SESSION['email'];
//$row = mysql_fetch_assoc($rs);

 
 if($search!="")
	{     // if condition start
		$sel = "select * from register where email like '%$search%' or fname like '%$search%' or lname like '%$search%' order by id desc";
//echo "your query is ".$sel;
/*email like '%ranjan%'  => any where in email whether it is right/left/middle, fetch those records

email like 'ranjan%'  => any where in email whether it is start from left, fetch those records   ranjanp  ranjanpr

email like '%ranjan'  => any where in email whether it is right side, fetch those records   prranjan  pranjan
order by id : asc or decending order
DESC : decending
if you are not mentioning desc mean it is acending
*/
$rs = mysql_query($sel);
$num = mysql_num_rows($rs);
//echo "This many row affected::".$num;


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
.style1 {color: #CCCCCC}
.style2 {color: #990033}
.style3 {color: #00FF00}
.style4 {color: #FF3333}
.style5 {color: #663300}
.style6 {color: #FFFFFF}
-->
</style></head>

<body><table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td height="150" align="left" valign="middle"><table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="25%" height="150" align="center"><img src="images/logo1.jpg" width="177" height="80" /></td>
        <td width="75%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  
  <?php include "menu.php"; ?>
  <tr>
    <td height="600" align="left" valign="top"><table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="600" align="right" valign="top"><strong>Welcome <? echo $_SESSION['email']?></strong>
      &nbsp;<? echo $_SESSION['firstname'];?> &nbsp; &nbsp; &nbsp;<a href="edit_profile.php?email=<? echo $_SESSION['email'];?>">Edit Profile</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="all.php">Disply all</a> </h3>
      <p align="center">
        <?php echo "You searched.. : ".$msg;?>


<?php           
if($num>0)
{

	?>
        <div style="border:4px solid #06C; height:auto; width:97%; display:block; border-radius:10px; margin:20px 0 0 0; padding:0 5px 0 5px">
          <table width="95%" border="0">
            <tr>
              <td width="27%" bgcolor="#333333"><span class="style1 style6">Image</span></td>
              <td width="23%" bgcolor="#333333"><span class="style2 style6">First  Name</span></td>
              <td width="14%" bgcolor="#333333"><span class="style3 style6">Last Name</span></td>
              <td width="9%" bgcolor="#333333"><span class="style4 style6">Phone</span></td>
              <td width="13%" bgcolor="#333333"><span class="style5 style6">Email</span></td>
              <td width="14%" bgcolor="#333333"><span class="style6 style6">dob</span></td>
              </tr>
<?php
  while($row = mysql_fetch_assoc($rs))  //this well fectch all the value from database
{
$id = $row['id'];//In register table,  id is field name 
//echo "id ".$id."<br>";
$fname = $row['fname'];  ///$row of table fileds name
//echo $fname."<br>";
$lname = $row['lname'];
$address = $row['address'];
$dob = $row['dob'];
$doj = $row['doj'];
$phone = $row['phone'];
$email = $row['email'];
$password = $row['password'];
$status = $row['status'];
//print_r($row);
?>
            
  <tr>
    <td height="30" bordercolor="#990033" bgcolor="#CCCCCC"><img src="catalogue_image.php?id=<?php echo $id;?>" width="100px" height="100px"  /></td>
    <td bordercolor="#990033" bgcolor="#CCCCCC"><?php echo $row['fname'];?></td>
    <td bordercolor="#990033" bgcolor="#CCCCCC"><?php echo $lname ;?></td>
    <td bordercolor="#990033" bgcolor="#CCCCCC"><?php echo $row['phone'];?></td>
    <td bordercolor="#990033" bgcolor="#CCCCCC"><?php echo $row['email'];?></td>
    <td bordercolor="#990033" bgcolor="#CCCCCC"><?php echo $doj;?></td>
  </tr>
      
 <?php }//while loop  ?>
  </table>
  
 <?php
 }// close if 
 else
 {
   echo "No record found"; 
 }
 
 
 
 
 
 ?>
  
  </div>
      <div align="center" style="color:#FF0000"> 
        <?php
 } //close of if condition
 
 ?>
        
        </div>
      </p>      </td>
    </tr>
</table></td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle">Copyright © 2007 php2ranjan.com. All Rights Reserved.</td>
  </tr>
</table>

</body>
</html>
