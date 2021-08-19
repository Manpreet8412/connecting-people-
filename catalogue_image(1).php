<?php
ob_start();
include 'connection.php';
$id = $_GET['id'];//54
			 $search_query2="select * from register where id=$id";
			  $rs2=mysql_query($search_query2);
			  $images_count= mysql_num_rows($rs2);
			  if($images_count>0)
			  {
				$search_query3="select image1,image1_type from register where id=$id";
				//echo $search_query3;
			    $rs3=mysql_query($search_query3) or die("Couldn't get file list sorry"); 
				 $filecontent = @mysql_result($rs3, 0, "image1"); //image1 is table column name.Row numbers start at 0
				$filetype = @mysql_result($rs3, 0, "image_type1"); // table column name
                 header("Content-type: $filetype"); 
      			echo $filecontent;// print image
				ob_end_flush();// flush the image from browser..
			  } 
?>

