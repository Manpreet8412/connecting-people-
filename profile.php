<?php
include "profle_fetch.php";
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
  <?php require_once "menu.php"; ?>
  <tr>
    <td height="600" align="left" valign="top"><table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="72%" height="600" align="right" valign="top"><strong>Welcome <? echo $_SESSION['email'];?></strong>
    <?php //echo $sel; ?>
    &nbsp;<? echo $_SESSION['firstname'];?> &nbsp; &nbsp; &nbsp;<a href="edit_profile.php?email=<? echo $_SESSION['email'];?>">Edit Profile</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="view_all.php">Disply all</a> </h3>
        <p>
         <div style="border:4px solid #06C; height:auto; width:90%; display:block; border-radius:10px; margin:20px 0 0 0; padding:0 5px 0 5px">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%" align="right" valign="middle">First Name</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle"><?php echo $fname;?></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
  <tr>
    <td width="33%" align="right" valign="middle">Last Name</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle"><?php echo $row['lname'];?></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Address</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle"><?php echo $address;?></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Date of Birth</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle"><?php echo $dob;?></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Date of Join</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle"><?php echo $doj;?></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Phone</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle"><?php echo $phone;?></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Email</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle"><?php echo $email;?></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Password</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle"><?php echo md5($password);?></td>
  </tr>
  <tr>
    <td width="33%" align="right" valign="middle">My small image</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
    <img src="catalogue_image.php?id=<?php echo $id;?>" width="200" height="200"   />  
  <!--<img src="images/logo1.jpg" width="177" height="80" />--></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle">My Big image</td>
    <td align="center" valign="middle">:</td>
    <td align="left" valign="middle">
    <img src="catalogue_image_big.php?id=<?php echo $id;?>" alt="" width="300" height="300"/></td>
  </tr>
  <tr>
    <td align="right" valign="middle">you files</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">
    <?php
	//header("Content-type: application/force-download");
	?>
    <a href="uploads/<?php echo $row['filename']?>"  target="_blank" >Click to Download( <?php
	//header("Content-type: application/force-download");
	 echo $row['filename'];
	 ?>) </a></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><a href="test.php"> Test Drive </a></td>
    <td align="center" valign="middle">
<!--  <img src="logo.gif" />-->    </td>
    <td align="left" valign="middle">
    <img src="images/logo.gif" width="200" height="96"  />
    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle">    </td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
  <tr>
    <td colspan="3" align="right" valign="middle">&nbsp; </td>
    </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
</table>
</div>
</p>      </td>
    <td width="28%">&nbsp;</td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle">Copyright © 2007 php2ranjan.com. All Rights Reserved.</td>
  </tr>
</table>

</body>
</html>
