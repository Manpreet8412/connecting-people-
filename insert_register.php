<?php
ob_start();// output buffer. 
include "connection.php"; //here we are making the php and mysql connection

/*
how to read value which is coming from register page:
1) $_POST['name-of-text-field'];// from one page to another page using post method. Means if in register page method=post 
2) $_REQUEST['name-of-text-field'];//from one page to another page    ||  you can get the value from url as well as body. Means if in register page method=get or post any
3) $_GET['name-of-text-field'];// this is only for getting the value from url
 Means if in register page method=get
*/
/*
why 0777
The first number is always zero
The second number specifies permissions for the owner
The third number specifies permissions for the owner's user group
The fourth number specifies permissions for everybody else
1 = execute permissions
2 = write permissions
4 = read permissions
--------
total 7   => 0777
*/


$firstname = $_POST['fname'];  //WE ARE READING THE HTML VALUE AND STORING INTO PHP VARIABLE
$lastname = $_REQUEST['lname'];
//echo $lastname."<br>";
$address = $_REQUEST['address'];
$dob = $_REQUEST['dob'];
$doj=$_REQUEST['doj'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$password1=$_REQUEST['password1'];
$status = "Active";



/*   file upload code start here*/
$foldername = 'uploads/';
echo $foldername;
if(is_uploaded_file($_FILES['fileupload']['tmp_name']))//is_uploaded_file: check the condition whether file is uploaded or not in tmp folder
//$_FILES: reading the file
{
$tmpname = $_FILES['fileupload']['tmp_name'];//retriving the temporary name of file
$orgname = $_FILES['fileupload']['name'];//retriving the original name file
$destination = $foldername.$orgname;  // creating the destination folder
copy($tmpname,$destination); //coping the file from temp folder to desitination folder
chmod($destination,0777);// file permission (read , write and execute mode)
unlink($tmpname);//unlink is useed for deleting the file from temp folder
echo "file is successfully uploaded"."<br>";
}
$filename = $_FILES['fileupload']['name'];  // retriving the original name of file
//$file_type = $_FILES['fileupload']['type'];
/*  end of file upload code */


/*   start of img upload*/
if($_FILES['smallimg']['tmp_name']!="")
	{
	$smallimg_open = fopen($_FILES['smallimg']['tmp_name'], "r"); 
	$smallimg_read = fread($smallimg_open,$_FILES['smallimg']['size']);
	$smalimg = addslashes($smallimg_read);  // image is here.
	$smalimg_type = $_FILES['smallimg']['type'];//reading the image type   //image/jpeg 
	}
/*   end of img upload*/
	if($_FILES['bigimg']['tmp_name']!="")
	{
	$bigimg_open = fopen($_FILES['bigimg']['tmp_name'], "r"); 
	$bigimg_read = fread($bigimg_open,$_FILES['bigimg']['size']); 
	$bigimg = addslashes($bigimg_read);
	$bigimg_type = $_FILES['bigimg']['type'];     
	}
	/*   start of img upload end*/
	
	



//$qry  =  "insert into table-name (table field separated by comman) values ('php variables separated by commaa')";//match the sequence.
echo $qry  = "insert into register(fname,lname,address,dob,doj,phone,email,password,status,filename,image1,image1_type,image2,image2_type) values ('$firstname','$lastname','$address','$dob','$doj','$phone','$email','$password1','$status','$filename','$smalimg','$smalimg_type','$bigimg','$bigimg_type')";
//echo $qry;
$rs = mysql_query($qry) or die ('problem: ' . mysql_error());//this function will execure the above mysql 
//$row= mysql_fetch_assoc($rs);
if ($rs)
{
	header("location:login.php");
}
else
{
echo "problem in insert command";
}
?>
<?
/*
porpose of this page is to insert value which is coming from register.php page.

1) connect php and mysql  / select your database....
2) read all the value which is coming from html page and assign into php variables

$_POST['nameOFfield'];//if methos is post then use this
$_REQUEST['nameOFfield'];//any method ..get or post
$_GET['nameOFfield'];//if methos is get then use this
EX:
$firstname = $_POST['fname']; 

3) Insert into database : write the mysql query

//$qry = "insert into register (table fields separed by comma) values ('php variable separed by comma')";
$qry = "insert into register (fname,lname, email) values ('$firstname','$lastname','$email')";

note: make sure sequence of table fields and variable should be same order.

4)execute the query :
$rs = mysql_query($qry);

5) After inserting into table, redirect to login page:
header("location:login.php");

Note: some time you will get warning while using header function then use ob_start() ; after first line of php.
*/

?>
