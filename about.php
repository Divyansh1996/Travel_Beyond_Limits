<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start();
 include 'dbcon1.php';
if(isset($_REQUEST["btnsend"]))
{
    $name=$_REQUEST["txtname"];
    $email=$_REQUEST["txtemail"];
    $subject=$_REQUEST["txtsubject"];
    $message=$_REQUEST["txtmessage"];
    $id=$_SESSION["id"];
    $qry="insert into message(m_message,m_subject,u_id,u_name,u_email)values('".$message."','".$subject."','".$id."','".$name."','".$email."')";
    if(isset($_SESSION["id"]))
    {
        if(mysql_query($qry, $con))
        {
            echo '<script>alert("Your Message is Sent to the admin");</script>';
        }
        
    }   
    else
    {
        echo '<script>alert("You Should First Login");</script>';
    }
}   

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Us</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
         <link type="image/x-icon" rel="icon" href="pause1.jpg">
        <style type="text/css">
            *{
               margin:0;
               padding:0; 
            }
            .d1
            {
                background-color:#4c42be;
                height:1150px;
                width:100%; 
            }
            .d11
            {
                display:block;
                height:300px;
                width:100%;
                background-image:url('images1/thumb1.jpg'); 
            }
            html { box-sizing: border-box; }

*, *:before, *:after { box-sizing: inherit; }

body {
  background-color:#4c42be;
  font-family: "Roboto", sans-serif;
  font-size: 14px;
  margin: 0;
}

a { text-decoration: none; }

.container {
  width: 1000px;
  margin: auto;
}

h1 { text-align:center; margin-top:150px;}

/* Navigation Styles */

nav { background: #2ba0db; }

nav ul {
  font-size: 0;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
  position: relative;
  margin-left:20px; 
}

nav ul li a {
  color: #fff;
  display: block;
  font-size: 14px;
  padding: 5px 9px;
  transition: 0.3s linear;
}
.i7
{
    height:50px;
    width:50px;
    border-radius:50%; 
}

nav ul li:hover { background: #126d9b; }

nav ul li ul {
  border-bottom: 5px solid #2ba0db;
  display: none;
  position: absolute;
  width: 250px;
  z-index:99999999; 
}

nav ul li ul li {
  border-top: 1px solid #444;
  display: block;
}

nav ul li ul li:first-child { border-top: none; }

nav ul li ul li a {
  background: #373737;
  display: block;
  padding: 10px 14px;
}

nav ul li ul li a:hover { background: #126d9b; }

nav .fa.fa-angle-down { margin-left: 6px; }
         </style>   
    </head>
    <body>
        <div class="d1">
            <div class="d11">
                <center><span style='color:whitesmoke;font-size:40px;'>Travel Beyond Limits</span></center>   
            </div>
            
            <nav>
  <div class="container">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about1.php">About Me</a></li>
      <li><a href="Gallery.php">Gallery</a></li>
      <?php
      if(isset($_SESSION["id"]))
      {        
      echo'<li><a href="logout1.php">Logout</a></li>';
      } 
      else
      {
          echo'<li><a href="log1.php">Login</a></li>';
      }   
          
      ?>
      <li><a href="account.php">Create An Acoount</a></li>
      <li> <a href="#">Places<i class='fa fa-angle-down'></i></a>
        <ul>
            <?php
                  include 'dbcon1.php';
            $qry21="select * from place";
            $result21=  mysql_query($qry21, $con);
            while($row21=  mysql_fetch_array($result21))
            {
                
                echo '<li><a href="read.php?pid44='.$row21["p_id"].'">'.$row21["p_heading"].'</li>';
                
            }
            //echo $row21["p"]
            ?>
           
        </ul>
      </li>
      <li><a href="about.php">Contact Us</a></li>
      <li><a href="rate.php">Rate Us</a></li>
    </ul>
  </div>
</nav>
<div class="jquery-script-ads" style="margin-top:50px" align="center"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script>
$('nav li').hover(
  function() {
	  $('ul', this).stop().slideDown(200);
  },
	function() {
    $('ul', this).stop().slideUp(200);
  }
);
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<div style="float:left;height:850px;width:820px;background:-webkit-linear-gradient(right,#4c42be,#1a118a,#050133);position:relative;bottom:50px">
    <form name="about" action="about.php" method="POST" enctype="multipart/form-data">
    
    <span style="color:whitesmoke;font-size:55px;position:relative;top:20px;left:30px;">Contact Us</span><br><br>
    <span style="color:whitesmoke;font-size:25px;position:relative;top:20px;left:30px;">Your Name:</span>
    <br><input type="text" name="txtname" value=""placeholder="Enter Name" style="padding:5px;font-size:20px;position:relative;top:20px;width:500px;left:30px;">
    <br><br><br>
    <span style="color:whitesmoke;font-size:25px;position:relative;top:20px;left:30px;">Your Email:</span>
    <br><input type="email" name="txtemail" value="" placeholder="Enter Email" style="padding:5px;font-size:20px;position:relative;top:20px;width:500px;left:30px;">
    <br><br><br>
    <span style="color:whitesmoke;font-size:25px;position:relative;top:20px;left:30px;">Subject:</span>
    <br><input type="text" name="txtsubject" value="" placeholder="Enter Your Subject" style="padding:5px;font-size:20px;position:relative;top:20px;width:500px;left:30px;">
    <br><br><br>
    <span style="color:whitesmoke;font-size:25px;position:relative;top:20px;left:30px;">Your Message:</span>
    <br><textarea rows="10" cols="25" name="txtmessage" placeholder="Enter Your Message" value=""style="padding:5px;font-size:20px;position:relative;top:20px;width:500px;left:30px;"></textarea>
    <br><br><input type="submit" name="btnsend" value="Send" style="background-color:orangered; padding:5px;color:whitesmoke;font-size:25px;position:relative;top:20px;left:30px;">
    </form>
    
</div>
<div style="background-color:yellow;height:850px;width:518px;margin-left:10px;float:left;position:relative;bottom:50px">
    <img src='images1/nature-waterfall-animated-gif-6.gif'style="height:850px;width:518px;">
</div>

    

        </div>
        
        <div style="background-color:orange;width:100%;height:650px;margin-top:45px; ">
            <span style="font-size:35px;position:relative;left:20px;top:20px;">
                 <?php
      include 'dbcon1.php';
      $qry22="select * from message join user on user.u_id=message.u_id order by m_id desc limit 1";
     
      $result22=  mysql_query($qry22, $con);
      $row22= mysql_fetch_array($result22);
     
      echo'<img src="upload/'.$row22["u_image"].'" class="i7">';
            ?>  Message by  <?php
      include 'dbcon1.php';
      $qry22="select * from message order by m_id desc limit 1";
      $result22=  mysql_query($qry22, $con);
      $row22=  mysql_fetch_array($result22);
      echo $row22["u_name"];
            ?>:
            </span>
            <span style="font-size:35px;position:relative;left:20px;top:20px;">
                <?php
      include 'dbcon1.php';
      $qry33="select * from message order by m_id desc limit 1";
      $result33=  mysql_query($qry33, $con);
      $row33=  mysql_fetch_array($result33);
      echo $row33["m_message"];
            ?>
            </span>
            <br><br>
            <br>
        <span style="font-size:35px;position:relative;left:20px;top:20px;">
             <?php
      include 'dbcon1.php';
      $qry22="select * from reply order by r_id desc limit 1";
      $result22=  mysql_query($qry22, $con);
      $row22=  mysql_fetch_array($result22);
      
      echo'<img src="upload/'.$row22["a_image"].'" class="i7">';
            ?>  Reply by <?php
      include 'dbcon1.php';
      $qry44="select * from reply order by r_id desc limit 1";
      $result44=  mysql_query($qry44, $con);
      $row44=  mysql_fetch_array($result44);
      echo $row44["a_name"];
            ?>:
        </span>
            <span style="position:relative;left:20px;top:20px;font-size:35px;"><?php
      include 'dbcon1.php';
      $qry55="select * from reply order by r_id desc limit 1";
      $result55=  mysql_query($qry55, $con);
      $row55=  mysql_fetch_array($result55);
      echo $row55["r_reply"];
            ?></span>
        </div>
        <div class="d4" style="background-color:black;width:100%;height:45px;color:black;">
    <center><span style="color:whitesmoke;font-size:25px;padding:5px;position:relative;top:5px;text-align:center;"> @Travel Beyond Limits From India.All right Reserved</span></center>
    </div>
               
                <?php
        // put your code here
        ?>
    </body>
</html>
