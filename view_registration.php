<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'dbcon1.php';
if(isset($_REQUEST["btnshowall"]))
{
    
    $qry_s="select * from user";
    $result=mysql_query($qry_s,$con);
    echo '<style type="text/css">
        td
        {
        color:white;
        }
        body
        {
        background-color:#051127;
        }
     </style>';
    echo '<center><table cellpadding="6px" cellspacing="1px" border="3px solid white">
    <tr>
    <td color="white"> User id</td>
    <td color="white"> User Name</td>
    <td color="white"> User Photo</td>
    <td color="white"> User Contact</td>
    <td color="white"> User E-mail</td>
    <td color="white"> User Address</td>
    </tr>
    ';
     while($row=  mysql_fetch_array($result))
    {
        echo '<tr>';
        echo '<td color="white">'.$row["u_id"].'</td>';
        echo '<td color="white">'.$row["u_name"].'</td>';
        echo '<td color="white"><img src="upload/'.$row["u_image"].'" height="100px" width="100px"></td>';
        //echo'<td>'.$row["s_image"].'</td>';
        echo '<td color="white">'.$row["u_contact"].'</td>';
        echo '<td color="white">'.$row["u_email"].'</td>';
        echo '<td color="white">'.$row["u_address"].'</td>';
    }
     echo '</table></center>';
}
else if(isset($_REQUEST["btnshow"]))//to search the record
{
    $sid=$_REQUEST["txtid"];
    $name=$_REQUEST["txtname"];
    $address=$_REQUEST["txtadd"];
    if($sid!="" && $name=="" && $address=="")
    {
        $qry_s="select * from user where u_id=".$sid; 
       
    }
    //100
    else if($sid=="" && $name=="" && $address!="")
    {
        $qry_s="select * from user where u_address like'%".$address."%'";
        
    }
    //001
 else if($sid=="" && $name!="" && $address=="")
 {
   $qry_s="select * from user where u_name='".$name."'";
    
  }
  
  //010
  else if($sid!="" && $name!="" && $address=="")
 {
   $qry_s="select * from user where u_id='".$sid."' and u_name='".$name."'";
    
  }
   else if($sid=="" && $name!="" && $address!="")
 {
   $qry_s="select * from user where u_name='".$name."' and u_address like '%".$address."%'";
    
  }
  //110
   else if($sid!="" && $name=="" && $address!="")
 {
   $qry_s="select * from user where u_id='".$sid."' and u_address like'%".$address."%'";
   
  }
  //101
    else if($sid!="" && $name!="" && $address=="")
 {
   $qry_s="select * from user where u_name='".$name."' and u_address like'%".$address."%'and u_id='".$address."'";
    
  }
    else if($sid!="" && $name!="" && $address!="")
 {
   $qry_s="select * from user where u_name ='".$name."' and u_id='".$sid."' and u_address like'%".$address."%'";
    
  }
  else
  {
      $qry_s="select * from user";
      
  }
 

   $result=mysql_query($qry_s,$con);
       echo '<style type="text/css">
        td
        {
        color:white;
        }
        body
        {
        background-color:#051127;
        }
     </style>';
    echo '<center><table cellpadding="6px" cellspacing="1px" border="3px solid white">
    <tr>
    <td color="white"> User id</td>
    <td color="white"> User Name</td>
    <td color="white"> User Photo</td>
    <td color="white"> User Contact</td>
    <td color="white"> User E-mail id</td>
    <td color="white"> User Address</td>
    
    
    </tr>
    ';
    while($row=  mysql_fetch_array($result))
    {
        echo '<tr>';
        echo '<td color="white">'.$row["u_id"].'</td>';
        echo '<td color="white">'.$row["u_name"].'</td>';
        echo '<td><img src="upload/'.$row["u_image"].'" height="100px" width="100px"></td>';
        //echo'<td>'.$row["s_image"].'</td>';
        echo '<td color="white">'.$row["u_contact"].'</td>';
        echo '<td color="white">'.$row["u_email"].'</td>';
        echo '<td color="white">'.$row["u_address"].'</td>';
        echo '</tr>';
    }
    echo '</table></center>';
 }
 else
{
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Registration</title>
        <style type="text/css">
            *
            {
                padding:0;
                margin:0; 
            }
             .d1{
                height:120px;
                background-image:url('giphy.gif');
                color:wheat;
                font-size:40px; 
                text-align:center;
                font-weight:bold; 
            }
            .d1:hover{
                color:whitesmoke;
                text-decoration:underline; 
            }
             .d2
            {
               height:30px;
               background-color:red; 
            }
            .t1
            {
                color:whitesmoke;
                font-size:25px;
            }
            body
            {
                background-color:black; 
            }
            .c1
            {
                background-color:orange;
                font-size:20px;
                color:whitesmoke;
                border:1px solid red;
                padding:5px; 
                border-radius:15%;
                transition-property:background-color;
                transition-duration:3s; 
            }
            .c1:hover
            {
                background-color:red;
                border:1px solid orange;
                cursor:hand; 
            }
         </style>   
    </head>
    <body style="background-color:black;">
        <div class='d1'>
            <h1>View Registration</h1>
            </div>
        <div class='d2'>
            <marquee class='t1'>Travel Beyond your limits</marquee>
        </div>
        <form name="view_registration" action="view_registration.php" method="POST" enctype="multipart/form-data">
            <center>
             
         <table border="0" cellpadding="15px" cellspacing="15px" >
             <tr>
                 <td class='t1'>User id</td>
                 <td><input type="text" name="txtid" value=""/>
                     
             </tr>
             <tr>
                 <td class='t1'>User Name</td>
                 <td><input type="text" name="txtname" value=""/>
                     
             </tr>
             <tr>
                 <td class='t1'>User Address</td>
                 <td><input type="text" name="txtadd" value=""/>
                     
             </tr>
             <tr>
                 <td><input type="submit" name="btnshowall" value="Show All" class="c1"/></td>
                 <td><input type="submit" name="btnshow" value="Show" class="c1"/></td>
                     
             </tr>
         </table>
         </center>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
<?php
}
?>

