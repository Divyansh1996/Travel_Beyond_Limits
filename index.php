<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start();
include'dbcon1.php';
if(isset($_REQUEST["l1"]))
{
    $pid=$_REQUEST["sub1"];
    $uid=$_SESSION["id"];
    $comment=$_REQUEST["txt1"];
    $qry="insert into comment(p_id,u_id,co_description)values('".$pid."','".$uid."','".$comment."')";
    
    if(mysql_query($qry,$con))
    {
        echo '<script>alert("Your Comment is Successfully Inserted");</script>'; 
    }  
    else
    {
        echo '<script>alert("Your Comment is Not Inserted");</script>';
    }
            
}   

if(isset($_REQUEST["l2"]))
{
    $pid=$_REQUEST["sub2"];
    $uid=$_SESSION["id"];
    $comment=$_REQUEST["txt2"];
    $qry="insert into comment(p_id,u_id,co_description)values('".$pid."','".$uid."','".$comment."')";
    if(mysql_query($qry,$con))
    {
        echo '<script>alert("Your Comment is Successfully Inserted");</script>'; 
    }  
    else
    {
        echo '<script>alert("Your Comment is Not Inserted");</script>';
    }
            
} 
if(isset($_REQUEST["l3"]))
{
    $pid=$_REQUEST["sub3"];
    $uid=$_SESSION["id"];
    $comment=$_REQUEST["txt3"];
    $qry="insert into comment(p_id,u_id,co_description)values('".$pid."','".$uid."','".$comment."')";
  
    if(mysql_query($qry,$con))
    {
        echo '<script>alert("Your Comment is Successfully Inserted");</script>'; 
    }  
    else
    {
        echo '<script>alert("Your Comment is Not Inserted");</script>';
    }
            
} 
?>
<html>
    <head>
        <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <link type="image/x-icon" rel="icon" href="pause1.jpg">
        <title>Travel Beyond Limits</title>
    <meta name="description" content="Super light and fully Responsive jQuery slider">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/aslider.min.css">


    <style type="text/css">
        *
        {
            margin:0;
            padding:0; 
        }
        body
        {
            background-image:url('stone.jpg');
            height:4000px;
        }
        .header
        {
            //background-color:black;
            text-align:center;
            color:whitesmoke;
            font-size:60px;
            float:left;
            position:relative;
            left:500px;
            color:black;
            position:relative;
            top:40px;
            right:60px;
        }
        .d1
        {
            //background-color:#010140;
            width:100%;
            height:560px;
        }
        .caption h2
        {
            position:relative;
            bottom:230px;
            left:340px;
            font-weight:bold;
            color:red;
            font-size:50px; 
        }
        .div1
        {
            background-image:url('cropped-1366-768-329050.jpg'); 
        }
        .div3
        {
            background:linear-gradient(rgba(0, 255, 208, 0.8),yellow);
            float:right;
            height:1000px;
            width:420px;
            margin-bottom:80px; 
            position:relative;
            bottom:0px;
            border:2px solid black;
            border-radius: 10%;
            box-shadow:black -10px 5px 16px;
        }
        .div10
        {
            position:relative;
            left:840px;
            bottom:1000px;
            background:linear-gradient(rgba(0, 255, 208, 0.8),yellow);
            float:right;
            height:800px;
            width:420px;
            margin:40px;
            
            border:2px solid black;
            border-radius: 10%;
            box-shadow:black -10px 5px 16px;
        }
        nav { background: #2ba0db;}

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
  color: whitesmoke;
  display: block;
  font-size: 14px;
  padding: 5px 9px;
  transition: 0.3s linear;
}
.i1{
    position:relative; 
    right:600px;
    position:relative;
    top:5px;
    
}
nav ul li:hover { background: #126d9b; }

nav ul li ul {
  border-bottom: 5px solid #2ba0db;
  display: none;
  position: absolute;
  width: 250px;
  z-index:99999999999999999999999999999999999;
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
.div2
{
    width:800px;
    margin-right:40px;
    height:1000px;
    background:linear-gradient(rgba(0, 112, 255, 0.81),rgb(192, 192, 192),rgba(255, 235, 59, 0.76));
    float:left;
    position:relative;
    left:50px;
    border:2px solid black;
    border-radius:10%;
    box-shadow:black -10px 5px 16px; 
}
.div7
{
    width:85%;
    height:500px;
    border-radius:10%;
    color:white;
    margin-left:80px;
    margin-top:30px; 
    border:2px solid black;
     box-shadow:white -10px -5px 16px; 
     background-color:black;
}
.div4
{
    width:800px;
    margin-right:40px;
    height:970px;
    background:linear-gradient(rgba(0, 112, 255, 0.81),rgb(192, 192, 192),rgba(255, 235, 59, 0.76));
    float:left;
    position:relative;
    left:50px;
    bottom:150px;
    border:2px solid black;
    border-radius:10%;
    box-shadow:black -10px 5px 16px; 
}
.i11
{
    border-radius:50%;
    border:5px solid white;
    z-index:999;
    position:relative;
    bottom:80px; 
    width:130px;
    height:130px;
}
.c1
{
    color:red;
    font-size:40px;
    font-weight:bold;
    position:relative;
    bottom:40px; 
    
}
.c2 p
{
    margin-left:5px;
}
.c5
{
    margin-left:10px; 
    background-color:orange;
    border-radius:15%;
    float:left;
    padding:10px;
    color:white;
    transition-property:background-color;
    transition-duration:2s;
    
}
.c5:hover
{
    background-color:blueviolet;
    border-radius:15%;
    float:left;
    padding:10px;
    color:white;
    cursor:hand;
}
.c6
{
    margin-left:10px; 
    background-color:orange;
    border-radius:15%;
    float:left;
    padding:10px;
    color:white;
    transition-property:background-color;
    transition-duration:2s;
    position:relative;
    top:40px;
    
}
.c6:hover
{
    background-color:blueviolet;
    border-radius:15%;
    float:left;
    padding:10px;
    color:white;
    cursor:hand;
}
.d4
{
 background-color:lightblue;
 height:45px;
 width:100%;
 color:white;
 font-size:30px; 
 position:relative;
 bottom:60px;
 
}
.div12
{
    background-color:orange;
    width:100%;
    height:5px;
    position:relative;
    bottom:700px;
}
.div11
{
    background-color:black;
    width:100%;
    height:200px;
    position:relative;
    bottom:700px; 
}
.c8
{
    position:relative;
    left:10px;
    top:25px;
}
.vticker{
	border: 3px solid red;
	width: 400px;
        height:1000px;
}
.vticker ul{
	padding: 0;
        position:relative;
        top:20px;
}

.vticker li{
	list-style: none;
	border-bottom: 3px solid green;
	padding: 10px;
         margin-top:20px;
}
.aa
{
    background-color:orange;
    color:white;
    font-size:15px;
    padding:5px;
    transition-property:background-color;
    transition-duration:2s; 
}
.aa:hover
{
    cursor:hand;
    background-color:red; 
}
.vis
{
    background-color:orange;
    color:white;
    font-size:15px;
    padding:5px;
    transition-property:background-color;
    transition-duration:2s; 
}
.vis:hover
{
    cursor:hand;
    background-color:red; 
}
.visall
{
    background-color:orange;
    color:white;
    font-size:15px;
    padding:5px;
    transition-property:background-color;
    transition-duration:2s; 
    
}
.visall:hover
{
    cursor:hand;
    background-color:red; 
}
.up
{
    background-color:orange;
    color:white;
    font-size:15px;
    padding:5px;
    transition-property:background-color;
    transition-duration:2s; 
}
.up:hover
{
    cursor:hand;
    background-color:red; 
}
.down
{
    background-color:orange;
    color:white;
    font-size:15px;
    padding:5px;
    transition-property:background-color;
    transition-duration:2s; 
}
.down:hover
{
    cursor:hand;
    background-color:red; 
}
.toogle
{
    background-color:orange;
    color:white;
    font-size:15px;
    padding:5px;
    transition-property:background-color;
    transition-duration:2s; 
}
.toggle:hover
{
    cursor:hand;
    background-color:red; 
}
.et-run{
	background: red;
}
nav ul li ul li a:hover { background: #126d9b; }

nav .fa.fa-angle-down { margin-left: 6px; }
 
.social
{
    width:60px;height:360px;float:left;z-index:9999999;position:fixed;top:200px;left:0;
}
        </style>
        
    </head>
    <body>
       <div class="social">
         
<!--        <iframe  src="social/demo/index1.html" style="height:700px;width:80px;overflow:hidden;" FrameBorder="0" ></iframe>-->
           <iframe src="social_media/ss/index.html" style="height:360px; width:60px;margin:0;padding:0;overflow:hidden;position:relative;top:-80px;" frameBorder="0" ></iframe>
       </div> 
        <div class="div1">
        <img src="travel-tales-from-india-logo.png" alt="Travel Tales from India and Abroad" class="i1">
        <h1 class="header">Travel Beyond Limits</h1>
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
            
            ?>
           
        </ul>
      </li>
      
      <li><a href="about.php">Contact Us</a></li>
       <li><a href="rate.php">Rate Us</a></li>
    </ul>
  </div>
</nav>
        <div class="jquery-script-ads" align="center"><script type="text/javascript"><!--
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
        <div class="d1">
        <aside class="aslider-container">
  <div class="aslider" data-slide="aslider" data-speed="500" data-wait="3000" data-preview="true" data-dots="true">
   
      <div id="s1" class="slide"> <img src="assets/img/taj_mahal_agra_indian_4k_5k-1280x800.jpg" width="100%">
      <div class="caption">
          
   
      </div>
      <a href="#">go to link</a> </div>
      <div id="s2" class="slide"> <img src="assets/img/cropped-1920-1080-215948.jpg" width="100%" >
      <div class="caption">
        
   
        <a href="#">go to link</a> </div>
    </div>
      <div id="s3" class="slide"> <img src="assets/img/cropped-1920-1080-197134.jpg" width="1280px" height="800px">
      <div class="caption">
        
  
      </div>
      <a href="#">go to link</a> </div>
  </div>
</aside>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script src="assets/js/aslider.min.js"></script>

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

</script>   -->
        </div>
            <?php
        // put your code here
        ?>
<span class="d4">
    <marquee>Travel Beyond your Limits</marquee>   
</span>    
<div class="d11">
      
<div class="div2">
    <?php
    include 'dbcon1.php';
    $qry="select * from place where p_id=42";
    $result=  mysql_query($qry,$con);
    $row=  mysql_fetch_array($result);
    $_SESSION["pid1"]=$row["p_id"];
    echo'<style> h1{color:red;text-decoration:none}</style>';
     echo'<style> h1:hover{color:blue;text-decoration:underline;cursor:hand;}</style>';
      echo'<style> .c4{position:relative;left:20px;}</style>';
      echo'<style>.s1{position:relative;top:20px;}</style>';
      echo '<span class="s1">';
      
    echo'<h1 style="color:#ffa800;font-family:castellar;">'.$row["p_heading"].'</h1><br>';
    echo'<span class=c4>'.$row["p_postdate"].'</span><br>';
    echo'<br>';
    echo'<center><img src="'.$row["p_image"].'" style="height:400px;width:600px;"></center><br><br>';
    echo'<p style="padding:15px;">';
    echo''.$row["p_short"].'';
    echo'</p>';
    echo'</span>';
    
    echo'<br>';
    echo'<span class="c5" style="position:relative;top:50px; "><a href="read.php?pid44='.$row["p_id"].'">Read more</a></span><br><br>';
   ?> 
   
   <?php
   /* if(isset($_SESSION["id"]))
    {
     echo' <form name = "index1" action = "index.php" method = "POST" enctype = "multipart/form-data">';
    echo'<center><p style="font-size:25px">Leave Your Comments Here</p><br>';
    echo'<textarea cols=39 rows=15 name="txt1" placeholder="Write Your Comments Here"></textarea><br>';
   echo'<input type="hidden" value="'.$row["p_id"].'" name="sub1">';
   
    echo '<input type="submit" name="l1" value="Submit" style="color:white;font-size:25px;padding:5px;background-color:orange;"></center>';
    echo'</form>';
    
    }
    else
    {}*/
    ?>
</div>   
<div class="div3">
    <img src="521718.jpg" height="250px" width="420px" style ="border-radius:10%;">
    <center><img src="cropped-1920-1080-785010.jpg" height="130px" width="130px" class="i11"></center>
    <center><span class="c1">Travel Tale From India</span></center>
    <span class="c2"><p> I am Divyansh Agrawal and I started blogging on 'Travel Tales from India' in June 2005. I renamed it Travel Tales from India & Abroad in 2016. Within a few months of the launch my travel blog found a mention on both the BBC and The Guardian. I also featured in a National Geographic Skoda Yeti Video. I was recently featured on Via.com</p></span>
    <br>
    <span class="c2"><p> I am having a blast ever since. I do not miss my work but sometime I do miss my salary! Somewhere along the journey I ended up acquiring a Ph.D. from IIT Kanpur! I now wonder why?</p></span>
    <br>
    <span class="c2">You can write to me at divyanshblog at gmail dot com For advertising queries please check out my advertising page.</span>
</div>
<div class="div2" style="height:850px;position:relative;top:60px; ">
    <?php
    include 'dbcon1.php';
    $qry="select * from place where p_id=40";
    $result=  mysql_query($qry,$con);
    $row=  mysql_fetch_array($result);
    $_SESSION["pid2"]=$row["p_id"];
    echo'<style> h1{color:red;text-decoration:none}</style>';
     echo'<style> h1:hover{color:blue;text-decoration:underline;cursor:hand;}</style>';
      echo'<style> .c4{position:relative;left:20px;}</style>';
      echo'<style>.s1{margin-top:20px;}</style>';
      echo '<span class="s1">';
    echo'<h1 style="color:#ffa800;font-family:castellar;">'.$row["p_heading"].'</h1><br>';
    echo'<span class=c4>'.$row["p_postdate"].'</span><br>';
    echo'<br>';
    echo'<center><img src="'.$row["p_image"].'" style="height:350px;width:600px;"></center><br><br><br>';
     echo'<p style="padding:15px;">';
    echo''.$row["p_short"].'';
    echo '</p>';
    echo'</span>';
    
    echo'<br>';
    echo'<br> <span class="c5" style="position:relative;left:25px;"><a href="read.php?pid44='.$row["p_id"].'">Read more</a></span><br><br>';
    ?>
    
    <?php
    /*if(isset($_SESSION["id"]))
    {    
      echo' <form name = "index1" action = "index.php" method = "POST" enctype = "multipart/form-data">';
        echo '<div style="position:relative;bottom:40px;">';    
    echo'<center><p style="font-size:25px">Leave Your Comments Here</p><br>';
    echo'<textarea cols=39 rows=10 name="txt2" placeholder="Write Your Comments Here"></textarea><br>';
     echo'<input type="hidden" value="'.$row["p_id"].'" name="sub2">';
    echo '<input type="submit" name="l2" value="Submit" style="color:white;font-size:25px;padding:5px;background-color:orange;"></center>';
    echo '</div>';
    
    echo'</form>';
    
    }
    else
    {}*/
    ?>
</div>     
    <div class="div3">
        
        <?php
    include 'dbcon1.php';
    echo'<style> h1{color:red;text-decoration:none}</style>';
     echo'<style> h1:hover{color:blue;text-decoration:underline;cursor:hand;}</style>';
     echo '<h1>Comments</h1>';
        ?>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery.easing.min.js"></script>
<script type="text/javascript" src="jquery.easy-ticker1.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	var dd = $('.vticker').easyTicker({
		direction: 'up',
		easing: 'easeInOutBack',
		speed: 'slow',
		interval: 2000,
		height: '800px',
		visible: 1,
		mousePause: 0,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle'
			
		}
	}).data('easyTicker');
	
	cc = 1;
	$('.aa').click(function(){
		$('.vticker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
		cc++;
	});
	
	$('.vis').click(function(){
		dd.options['visible'] = 4;
		
	});
	
	
	
});
</script>
<span class="c8">


      <!--<button class="up" style="background-color:#38f3d4;"><img src="pause.png" style="height:40px;width:40px;"></button>-->
    <button class="toggle" style="background-color:#38f3d4;"><center><img src="pause1.jpg" style="height:40px;width:40px;"></center></button>

<div class="vticker">
    <?php
            
            include 'dbcon1.php';
    $qry2="select * from comment,user where user.u_id=comment.u_id";
    $result2=mysql_query($qry2, $con);
     //echo '<style>.i5{height:50px;width:50px;border-radius:50%;float:left;}</style>';
    echo '<ul>';
    while($row2=mysql_fetch_array($result2))
    
        {
               echo '<style>.i5{height:50px;width:50px;border-radius:50%;float:left;}</style>';
               echo '<style>.s7{position:relative; left:10px; color:blue;}</style>';
               echo '<style>.s9{float:left;color:blue;}</style>';
               echo'<li>';
               echo'<img src="'.$row2["u_image"].'" class="i5">';
               echo'<span class="s7">';
               echo $row2["u_name"];
               echo'</span>';
               echo'<br><br>';
               echo'<span class="s9">';
               echo $row2["u_date"];
               echo '</span>';
	       echo'<br><br>';
               echo $row2["co_description"];
               echo'</li>';
               
        }	
	echo'</ul>';
    
    
    ?>
	
</div>
</span>
    </div>
    <div class="div4"style="position:relative;top:100px;">
       <?php
    include 'dbcon1.php';
    $qry="select * from place where p_id=41";
    $result=  mysql_query($qry,$con);
    $row=  mysql_fetch_array($result);
    $_SESSION["pid3"]=$row["p_id"];
    echo'<style> h1{color:red;text-decoration:none}</style>';
     echo'<style> h1:hover{color:blue;text-decoration:underline;cursor:hand;}</style>';
      echo'<style> .c4{position:relative;left:20px;}</style>';
      echo'<style>.s1{margin-top:20px;}</style>';
       echo'<style>img{width:420px;}</style>';
      echo '<span class="s1">';
    echo'<h1 style="color:#ffa800;font-family:castellar;">'.$row["p_heading"].'</h1><br>';
    echo'<span class=c4>'.$row["p_postdate"].'</span><br>';
    echo'<br>';
    echo'<center><img src="'.$row["p_image"].'" style="height:350px;width:500px;"></center><br><br>';
     echo'<p style="padding:15px;">';
    echo''.$row["p_short"].'';
    echo'</p>';
    echo'</span>';
    
    echo '<br>';
    echo'<span class="c6"><a href="read.php?pid44='.$row["p_id"].'">Read more</a></span><br><br>';
    ?>
    <?php
    /*if(isset($_SESSION["id"]))
    {
    echo' <form name = "index1" action = "index.php" method = "POST" enctype = "multipart/form-data">';    
    echo'<div style="position:relative;left:50px;">';    
    echo'<center><p style="font-size:25px;position:relative;left:0;">Leave Your Comments Here</p><br>';
    echo'<center><textarea cols=39 rows=10 name="txt3" placeholder="Write Your Comments Here"></textarea></center>';
     echo'<input type="hidden" value="'.$row["p_id"].'" name="sub3">';
    echo '<input type="submit" name="l3" value="Submit" style="color:white;font-size:25px;padding:5px;background-color:orange;"></center>';
    echo '</div>';
    echo '</form>';
    }
    else
    {}*/
    ?>
    </div>
    
</div> 
<div class='div10'style="position:relative;bottom:730px;">
    <center><span style="font-size:45px;text-align:center;color:red;">Guest Posts</span></center>
    <center> <img src="guest.jpg" style="height:300px;width:300px;margin-top:40px; "></center>
    <center><span style="font-size:45px;text-align:center;color:red;position:relative;top:35px; ">My Travel Map</span></center>
      <center> <img src="map.png" style="height:300px;width:300px;margin-top:40px; "></center>    
</div>
<div class="div12">
</div>
     
<div class="div11">
    <span style="color:whitesmoke;margin-left:30px;margin-top:40px;position:relative;top:130px;  font-size:25px;">Home</span>
    <span style="color:whitesmoke;margin-left:30px;position:relative;top:130px;font-size:25px;">Advertise With Us</span>
   <span style="color:whitesmoke;margin-left:30px;margin-top:40px;font-size:25px;position:relative;top:130px;  "> RSS</span>
    <span style="color:whitesmoke;margin-left:30px;margin-top:40px;font-size:25px;position:relative;top:130px;  ">Contact Us</span>
    <img src="travel1.png" style="float:right;height:200px;width:270px;position:relative;right:50px; ">
</div>
<div class="div12" style="color:grey;height:25px;width:100%;">
    <center><span style="color:whitesmoke;">@ Travel Beyond Limits From India.All rights reserved.</span></center>
</div>   
    </body>
</html>
