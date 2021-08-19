<?php
ob_start();
include 'connection.php';
$id = $_REQUEST['id'];  //23 id will pass
			 $search_query2="select * from register where id=$id";
			  $rs2=mysql_query($search_query2);
			  $images_count= mysql_num_rows($rs2);
			  if($images_count>0)
			  {
				$search_query3="select image2,image2_type from register where id=$id";
				//echo $search_query3;
			    $rs3=mysql_query($search_query3) or die("Couldn't get file list sorry"); 
				 $filecontent = @mysql_result($rs3, 0, "image2"); 
				$filetype = @mysql_result($rs3, 0, "image2_type"); 
                 header("Content-type: $filetype"); 
      			echo $filecontent;
				ob_end_flush();
			  } 
?>









