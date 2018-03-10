<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'dbcon1.php';
if(isset($_REQUEST["btnreg"]))
{
     $name=$_REQUEST["txtname"];
     $pass1=$_REQUEST["txtpass"];
     $pass2=$_REQUEST["txtcpass"];
     $address=$_REQUEST["txtaddress"];
     $date=$_REQUEST["txtregister"];
     $email=$_REQUEST["txtemail"];
     $number=$_REQUEST["txtnumber"];
     $source=$_FILES["upfile"]["tmp_name"];
     $target="upload/".$_FILES["upfile"]["name"];
     if($pass1==$pass2)
     {     
     if(move_uploaded_file($source, $target)) // to move file from tmp folder to upload file
    {
         
    $image=$_FILES["upfile"]["name"];
    echo"<h1>file moved</h1>";
    $qry="insert into user(u_name,u_pass,u_contact,u_email,u_address,u_image,u_date) values('".$name."','".$pass1."','".$number."','".$email."','".$address."','".$image."','".$date."')";
    
    if(mysql_query($qry, $con)) //to execute query
    {
        echo '<script>alert("Registration is Successful");window.location.href="index.php";</script>';
    }
    else
    {
        echo "Error".mysql_error();// to show error message and line errorno()will show in which line there is error. 
    }
   }
     }
 else {
     echo'<script>alert("Your Password Doesnot Matches");</script>';    
     }
    
}   
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create An Account</title>
        <style type="text/css">
            *
            {
                margin:0;
                padding:0;
                
            }
          
            .div1
            {
                background-color:blue;
                height:75%;
                position:relative;
                top:100px;
                left:200px;
                float:left;
                width:500px;
            }
            .div2
            {
                background-color:blue;
                height:75%;
                float:right;
                width:500px;
                position:relative;
                top:100px;
                right:40px;
            }
            .s1:hover
            {
                opacity:1; 
                cursor:hand; 
            }
          
            </style>
    </head>
    <body>
        <div style="background-color:#ffc107;width:100%;height:1280px;">
        
            <div style="background-color:grey;height:75px;width:100%;">
                <span style="color:whitesmoke;font-size:25px;float:left;position:relative;top:20px;left:30px;">Travel Beyond Limits</span>
                <a href="log1.php" style="color:whitesmoke;font-size:20px;padding:5px;float:right;background-color:blue;text-decoration:none;position:relative;top:20px;right:40px;">Login</a>
            </div>
    <center><h1 style="color:whitesmoke;font-size:40px;margin-top:30px;">Create Your Travel Account</h1></center>
    <div class="div1">
        <center><span style="font-size:25px;color:whitesmoke;margin-top:30px;">One Account is All You Need</span></center>
        <br><br><center><p style="color:whitesmoke;">One free account gets you into everything Travel Account.</p></center>
        <center><img src="feature.jpg" style="height:250px;width:250px;position:relative;top:25px; "></center>
        <br><br><br>
        <center><span style="font-size:25px;color:whitesmoke;">Take it all with you</span></center><br><br>
        <center><p style="color:whitesmoke;">Switch between devices, and pick up wherever you left off</p></center>
        <br><br>
        <center><img src="d1.jpg" style="height:200px;width:200px;"></center>
    </div>
    <div class="div2" style="color:whitesmoke;font-size:20px;padding:5px;">
        <form name="account" action="account.php" method="POST" enctype="multipart/form-data">
        
        <span style="font-size:23px;position:relative;left:60px;top:30px">
            Name:<br>
        <input type="text" placeholder="Enter Name" name="txtname" style="font-size:15px;padding:8px;width:300px; ">
        </span>
        <br><br>
        <span style="font-size:23px;position:relative;left:60px;top:30px">
            Create Your Password:<br>
            <input type="password" placeholder="Enter Password" name="txtpass" style="font-size:15px;padding:8px;width:300px; ">
        </span>
        <br><br>
        <span style="font-size:23px;position:relative;left:60px;top:30px">
            Confirm Your Password:<br>
            <input type="password" placeholder="Enter Confirm Password" name="txtcpass" style="font-size:15px;padding:8px;width:300px; ">
        </span>
        <br><br>
        <span style="font-size:23px;position:relative;left:60px;top:30px">
            Email Address:<br>
        <input type="email" placeholder="Enter Email Address" name="txtemail" style="font-size:15px;padding:8px;width:300px; ">
        </span>
        <br><br>
        <span style="font-size:23px;position:relative;left:60px;top:30px">
            Mobile Number:<br>
        <input type="text" placeholder="Enter Number" name="txtnumber" style="font-size:15px;padding:8px;width:300px; ">
        </span>
        <br><br>
        <span style="font-size:23px;position:relative;left:60px;top:30px">
            Address:<br>
            <textarea rows="10" cols="43" placeholder="Enter Address" name="txtaddress"></textarea>
        </span>
        <br><br>
        <span style="font-size:23px;position:relative;left:60px;top:30px">
            Register Date:<br>
        <input type="text" placeholder="Enter Date" name="txtregister" style="font-size:15px;padding:8px;width:300px; ">
        </span>
        <br><br>
        <span style="font-size:23px;position:relative;left:60px;top:30px">
            Your Pic:<br>
        <input type="file" placeholder="Upload Your Pic" name="upfile" style="font-size:15px;padding:8px;width:300px;">
        </span>
        <br><br><br>
        <input type="submit" name="btnreg" class="s1" value="Register" style="opacity:1;font-size:25px;border:2px solid #ffc107; padding:5px;color:whitesmoke;background-color:#ffc107;float:right;position:relative;right:50px;">  "
        </form>
    </div>
    </div>
    <div style="background-color:grey;width:100%;height:50px;color:whitesmoke;font-size:20px; ">
        <p style="text-align:center;">@Travel Beyond Limits From India All Right Reserved.</p>   
    </div>
        
    </body>
</html>
