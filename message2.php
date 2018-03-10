<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start();
if(isset($_SESSION["admin_id"]))
 {
    if(isset($_REQUEST["btnreply"]))
    {       
 include 'dbcon1.php';
 if(isset($_REQUEST["btnreply"])){
 $reply=$_REQUEST["txtreply"];
 $image=$_SESSION["admin_image"];
 $aid=$_SESSION["admin_id"];
 $mid=$_REQUEST["txtid"];
 $aname=$_SESSION["admin_name"];
 
     $qry11="insert into reply(a_image,r_reply,a_name,a_id,m_id) values('".$image."','".$reply."','".$aname."','".$aid."','".$mid."')";
     if(mysql_query($qry11, $con))
     {
      echo '<script>alert("Your Message is Sent to the User");</script>';  
     }     
     else
     {
         echo '<script>alert("Your Message is not Sent");</script>'.mysql_error(); 
     }
 }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Message And Reply</title>
        <style type="text/css">
            *
            {
                margin:0;
                padding:0; 
            }
            .div1
            {
              color:red;
              background-color:wheat;
              height:100px;
              text-align:center;
              width:100%;
              
                  
            }
            .s1
            {
                position:relative;
                top:25px;
                color:blue;
                font-size:40px;
            }
            .div2
            {
                background-color:lightblue;
                height:600px;
                width:800px;
            }
            .s1:hover
            {
                color:red;
                text-decoration:underline; 
            }
            body
            {
                background-color:black; 
            }
            .s2
            {
                color:whitesmoke; 
                font-size:25px;
                
            }
            .i7
{
    height:50px;
    width:50px;
    border-radius:50%; 
}
         </style>   
    </head>
    <body>
        <div class="div1">
        <center><span class="s1">Message And Reply</span></center>
        </div>
        <form name="message" action="message.php" method="POST" enctype="multipart/form-data">
        
    <center><div class="div2">
            <input type="hidden" name="txtid" <?php
                       
                        echo'value="'.$_REQUEST["id"].'"';
                        ?>><br><br>
            <span class="s2"> <?php
      include 'dbcon1.php';
      $qry22="select * from message join user on user.u_id=message.u_id where m_id='".$_REQUEST["id"]."'";
      $result22=  mysql_query($qry22, $con);
      $row22=  mysql_fetch_array($result22);
     
      echo'<img src="upload/'.$row22["u_image"].'" class="i7">';
            ?>  Message Sent By  <?php
            include 'dbcon1.php';
            $qry="select * from message where m_id='".$_REQUEST["id"]."'";
            
             if(mysql_query($qry, $con))
            {
                 $result=  mysql_query($qry, $con);
                 $row=  mysql_fetch_array($result);
                 echo $row["u_name"];
                
            } 
            else
            {
                echo '<h1 style="color:white">Error</h1>'.mysql_error();
            }
            ?><br><br><br>
            Subject: <input type="text" name="txtsub" style="background-color:wheat;width:300px;height:30px;padding:5px;" <?php
            include 'dbcon1.php';
            $qry1="select * from message where m_id='".$_REQUEST["id"]."'";
            
             if(mysql_query($qry1, $con))
            {
                 $result1=  mysql_query($qry1, $con);
                 $row1=  mysql_fetch_array($result1);
                 echo 'value="'.$row1["m_subject"].'"';
                
            } 
            else
            {
                echo '<h1 style="color:white">Error</h1>'.mysql_error();
            }
            ?>/>
            <br><br><br>
            E-mail: <input type="text" name="txtemail" style="background-color:wheat;width:300px;height:30px;padding:5px;" <?php
            include 'dbcon1.php';
            $qry2="select * from message where m_id='".$_REQUEST["id"]."'";
            
             if(mysql_query($qry2, $con))
            {
                 $result2=  mysql_query($qry2, $con);
                 $row2=  mysql_fetch_array($result2);
                 echo 'value="'.$row2["u_email"].'"';
                
            } 
            else
            {
                echo '<h1 style="color:white">Error</h1>'.mysql_error();
            }
            ?>/>
            <br><br><br>
            Message: <textarea rows="45" cols="35"  value="" name="txtmsg" style="background-color:wheat;width:300px;height:30px;padding:5px;" ><?php
            include 'dbcon1.php';
            $qry3="select * from message where m_id='".$_REQUEST["id"]."'";
            
             if(mysql_query($qry3, $con))
            {
                 $result3=  mysql_query($qry3, $con);
                 $row3=  mysql_fetch_array($result3);
                 echo $row3["m_message"];
                
            } 
            else
            {
                echo '<h1 style="color:white">Error</h1>'.mysql_error();
            }
            ?></textarea><br><br><br>
             Reply: <textarea rows="45" cols="35"  value="" name="txtreply" style="background-color:wheat;width:300px;height:30px;padding:5px;" >
            </textarea>
             <br><br><br>
             <input type="submit" style="background-color:orange;font-size:25px;padding:5px;color:white;border-radius:3%;" value="Reply" name="btnreply"/>
            </span>
        </div></center>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
<?php

 }  
else
{
     echo '<script>alert("You First Login")</script>';
}?>