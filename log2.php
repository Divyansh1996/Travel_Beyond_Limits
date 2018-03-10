<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include'dbcon1.php';
if(isset($_REQUEST["btnlog"]))
{    
$pass=$_REQUEST["txtpassword"];
$qry2="select * from user where u_pass='".$pass."' ";
$result2=  mysql_query($qry2, $con);
$row2=  mysql_fetch_array($result2);
if($row2["u_pass"]==$pass)
{
   echo'<script>alert("Now You Can Leave Comment in Main Blog");window.location.href="index.php";</script>'; 
}
else
{
     echo'<script>alert("You Have Typed Wrong Password");</script>';
}
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Login</title>
         <link type="image/x-icon" rel="icon" href="pause1.jpg">
        <style type="text/css">
        *{
                padding:0;
                margin:0;
            }
            body
            {
               background-image:url('11377.jpg');  
            }
            .txt
            {
                opacity:1;
                cursor:hand;
            }
            </style>
    </head>
    <body>
        <div class="d1" style="background-image:url('11377.jpg');height:100%;width:100%;">
            <center><h1 style="position:relative;top:25px;color:whitesmoke;">Travel Beyond Limits</h1></center><br>
            <center> <p style="color:whitesmoke;position:relative;top:40px;font-size:35px;">Sign in Your Travel Acoount</p></center>
            <center><div class="d12" style="margin-top:100px;height:500px;width:550px;background-color:rgba(3, 169, 244, 0);">
                        <?php 
                        
                      echo' <center>
                      <img src="upload/'.$_SESSION["image"].'" style="height:170px;width:170px;border-radius:50%;position:relative;top:60px; "></center>';
                        ?>
                       <center> <p style="color:white;position:relative;top:70px;font-size:25px;"><?php
                       echo $_SESSION["name"];
                       echo '<br>';
                       echo $_SESSION["email"];
                       ?></p></center> 
                    <form name="log2" action="log2.php" method="POST" enctype="multipart/form-data">
                   
                    <center><input type="password" placeholder="Enter Your password" name="txtpassword" value="" style="border:1px solid blue;font-size:35px;position:relative;top:100px;padding:10px; "></center><br><br>
                     <center><input type="submit" class="txt" name="btnlog" value="Log In" style="border:1px solid blue;font-size:35px;position:relative;width:460px;top:100px;padding:10px;color:whitesmoke;opacity:0.6; text-align:center;background-color:blue;"></center>
                     <center><a href="#" style="position:relative;top:130px;">Forget Your Password</a></center>  
                    </form>
                </div>
            </center>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
