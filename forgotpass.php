<?php
ob_start();//start the output buffer
session_start();

include "connection.php"; //here we are making the php and mysql connection


$email = $_POST['email'];
//echo "your email id is ::".$email;
		
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
  <?php include "menu.php"; ?>
  <tr>
    <td height="600" align="left" valign="top"><table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="72%" height="600" align="right" valign="top"><p>    <table width="100%" border="0" cellspacing="0" cellpadding="3">
		 <form name="f1" id="f1" method="post" >
            <tr>
              <td height="29" colspan="2" align="center" valign="middle" class="bodytext">Forgot your password? Enter your login email below. We will send your password to your email id.</td>
            </tr>
			  <tr>
              <td height="30" colspan="2" align="center" valign="middle" class="bodytext">
			  <?PHP
		 $query="select * from register where email='$email'";//$email IS OUR TEXT FIELD VALUE
         //echo $query;
          $rs_query   = mysql_query($query);
         //$num_query=mysql_num_rows($rs_query);
          $count = mysql_num_rows($rs_query);
            if($count==1)
              {
                 $rows=mysql_fetch_array($rs_query);   
						  
						  //mysql_fetch_array(fetch the value by table column name or table key position)   or mysql_fetch_assoc(fetch the value by table column name )
						  //register  id(0)   fname(1) email add   pass
						  
						  // $rows=mysql_fetch_assoc($rs_query);
						 // id   name   email mobile pass
                           // keep password in $your_password
                          //$your_password=$rows['password'];
                           //$pass=$row_query['pd'];
				          // echo "The Password will send to your EmailId.. Please Check Your Inbox<br>";
							//$pass  =  $rows['9'];//FETCHING PASS
							$pass  =  $rows['password'];//FETCHING PASS
							//echo "your pass is ::".($pass)."<br>";
							$to = $rows['email'];
							//echo "your email is ::".$email;
							
$url = "http://www.php2ranjan.com/login.php";
$body  =  "<p>php2ranjan password recovered
-----------------------------------------------

Url : '".$url."';
User email Details is : '".$to."';
Here is your password  '".$pass."';

Sincerely,
php2ranjan</p>";
					$from =   "purusingh2004@gmail.com";//site email
							$subject="php2ranjan Password recovered";
							$headers1 =  "From: $from\n";
						$headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n"; 
							$headers1 .= "X-Priority: 1\r\n"; 
						$headers1 .= "X-MSMail-Priority: High\r\n"; 
						$headers1 .= "X-Mailer: Just My Server\r\n";
				$sentmail = mail($to,$subject,$body,$headers1);
			                 //echo $sentmail;
							}
							else 
							{
								if($_POST['email']!="")
								{
								echo "<font color='#ff0000'> Not found your email in our database</font>"."<br>";
								}	
							}  
							/*if (mail($to,$subject,$body,$headers1))
							{
								echo " Mail Sent Success Fulle..";
							}
							else
							{
								echo "Unable To delivery The Mail";
							}*/
						  if($sentmail==1)
						  {
							 echo "<font color='#ff0000'> Your Password Has Been Sent To Your Email Address.</font>"."<br>";
						   }
						 else 
						 {
						  		if($_POST['email']!="")	
								 echo "<font color='#ff0000'>Cannot send password to your e-mail address.Problem with sending mail.</font>"."<br>";
						  }
					?>			  </td>
            </tr>
            <tr>
              <td height="30" align="right" valign="middle" class="heading_blue">Enter your Email ID : </td>
              <td align="left" valign="middle">
              <input type="text" name="email"  id="email" />
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>
     <input type="submit" name="button" id="button" value="Submit" />
              
                &nbsp;<!--<img src="images/cancel_button.gif" width="78" height="24" />--></td>
            </tr>
			 <tr>
              <td colspan="2" align="right" ><a href="index.php" class="blue_profilebuttons">Go 
                  to Home</a>	  </td>
              </tr>
			</form>
          </table>    
    </p>      </td>
    <td width="28%">&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle">Copyright © 2007 php2ranjan.com. All Rights Reserved.</td>
  </tr>
</table>

</body>
</html>
