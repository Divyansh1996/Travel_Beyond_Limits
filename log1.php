<?php session_start();
include "dbcon1.php";
if(isset($_REQUEST["btnnext"]))
{
    
    $email=$_REQUEST["txtemail"];
    $qry1="select * from user where u_email='".$email."'";
    $result1=mysql_query($qry1, $con);
    $row1=mysql_fetch_array($result1);
    $_SESSION["name"]=$row1["u_name"];
    $_SESSION["email"]=$row1["u_email"];
    $_SESSION["image"]=$row1["u_image"];
    $_SESSION["id"]=$row1["u_id"];
    if($email==$_SESSION["email"])
    {
      header("Location:log2.php"); 
      
    }
    else
    {
       echo'<script>alert("Incorrect Email Address");window.location.href="log1.php";</script>';
       
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
               background-image:url('687579.jpg');  
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
            <center><div class="d12" style="margin-top:100px;height:450px;width:500px;background-color:rgba(3, 169, 244, 0);">
                    <center><img src="images1/th.jpg"style="height:170px;width:170px;border-radius:50%;position:relative;top:60px; "></center>
                    <form name="log1" action="log1.php" method="POST" enctype="multipart/form-data">
                    
                    <center><input type="email" placeholder="Enter Your Email" name="txtemail" value="" style="border:1px solid blue;font-size:35px;position:relative;top:100px;padding:10px; "></center><br><br>
                     <center><input type="submit" class="txt" name="btnnext" value="Next" style="border:1px solid blue;font-size:35px;position:relative;top:100px;padding:10px;color:whitesmoke;opacity:0.6; text-align:center;background-color:blue;width:460px;"></center>
                      </form>
                </div>
            </center>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
