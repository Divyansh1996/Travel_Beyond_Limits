<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start();
 include 'dbcon1.php';
 if(isset($_REQUEST["submit"]))
 {
     $address=$_REQUEST["txt"];
     $uid=$_SESSION["id"];
     $pid=$_SESSION["pid3"];
     if(isset($_SESSION["id"]))
     {     
     $qry11="insert into comment(co_description,u_id,p_id)values('".$address."','".$uid."','".$pid."')";
     echo $qry11; 
     if(mysql_query($qry11, $con))
     {
        echo'<script>alert("Your Comment is Send");</script>'; 
     }
     else
     {
       echo'<script>alert("Your Comment is not Send");</script>';   
     }
     }
     else
     {
          echo'<script>alert("Your Should First Login Then Your Mssage will be Sent");</script>';
     }
 } 

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Travel Beyond Limits</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
        <style type="text/css">
        *
        {
            margin:0;
            padding:0; 
        }
        html { box-sizing: border-box; }

*, *:before, *:after { box-sizing: inherit; }
        body
        {
            background-image:url('stone.jpg'); 
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
}

nav ul li a {
  color: #fff;
  display: block;
  font-size: 14px;
  padding: 15px 14px;
  transition: 0.3s linear;
}

nav ul li:hover { background: #126d9b; }

nav ul li ul {
  border-bottom: 5px solid #2ba0db;
  display: none;
  position: absolute;
  width: 250px;
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
.div1
{
    background-image:url('cropped-1366-768-329050.jpg'); 
   width:100%;
   height:160px;
}
.header
{
    color:black;
   position:relative;
   bottom:270px;
   font-size:40px;
   
}
.header:hover
{
    color:blue;
    text-decoration:underline; 
}
.div2
{
    width:750px;
    margin-right:40px;
    height:2100px;
    background-color:whitesmoke;
    float:left;
    position:relative;
    left:50px;
    border:2px solid black;
    border-radius:10%;
    box-shadow:black -10px 5px 16px; 
}
.d11
{  margin-top:20px; 
    margin-left:25px;
    opacity:0.6;
    transition-property:transform;
    transition-duration:3s; 
}
.d11:hover
{
    opacity:1;
    transform:scale(1.5); 
}
.div3
        {
            background-color:whitesmoke;
            float:right;
            height:1000px;
            width:520px;
            margin-bottom:80px; 
            position:relative;
            bottom:0px;
            border:2px solid black;
            border-radius: 10%;
            box-shadow:black -10px 5px 16px;
        }
        .s1
        {
            margin-top:40px;
            color:red;
            font-size:30px;
             position:relative;
            top:40px;
        }
        .s1:hover
        {
            color:blue;
            text-decoration:underline; 
        }
        .s2
        {
            background-color:orange;
            color:whitesmoke;
            padding:5px;
            font-size:20px;
            border:2px solid orange;
            position:relative;
            top:70px;
            width:100px;
        }
        .s2:hover
        {
            cursor:hand; 
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
        </style>
    </head>
    <body>
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
        <ul style="z-index:9999999; ">
            <li><a href="read1.php">Amer Fort</a></li>
          <li><a href="read2.php">Borra Caves</a></li>
          <li><a href="read3.php">Victorial Memorial</a></li>
        </ul>
      </li>
      <li><a href="about.php">Contact Us</a></li>
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

<div class='div2'>
    <center><span style='color:green;position:relative;top:50px;font-size:40px;'>Description of <?php
      include 'dbcon1.php';
      $qry="select * from place where p_id=41";
      $result=  mysql_query($qry, $con);
      $row=  mysql_fetch_array($result);
      echo $row["p_heading"];
      ?> </span></center>
    <br>
    <p style='position:relative;left:10px;top:60px;font-size:25px'><?php
      include 'dbcon1.php';
      $qry="select * from place where p_id=41";
      $result=  mysql_query($qry, $con);
      $row=  mysql_fetch_array($result);
      echo $row["p_description"];
      ?> </p>
    <br><br>
    <center><span style='color:green;position:relative;top:50px;font-size:40px;'>Images of <?php
      include 'dbcon1.php';
      $qry="select * from place where p_id=41";
      $result=  mysql_query($qry, $con);
      $row=  mysql_fetch_array($result);
      echo $row["p_heading"];
      ?> </span></center><br><br><?php
      include 'dbcon1.php';
      $qry="select * from image where i_id between 19 and 24";
      $result=  mysql_query($qry, $con);
      while($row=  mysql_fetch_array($result))
      {
       echo'<center><div class="d11" style="height:150px;width:150px;position:relative;top:30px;left:20px;border:2px solid blue;float:left;"><img src="upload/'.$row["i_name"].'" height="150px" width="150px"></div></center>';   
      }
      ?><br><br>
      
    <center><span style='color:green;position:relative;top:260px;right:160px;font-size:40px;text-align:center;'>History of <?php
      include 'dbcon1.php';
      $qry="select * from place where p_id=41";
      $result=  mysql_query($qry, $con);
      $row=  mysql_fetch_array($result);
      
      echo $row["p_heading"];
      
      ?> </span></center>
    <br>
    <p style='position:relative;left:10px;top:200px;font-size:25px;float:left;'><?php
      include 'dbcon1.php';
      $qry="select * from place where p_id=41";
      $result=  mysql_query($qry, $con);
      $row=  mysql_fetch_array($result);
      echo $row["p_history"];
      ?> </p> <br><br>
    <span style="color:green;font-size:30px;position:relative;top:750px;right:300px; ">Near By Hotels: </span>
    <?php
include 'dbcon1.php';
$qry="select * from place where p_id=41";
$result=  mysql_query($qry, $con);
$row=  mysql_fetch_array($result);
echo '<br><br>';
echo'<span style="position:relative;top:225px;left:270px;font-size:30px;">';
echo $row["p_hotel"];
echo '</span>'
    ?>
</div>
<div class='div3'>
    <center><span class="s1" style="font-size:55px;">Comments</span></center><br><br>
            
        <?php
    include 'dbcon1.php';
   
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
		height: 'auto',
		visible: 1,
		mousePause: 0,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
			stopText: 'Stop !!!'
		}
	}).data('easyTicker');
	
	cc = 1;
	$('.aa').click(function(){
		$('.vticker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
		cc++;
	});
	
	$('.vis').click(function(){
		dd.options['visible'] = 3;
		
	});
	
	$('.visall').click(function(){
		dd.stop();
		dd.options['visible'] = 0 ;
		dd.start();
	});
	
});
</script>
<span class="c8" style="position:relative;top:50px;left:50px; ">
<button class="aa">ADD</button>
<button class="vis">SET VISIBLE 3</button>
<button class="visall">SET VISIBLE ALL</button>

<button class="up">UP</button>
<button class="down">DOWN</button>
<button class="toggle">TOGGLE</button>
<div class="vticker" style="height:1000px;">
    <?php
            
            include 'dbcon1.php';
    $qry2="select * from comment,user where user.u_id=comment.u_id and comment.p_id=41";
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
<div class="div3" style="position:relative;bottom:35px;height:600px;">
    <center><span class="s1">Leave Your Comments</span></center>
    <form name="read" action="read2.php" method="POST" enctype="multipart/form-data">
        <center><span style="position:relative;top:60px; "><textarea rows="20" cols="55" name="txt" value="" placeholder="Write Your Comments Here"></textarea></span></center>
       <?php
       echo'<center><input type="submit" class="s2" value="Submit" name="submit"></center>';
       ?> 
        
    </form>
</div>
        <?php
        // put your code here
        ?>
    </body>
</html>

