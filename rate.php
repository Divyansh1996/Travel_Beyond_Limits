<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start();
 include 'dbcon1.php';
 if(isset($_REQUEST["forward"]))
 {    
$name=$_REQUEST["txt1"];
$email=$_REQUEST["txt2"];
$contact=$_REQUEST["txt3"];
$_SESSION["contact"]=$contact;
$qry="select * from user where u_name='".$name."' and u_email='".$email."' and u_contact=".$contact;
//echo $qry;
if(mysql_query($qry, $con))
{
    $result=  mysql_query($qry, $con);
    $row=  mysql_fetch_array($result);
    $_SESSION["id"]=$row["u_id"];
    if(isset($_SESSION["id"]))
    {     
    echo '<script>alert(" Now You Can Rate Our Webpage");window.location.href="rate1.php"</script>';
    }
    else
    {
        echo '<script>alert("You Should Create Account");</script>';
    }
}
 else {
    
 echo '<script>alert("You Should Give Correct Details");</script>';
     
 }
 }
?>
<html>
    <head>
        <meta charset="UTF-8">
         <link type="image/x-icon" rel="icon" href="pause1.jpg">
        <title>Rate Us</title>
        <style type="text/css">
            *
            {
                padding:0;
                margin: 0;
            }
        body
        {
            background-image:url('717266.jpg'); 
        }
        .header
        {
            text-align:center;
            color:white;
            font-size:50px;
        }
        .s1
        {
           color:blue;
           text-align:center;
           font-size:55px;
           font-weight:bold;
           margin-left:250px;
           position: relative;
           top:20px;
        }
        .d11
        {
            background-color:lightblue; 
        }
        .s2
        {
            color:#00adff;
            text-align:center;
            margin-left:200px;
            font-size:40px;
           font-weight:bold;
           position: relative;
           top:20px;
        }
        .d1
        {
           // background-color:lightcoral; 
        }
        .d2
        {
            //background-color:whitesmoke;
            height:400px;
            width:1100px;
            margin-left:120px;
            margin-top:50px;
            border-radius:10%; 
        }
        .d21
        {
            background-color:rgba(255, 108, 0, 0.61);
            height:500px;
            width:300px;
            float:left;
        }
        .d22
        {
            background-color:rgba(0, 89, 255, 0.67);
            height:500px;
            width:800px;
            float:left;
             
        }
        .s3
        {
            position:relative;
            top:100px;
            left:40px;
        }
        .s4
        {
            font-family:verdana;
            color:lightblue;
            position:relative;
            top:150px;
            left:20px;
            font-size:25px;
                
        }
        .s5{
            margin-top:20px; 
            color:whitesmoke;
            text-align: center;
        }
        .i1
        {
            padding:5px;
           width:300px;
            
        }
        .t1
        {
             color:white;
            font-size:25px;
            //cellspacing:30px;
            position:relative;
            left:100px;
            margin-top:50px;
            
        }
        .b1
        {
            background-color:orange;
            padding:5px;
            color:whitesmoke;
            font-size:20px;
            margin-left:330px;
            margin-top:40px; 
        }
        .b1:hover
        {
            cursor:help;
        }
   
       
        </style>
    </head>
    
    <body>
        
    <center><h1 class="header">Travel Beyond Limits</h1></center>
    <div class="d1">
        <span class="s1"> WE APPRECIATE <span style="color:#f7ff00">YOUR RATE</span></span><br><br>
        <span class="s2">Help us to improve our service and customer satisfaction</span>
    </div>
   <div class="d2">
       <div class="d21">
           <span class="s3">
               <img src="rating.png" style="height:170px;width:240px;">
           </span>
           <p class="s4">
               Please rate and Win a Coupon that will be send after submitting 
           </p>
       </div>
       <div class="d22">
           <h1 class="s5">Your Personal Info</h1>
           <form name="rate" action="rate.php" method="POST" enctype="multipart/form-data">
            <table  class="t1" cellpadding="7" cellspacing="30">
               <tr>
                   <td>Name:</td>
                   <td><input  type="text" placeholder="Enter Your Name" name="txt1" class="i1" ></td>
               </tr>
               <tr>
                   <td>Email:</td>
                   <td><input type="text" placeholder="Enter Your Email" name="txt2" class="i1" ></td>
               </tr>
               <tr>
                   <td>Contact:</td>
                   <td><input  type="text" placeholder="Enter Your Number" name="txt3" class="i1" ></td>
               </tr>
                <tr>
                   <td>City:</td>
                   <td ><input  type="text" placeholder="Enter Your City Name" name="txt4" class="i1" ></td>
               </tr>
               
                <tr>
                   <!--<td><input type="submit" name="backward" class="b1" value="< Backward"> </td>-->
                   <td colspan="2"><input  type="submit" name="forward" class="b1" value="Forward >"></td>
               </tr>
               </table>
                          
           </form>

       </div>
   </div>
     
        <?php
        // put your code here
        ?>
    </body>
    
</html>
