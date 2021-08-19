<?php
ob_start();//start the output buffer
session_start();
if($_SESSION['email']=="")
{
header("location:login.php");
}
include "connection.php"; //here we are making the php and mysql connection




/* select value and show to form , start here*/
$sel = "select * from register where email ='".$_SESSION['email']."'";
//echo "your qury is ::".$sel;
$rs = mysql_query($sel);
$row = mysql_fetch_assoc($rs);//fetch value from database table based on the table column name.
//print_r($row );
$id = $row['id'];//FETCHING ID OF THIS EMAIL
$fname = $row['fname']; //register table , ther is fname field
$lname = $row['lname'];
$address = $row['address'];
$dob = $row['dob'];
$doj = $row['doj'];
$phone = $row['phone'];
$email = $row['email'];
$password = $row['password'];
$status = "active";
/* select value and show to form , close here*/




/* update the value start here */
if(isset($_REQUEST['submit'])=="Update")
{
//here we are reading all the updated values from Form.....
//$email_all = $_REQUEST['email_all'];
$fname_update = $_REQUEST['fname'];//fname is our text fields name. updated value reading here.
$lname_update = $_REQUEST['lname'];//ranjan
$address_update = $_REQUEST['address'];
$dob_update = $_REQUEST['dob'];
$doj_update = $_REQUEST['doj'];
$phone_update = $_REQUEST['phone'];
$email_update = $_REQUEST['email'];
$password_update = $_REQUEST['password1'];
$status_update= $_REQUEST['status'];	
//"update tablename set tablefieldname = '$updatedphpvariable',tablefieldname = '$phpvariable' where emailorid = 'phpvar'";
	$update= "update register set 
		fname = '".$_REQUEST['fname']."',
		lname = '$lname_update',
		address = '$address_update',
		dob = '$dob_update',
		doj = '$doj_update',
		phone = '$phone_update',
		email = '$email_update',
		password = '$password_update',
		status = '$status' where email ='".$_SESSION['email']."'";
		//echo $update ;
		$rs_up = mysql_query($update);
			
		if(isset($_FILES['smallimg'])&& $_FILES['smallimg']['name']!="")
		{	
	$smallimg = fopen( $_FILES['smallimg']['tmp_name'], "r"); 
	$smallimg = fread($smallimg,$_FILES['smallimg']['size']); 
	$smallimg = addslashes($smallimg);
	$smallimg_type=$_FILES['smallimg']['type'];
			if($smallimg_type!="")
			{
				$str_image2="update register set image1='$smallimg',image1_type='$smallimg_type' where email ='".$_SESSION['email']."'";
				//echo $str_image2;
				mysql_query($str_image2) or die(mysql_error());
			}
		
		}
		
		if(isset($_FILES['bigimg'])&& $_FILES['bigimg']['name']!="")
		{	
		$bigimg = fopen( $_FILES['bigimg']['tmp_name'], "r"); 
		$bigimg = fread($bigimg,$_FILES['bigimg']['size']); 
		$bigimg = addslashes($bigimg);
		$bigimg_type=$_FILES['bigimg']['type'];
			if($bigimg_type!="")
			{
				$str_image3="update register set image2='$bigimg',image2_type='$bigimg_type' where email ='".$_SESSION['email']."'";
				//echo "update img2".$str_image3;
				mysql_query($str_image3) or die(mysql_error());
			}
		
		}
		

	if(isset($_FILES['file_name'])&&$_FILES['file_name']['name']!="")
		{
			
$foldername = 'uploads/';
$tmpname = $_FILES['file_name']['tmp_name'];//retriving the temporary name of file
$orgname = $_FILES['file_name']['name']; // retriving the original name of file
$destination = $foldername.$orgname;  // creating the destination folder
copy($tmpname,$destination); //coping the file from temp folder to desitination folder
chmod($destination,0777);// file permission (read , write and execute mode)
unlink($tmpname);//unlink is useed for deleting the file from temp folder
$filename = $_FILES['file_name']['name'];  // retriving the original name of file

	

				$str_image_file="update register set filename='$filename' where email ='".$_SESSION['email']."'";
				mysql_query($str_image_file) or die(mysql_error());
			
		}
		
		
		

//echo $update;

//$num= mysql_num_rows($rs_up);
//echo "number of row is :".$num;
if($rs_up)
{
?>
<script language="javascript">location.href="profile.php?email=<? echo $_SESSION['email'] ?>";</script>
<?
 }
 }
/* update the value close here */ 
 
 //header("location:memberlogin.php?uniq_rand=".md5(uniqid(rand()))."&post_message=".urlencode("<b><font color=red>Thanks,</font> You have been successfully registered. Please login to the member section.</b>")."");

 
 
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
        <td width="25%" height="212" align="center"><img src="images/logo1.jpg" width="177" height="80" /></td>
        <td height="212">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
<?php include "menu.php"; ?>
  <tr>
    <td height="600" align="left" valign="top"><table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="72%" height="600" align="left" valign="top">
      <div style="border:4px solid #06C; height:auto; width:90%; display:block; border-radius:10px; margin:20px 0 0 0; padding:0 5px 0 5px">
    <form name="register" method="post" enctype="multipart/form-data">
    <input name="hdnprice" value="100" type="hidden" />
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%" align="right" valign="middle">First Name</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="text" name="fname" value="<?php echo $fname; ?>">    </td>
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
        <input type="text"  name="lname" id="lname" value="<? echo $lname ?>"  />    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Address</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <textarea name="address" cols="16" rows="3" id="address" >
		<?php echo $address ?>
        </textarea>
            </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Date of Birth</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="text" name="dob" id="dob" value="<?php echo $dob ?>"/>    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Date of Join</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="text" name="doj" id="doj" value="<?php echo $doj ?>"/>    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Phone</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="text" name="phone" id="phone" value="<?php echo $phone ?>"/>    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Email</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="text" name="email" id="email" value="<?php echo $email ?>" readonly="readonly"/>    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Password</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
        <input type="password" name="password1" id="password1" value="<?php echo $password ?>"/>    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
   <tr bgcolor="#9999FF">
                  <td align="right" valign="middle" class="textblackbold">Thumbnail 
                  Image </td>
                  <td>&nbsp;</td>
                  <td><input name="smallimg" type="file" class="input" id="fileCatalogue2" />
                  <img src="catalogue_image.php?id=<?php echo $row['id']?>" width="75" height="75" ></td>
		   </tr>
   <tr bgcolor="#CCCCCC">
     <td align="right" valign="middle" class="textblackbold">Big 
       Image </td>
     <td>&nbsp;</td>
     <td><input name="bigimg" type="file" class="input" id="smallimg" />
         <img src="catalogue_image_big.php?id=<?php echo $row['id']?>" alt=""  width="75" height="75"/></td>
   </tr>
   <tr bgcolor="#FFFF66">
     <td align="right" valign="middle" class="textblackbold">Change file </td>
     <td>&nbsp;</td>
     <td><input name="file_name" type="file" class="input" id="file_name" />
       <a href="uploads/<?php echo $row['filename']?>"  target="_blank" >Click to Download( <?php echo $row['filename']?>) </a>
       </td>
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
    <input type="submit" name="submit" id="button" value="Update" />  
        &nbsp;&nbsp;&nbsp;
        <input type="reset" name="button2" id="button2" value="Cancel" />    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
</table>
    </form>
    </div>
</td>
    <td width="28%">&nbsp;</td>
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
