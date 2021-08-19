<?php
ob_start();//start the output buffer
session_start();//it will  start the session

//echo "our session is :".$_SESSION['test'];
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
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style></head>

<?php
$_SESSION['email'] = "";   //how to create session..name of session can be any thing
//echo "our session is :".$_SESSION['test'];
include "include/conn/connection.php"; //here we are making the php and mysql connection
$stat = $_REQUEST['stat'];
//echo "state value is ::".$stat;
$remember = $_POST['rememberme'];// for cookie   name of checkbox is rememberme
//echo "checkbox value is ".$remember."<br>";
//echo "the value is :".$price."<br>";

$email = $_POST['email'];//reading email and assigning in php variable
$pass = $_REQUEST['pass'];
//echo "My email id is ::".$email ."<br>";
	//if(isset($_POST['email']) && ($_POST['email']!="")&& isset($_POST['pass']) && ($_POST['pass']!=""))//use for setting the value
	if($_POST['Submit']== "Login")
	{
	//echo "My email id is ::".$email ."<br>";
		//$qry1 = "select email,password from register where email='".$email."' and  password='".$pass."'";
		$qry1 = "select email,password from register where email='".$email."' and  password='".$pass."'";
		//echo "qry is ".$qry1."<br>";
		$rs  =  mysql_query($qry1); //this is used for execute the query
		$no_of_rows = mysql_num_rows($rs);//how many rows are affect in mysql operation   $no_of_rows= 0 or 1
		//echo "total row affect:" . $no_of_rows."<br>";
		if($no_of_rows==1)
		{
			
			$_SESSION['email'] = $email;// session is server side information . session can be created in one page and use in whole website.
			$email_sess = $_SESSION['email'];
		  //echo "Session Created";
		  	
			 if($remember !="")
     	  	{
			//cookie is client side information which is stored into browser catch and temp folder
	   			setcookie("cookemail", $email, time()+60*60*24*7, "/");
				//setcookie(cookiename,value,time,this folder);
       			setcookie("cookpass", $pass, time()+60*60*24*7, "/");
     	 	}
		header("location:profile.php");
			//window.location
		}  //close of if condition
		else
		{
		//echo "total row affect:" .     $no_of_rows."<br>";

			?>
		<script language="javascript">
		//alert("invalide user id and pass");
		location.href="login.php?stat=N";
		</script>
<?
		}//close of else
		
	}
?>


<? //echo $_SESSION['email']; ?>
<body><table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td height="150" align="left" valign="middle"><table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="25%" height="150" align="center"><img src="images/logo1.jpg" width="177" height="80" /></td>
        <td height="150">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="30" align="center" valign="middle">Home | <a href="register.php">Register</a> | Login</td>
  </tr>
  <tr>
    <td height="600" align="left" valign="top"><table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="72%" height="600" align="left" valign="top">
    <form name="login" method="post">
  
         <div style="border:4px solid #06C; height:auto; width:88%; display:block; border-radius:10px; margin:20px 0 0 0; padding:0 5px 0 5px">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
   <td colspan="3" align="center" valign="middle"><strong>Please login here</strong></td>
   </tr>
 <tr>
    <td width="33%" align="right" valign="middle">Email</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
    <input type="text" name="email" value="<?php echo $_COOKIE["cookemail"]; ?>" required  placeholder="enter your email"/></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr><tr>
    <td width="33%" align="right" valign="middle">Password</td>
    <td width="1%" align="center" valign="middle">:</td>
    <td width="66%" align="left" valign="middle">
    <input type="password" name="pass" value="<?php echo $_COOKIE["cookpass"];?>" />&nbsp;&nbsp;<a href="forgotpass.php">Forgot pass??</a></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
  <?php
	if($stat!="")
	{
		?>
  <tr>
    <td width="33%" align="right" valign="middle">&nbsp;</td>
    <td width="1%" align="center" valign="middle">&nbsp;
   
    </td>
    <td width="66%" align="left" valign="middle">
	 <?php 
	 echo "<font color='#FF0000'>Invalid user emailid or password</font>";
	?>
	  </td>
  </tr>
  <?php
	
	 }
	 ?>  
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="left" valign="middle"><input type="checkbox" name="rememberme" value="remember" />    
      <span class="style1">Remember Me</span></td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
  <tr>
    <td width="33%" align="right" valign="middle">&nbsp;</td>
    <td width="1%" align="center" valign="middle"></td>
    <td width="66%" align="left" valign="middle">
        <input type="submit" name="Submit"  value="Login" />&nbsp;&nbsp;&nbsp;
        <input type="reset" name="button2" id="button2" value="Cancel" />    </td>
  </tr>
  <tr bgcolor="#FFFF66">
    <td height="2" align="right" valign="middle"></td>
    <td height="2" align="center" valign="middle"></td>
    <td height="2" align="left" valign="middle"></td>
  </tr>
</table>
</div>
    </form>
    
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
