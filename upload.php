<?php
include('config.php');
error_reporting(0); 
$id=$_REQUEST["txtid"]; 
//$name=$_REQUEST["txtname"];
if(isset($_FILES['images']['name'])):
  define ("MAX_SIZE","2000");
  for($i=0; $i<count($_FILES['images']['name']); $i++)  {
  $size=filesize($_FILES['images']['tmp_name'][$i]);    
  if($size < (MAX_SIZE*1024)):    
   $path = "upload/";
   $name = $_FILES['images']['name'][$i];
   $size = $_FILES['images']['size'][$i];
   list($txt, $ext) = explode(".", $name);
   date_default_timezone_set ("Asia/Calcutta"); 
   $currentdate=date("d M Y");  
   $file= time().substr(str_replace(" ", "_", $txt), 0);
   $info = pathinfo($file);
   $filename = $file.".".$ext;
    if(move_uploaded_file($_FILES['images']['tmp_name'][$i], $path.$filename)) :
       $fetch=$db->query("INSERT INTO image(i_name,p_id) VALUES('$filename','".$id."')");
       if($fetch):
         header('Location:addplace.php');
       else :
         $error ='Data not inserting';
       endif;
    else :
        $error = 'File moving unsuccessful';
    endif;
  else:
     $error = 'You have exceeded the size limit!';
  endif;      
  }
else:
  $error = 'File not found!';
endif;          
?>
<html>
    <body>
<h2><?php echo @$error ?></h2> <a href="addplace.php">Try Again</a>
</body>
</html>