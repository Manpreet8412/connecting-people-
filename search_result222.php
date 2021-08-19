<?php
session_start();
include ("header.php");
include ("connection.php");

$sql = "select * from users where email = '".$_SESSION['email']."'";
//echo $sql ;
$rs = mysql_query($sql);
$row = mysql_fetch_assoc($rs);
//print_r($row);

$id = $row['user_id'];
//echo "id issssssssssssssssssssssssss".$id;
$firstname = $row['firstname'];
$username = $row['username'];
$password = $row['password'];
$email = $row['email'];
$mobile = $row['mobile'];



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name = "frmProfile" id="frmProfile" action="" method="post">
<table width="1110" border="1" align="center"> 
  <tr>
    <td width="1077" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="500" colspan="3" align="center"><table width="325" border="0">
      <tr>
        <td colspan="2" align="center">Welcome to Profile</td>
        </tr>
      <tr>
        <td width="98">First Name:</td>
        <td width="211"><?php echo $row['firstname']; ?></td>
      </tr>
      <tr>
        <td>User Name:</td>
        <td><?php echo $row['username']; ?></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><?php echo $row['password']; ?></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><?php echo $row['email']; ?></td>
      </tr>
      <tr>
        <td>Mobile:</td>
        <td><?php echo $row['mobile']; ?></td>
      </tr>
      <tr>
        <td>File upload:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Image:</td>
        <td><img src="../kalpesh/dummyproject/cat_image.php?id=<?php echo $id; ?>"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3" align="center">C CopyRigth 2011.</td>
  </tr>
</table>
</form>


</body>
</html>
