<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if(isset( $_SESSION["admin_id"]))
{  include 'dbcon1.php';
    $qry="select * from admin where a_id='".$_SESSION["admin_id"]."'";
            $result= mysql_query($qry,$con);
            $row=  mysql_fetch_array($result);
            $_SESSION["image"]=$row["a_image"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Profile</title>
        <link type="text/css" rel="stylesheet" media="all" href="css/css.css" />
        <style type='text/css'>
            *
            {
                margin:0;
                padding:0;
            }
            .d1{
                height:120px;
                background-image:url('giphy.gif');
                color:wheat;
                font-size:70px; 
                text-align:center;
                font-weight:bold; 
            }
            .d1:hover{
                color:whitesmoke;
                text-decoration:underline; 
            }
            body
            {
             background-color:#0c0c0c;   
            }
            .s1
            {
                position:relative;
                top:10px;
            }
            .s2
            {
                position:relative;
                top:20px;
                right:140px;
            }
            .s3
            {
                //background-color: red;
                width:400px;
                height:543px; 
                float:left;
            }
            .s3 img
            {
              position:relative;
              left:60px;
              top:40px;
              border-radius:20%;
              border:10px solid darkblue;
              box-shadow:1px 1px 17px darkslateblue;
            }
            .s3 img:hover
            {
              border-color:orange;    
            }
            .s4
            {
              // background-color:green;
               
               height:543px;
               width:1348px;
            }
            .s5{
               font-weight:bold; 
               color:orange;
               font-size:40px;
            }
            .s6
            {
               margin-top:60px;  
              font-size:30px;  
            }
            
            
        </style>
    </head>
    <body>
        <div class='d1'>
            <span class='s2'> <img src="create_thumb.png" height="80px"></span>
            <span class='s1'>!!!WELCOME ADMIN!!!</span>
        </div>
        <div class='s3'>
   
            <img src="upload/<?php echo$_SESSION["image"];?>" height="300px" width="300px">
        </div>
        <div class='s4'>
            <span class="s5"><center>Hiii <?php
            $qry="select * from admin where a_id='".$_SESSION["admin_id"]."'";
            $result= mysql_query($qry,$con);
            $row= mysql_fetch_array($result);
            echo $row["a_name"];
            ?> Welcome to Your Blog </center><br><center>Now You Can Choose Any Option Given Below:</center>  </span>
            <center><div style="padding: 60px 0;">  
	 
                    <span class="s6"><a href="addplace.php" class="button orange bigrounded">ADD NEW PLACES</a></span><br> 
        <br><br><span class="s6"><a href="view_registration.php" class="button orange bigrounded">VIEW REGISTRATION</a> </span><br>
        <br><br> <span class="s6"><a href="comment.php" class="button orange bigrounded">VIEW COMMENTS</a> </span><br>
         <br><br> <span class="s6"><a href="message.php" class="button orange bigrounded">Messages And Reply</a> </span>
        <br><br> <span class="s6" style="position:relative;left:200px; "><a href="logout.php" class="button orange bigrounded">LOGOUT</a> </span>
	
	<br /><br />
                </div></center>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
<?php
}
else
{
 header("location:adminlog.php");   
}
?>