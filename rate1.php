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
     echo '<script>window.location.href="rate.php"</script>';
 }
 if(isset($_REQUEST["b3"]))
 {
     $r1=$_REQUEST["r1"];
     $r2=$_REQUEST["r2"];
     $r3=$_REQUEST["r3"];
     $r4=$_REQUEST["r4"];
     $qry1="insert into rating (u_id,service_rate,design_rating,support_rating,general_rating,contact)values('".$_SESSION["id"]."','".$r1."','".$r2."','".$r3."','".$r4."','".$_SESSION["contact"]."')";
     echo $qry1;
     if(mysql_query($qry1, $con))
     {
         echo '<script>alert("Your Data is Successfully Sent");window.location.href="rate2.php"</script>';  
     }
 else {
        echo '<script>alert("Your Data is Not Inserted");</script>'; 
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
            margin-top:20px; 
            color:whitesmoke;
            text-align: center;
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
        .div1
        {
            background-color:red;
            height:90px;
            width:800px;
            float:left;
        }
        .s7
        {
            color:#4af436;
            font-size:30px;
            margin-left:70px;
            position:relative;
            top:50px;
        }
        .s8
        {
            color:whitesmoke;
            font-size:30px;
            margin-left:70px;
            position:relative;
            top:70px;
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
             left:250px;
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
          
           <form name="rate" action="rate1.php" method="POST" enctype="multipart/form-data">
           
               <span class='s7'>Service Provided:</span><br>
                 <span class='s8'>  <input  type="radio" name="r1" value='one'/>1 Star
                       <input  type="radio" name="r1"  value='two' />   2 Stars
                       <input  type="radio" name="r1"  value='three' /> 3 Stars
                       <input  type="radio" name="r1"  value='four'/>  4 Stars
                       <input  type="radio" name="r1" value='five' />  5 Stars
                 </span><br><br><br>
                 <span class='s7'>Design:</span><br>
                 <span class='s8'>  <input  type="radio" name="r2" value='one'/>1 Star
                       <input  type="radio" name="r2"  value='two' />  2 Stars
                       <input  type="radio" name="r2"  value='three' />  3 Stars
                       <input  type="radio" name="r2"  value='four'/>  4 Stars
                       <input  type="radio" name="r2" value='five' />  5 Stars
                 </span><br><br><br>
                 <span class='s7'>Support:</span><br>
                 <span class='s8'>  <input  type="radio" name="r3" value='one'/>1 Star
                       <input  type="radio" name="r3"  value='two' />  2 Stars
                       <input  type="radio" name="r3"  value='three' />  3 Stars
                       <input  type="radio" name="r3"  value='four'/>  4 Stars
                       <input  type="radio" name="r3" value='five' />  5 Stars
                 </span><br><br><br>
                 <span class='s7'>General Satisfaction:</span><br>
                 <span class='s8'>  <input  type="radio" name="r4" value='one'/>1 Star
                       <input  type="radio" name="r4"  value='two' />  2 Stars
                       <input  type="radio" name="r4"  value='three' />  3 Stars
                       <input  type="radio" name="r4"  value='four'/>  4 Stars
                       <input  type="radio" name="r4" value='five' />  5 Stars
                 </span><br><br>
                 <input type='submit' value='< Backward' name='b2' class='i2'>
                 <input type='submit' value='Forward >' name='b3' class='i2' style='position:relative;left:290px; '>
           </form>

       </div>
   </div>
     
        <?php
        // put your code here
        ?>
    </body>
    
</html>
