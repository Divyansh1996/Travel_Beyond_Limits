<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start();
 include 'dbcon1.php';
 if(isset($_REQUEST["b2"]))
 {
     echo '<script>window.location.href="rate1.php"</script>';
 }
 if(isset($_REQUEST["b3"]))
 {
     $t1=$_REQUEST["txt1"];
     $qry1="update rating set review_rating='".$t1."' where u_id='".$_SESSION["id"]."' and contact='".$_SESSION["contact"]."'";
     echo $qry1;
     if(mysql_query($qry1, $con))
     {
         $_SESSION["id"]="";
         $_SESSION["contact"]="";
         echo '<script>alert("Your Review is Successfully Sent");window.location.href="index.php"</script>';  
     }
 else {
        echo '<script>alert("Your Data is Successfully Inserted");</script>'; 
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
            height:550px;
            width:300px;
            float:left;
        }
        .d22
        {
            background-color:rgba(0, 89, 255, 0.67);
            height:550px;
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
            margin-top:50px; 
            margin-left:100px; 
        }
        .s7
        {
            color:#4af436;
            font-size:30px;
            margin-left:70px;
            position:relative;
            top:50px;
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
       
        
         .i2
         {
             color:whitesmoke;
             background-color:#007ead;
             padding:5px;
             border-radius:5%;
             border:2px solid #007ead;
             position:relative;
             top:90px;
             //left:250px;
             right:305px;
             transition-property:background-color;
             transition-duration: 3s;
         }
         .i2:hover
         {
             background-color:orange;
             cursor: alias;
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
          
           <form name="rate" action="rate2.php" method="POST" enctype="multipart/form-data">
           
               <span class='s7'>Your Review:</span><br><br>
               <textarea rows='15' cols="70" name='txt1' placeholder="Write Your Comments Here" class='s5'></textarea>
                 <input type='submit' value='< Backward' name='b2' class='i2'>
                 <input type='submit' value='Submit' name='b3' class='i2' style='position:relative;right:285px; '>
           </form>

       </div>
   </div>
     
        <?php
        // put your code here
        ?>
    </body>
    
</html>
