
<?php
$stat =$_REQUEST['stat'];
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

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td height="150" align="left" valign="middle"><table width="100%" border="1" cellspacing="0" cellpadding="0">
       <tr>
        <td width="25%" height="150" align="center"><a href="index.php"><img src="images/logo1.jpg" width="177" height="80" /></a></td>
        <td width="75%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="30" align="center" valign="middle"><a href="index.php"> Home </a>|<a href="forgotpass.php">Forgot password</a>|<a href="register.php">Register</a>|<a href="login.php">Login</a></td>
  </tr>
       
  <tr>
    <td height="600" align="left" valign="top"><table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="72%" height="600" align="left" valign="top">
    <form name="register" action="insert_register.php" method="post" enctype="multipart/form-data" >
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td colspan="3" align="left" valign="middle">
   
    <?php
   if($stat!="")
   {
    echo "<font color='#FF0000'>your record is deleted, please register again..</font>";
   }
    ?>
    </td>
	</tr>
  <tr>
    <td width="33%" align="right" valign="middle">First Name</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
   
    <input type="text" name="fname" id="fname" /></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
  <tr>
    <td width="33%" align="right" valign="middle">Last Name</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="text" name="lname"  />    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Address</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <textarea name="address" cols="16" rows="3" id="address">
        </textarea></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Date of Birth</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="text" name="dob" />    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Date of Join</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="text" name="doj" id="doj" />    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Phone</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="text" name="phone" id="phone" />    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Email</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="text" name="email" />    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Password</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="password" name="password1" id="password1" />    </td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle">File upload</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">
    <input type="file" name="fileupload"  /></td>
  </tr>
  <tr>
    <td align="right" valign="middle"></td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle">small image upload</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">
    <input type="file" name="smallimg" id="phupload" /></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle">upload big image</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">
    <input type="file" name="bigimg"  /></td>
  </tr>
  
 <!--<tr>
    <td align="right" valign="middle">upload big image</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="left" valign="middle"><input type="file" name="phupload2" id="phupload2" /></td>
  </tr>-->
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
  <tr>
    <td width="33%" align="right" valign="middle">&nbsp;</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
  <tr>
    <td width="33%" align="right" valign="middle">&nbsp;</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="submit" name="button" id="button" value="Submit" />&nbsp;&nbsp;&nbsp;
        <input type="reset" name="button2" id="button2" value="Cancel" />    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
</table>
    </form>
    
</td>
    <td width="28%">&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
  
  
   <?php include "footer.php"; ?>
</table>
</body>
</html>
