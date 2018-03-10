<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start();
include 'dbcon1.php';
if(isset($_REQUEST["btnlogin"]))
{ echo 'yes';
   $name=$_REQUEST["txtname"];
   $email=$_REQUEST["txtemail"];
   $pass=$_REQUEST["txtpassword"];
   $qry1="Select * from admin where a_name='".$name."' and a_email='".$email."'and a_pass='".$pass."'";
  // echo $qry;
   $result=mysql_query($qry1,$con);
   $row=mysql_fetch_array($result);
   if(mysql_affected_rows()>0)
   {
       $_SESSION["admin_name"]=$name;
       $_SESSION["admin_id"]=$row["a_id"];
       $_SESSION["admin_image"]=$row["a_image"];
     header("location:adminprofile.php");  
   }
 else {
    echo   "<h1>Invalid Login</h1>";
   }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
        *
        {
            margin:0;
            padding:0; 
        }
        body
        {
            background-color:#0c0c0c; 
        }
         .d1
        {
            background-image:url('giphy.gif');
            width:100%;
            height:130px;
            z-index:999999;
          
            
        }
     
        .d1 img
        {
            position:relative;
            left:30px;
            top:20px;
        }
        .d1 h2 center
        {
            color:wheat;
            position:relative;
            bottom:60px;
            font-size:70px;
        }
        
        .d1 h2 center:hover
        {
         color:white;
         text-decoration:underline;
         cursor:pointer;
        
        }
         #login
            {   position:relative;
                top:40px;
                width:300px;
                margin:0 auto;
                border:1px solid darkblue;
                box-shadow:1px 1px 17px darkslateblue;
            }
            #login h2
            {
                text-align: center;
                background-color:darkslateblue;
                color:#ffffff;
            }
            #login td
            {
            padding:3px;    
            color:whitesmoke;
            }
            .formbutton
            {
                background-color:darkslateblue;
                padding:5px;
                color:#ffffff;
                border:0;
                width:100px;
               
            }
            .formbutton:hover
            {
                cursor:pointer;
            }
            .username
            {
                background-image:url('images/user.png');
                background-repeat:no-repeat;
                border:1px solid #000000;
                padding-left:20px;
                padding-bottom:3px;
                padding-top:3px;
            }
            .email
            {
                background-image:url('images/download.png');
                background-repeat:no-repeat;
                padding-left:20px;
                padding-bottom:3px;
                 padding-top:3px;
              border:1px solid #000000;
            }
            .password
            {
                background-image:url('images/pass.png');
                background-repeat:no-repeat;
                padding-left:20px;
                padding-bottom:3px;
               padding-top:3px;
               border:1px solid #000000;
            }
        </style>
    </head>
    <body>
        <div class="d1">
             <img src="create_thumb.png" height="80px">
             <h2><center>ADMIN LOGIN</center></h2>
        </div>
         <div id="login">
            <h2>Login:</h2> 
            <form name="adminlog" action="adminlog.php" method="POST">
            <table cellspacing="0" cellpadding="5px" align="center">
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" class="username" name="txtname" value="" placeholder="Enter Username">
                    </td>
                </tr>         

               <tr>
                    <td>Email:</td>
                    <td>
                        <input type="text" class="email" name="txtemail" value="" placeholder="Enter Email">
                    </td>
                </tr>         
 
               <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" class="password" name="txtpassword" value="" placeholder="Enter Password">
                    </td>
                </tr>         
              
                        
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" class="formbutton" name="btnlogin" value="Login">
                    </td>
                </tr>
                
                
                
            </table> 
        </form>    
      
        </div>
            
        <?php
        // put your code here
        ?>
    </body>
</html>
