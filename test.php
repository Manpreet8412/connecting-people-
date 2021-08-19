<?php
$firstname = "rama";
$lastname = "ganti";
$final = $firstname . "&nbsp;". $lastname ;
echo $final;


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="f1" method="post" action="test_insert.php">
<table width="50%" border="0" align="center" bgcolor="#CCCCCC">
  <tr>
    <td colspan="2" align="center">Registration page</td>
  </tr>
  <tr>
    <td width="32%" align="right" valign="middle">Name</td>
    <td width="68%"><input type="text" name="name" id="name" /></td>
  </tr>
  <tr>
    <td align="right" valign="middle">email</td>
    <td><input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td align="right" valign="middle">pass</td>
    <td>
        <input type="text" name="password" id="password" />
        
    </td>
  </tr>
  <tr>
    <td align="right" valign="middle">address</td>
    <td><textarea name="address" id="address" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td align="right" valign="middle">country</td>
    <td><select name="country" id="country">
      <option>select contry</option>
      <option value="india">india</option>
      <option value="pakistan">pakistan</option>
      <option value="china">china</option>
      <option value="srilanka">srilanka</option>
      <option value="japan">japan</option>
    </select>
    </td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td>
    <input type="submit" name="button" id="button" value="SAVE" />
    <input type="reset" name="button2" id="button2" value="Cancel" /></td>
  </tr>
</table>
</form>
</body>
</html>
