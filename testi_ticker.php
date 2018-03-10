<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<style>
.wrapper {
	width:100%;
	margin:0 auto;
}
.demof {
border: 1px solid #ccc;
margin: 25px 0;
}
.demof ul {
padding: 0;
list-style: none;
}
.demof li {
padding: 20px;
border-bottom: 1px dashed #ccc;
}
.demof li.odd {
background: #dadada;
}
.demof li.even {
background: #f2f2f2;
}
.demof li:after {
content: '';
display: block;
clear: both;
}
.demof img {
float: left;
/*width: 177px;*/
margin: 5px 15px 0 0;
 background-color:#ffffff;
 border:10px solid #ffffff;
 border-radius:50%;
 -moz-border-radius:50%;
 -webkit-border-radius:50%;
 -ms-border-radius:50%;
 -o-border-radius:50%;
 box-shadow:0px 0px 10px #ffffff;
 float:left;
 height:180px;
 width:180px;

}
.demof a {
font-family: Arial, sans-serif;
font-size: 20px;
font-weight: bold;
color: #06f;
}
.demof p {
margin: 15px 0 0;
font-size: 14px;
}

</style>
</head>

<body>
<!--<div class="jquery-script-ads"><script type="text/javascript">
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>-->
<div class="jquery-script-clear"></div>

<div class="wrapper">
<div class="demo1 demof">
    <ul>
     <?php
           
        include '../Admin/dbcon.php';
        $qry="SELECT pic,description,t_name,type from testimonial WHERE show_status='show' ORDER BY tid DESC ";
        $result=  mysql_query($qry);
         
        $i=1;
        $c=1;
        while($row= mysql_fetch_array($result))
        {
          if($c%2==0)
                {
                    echo"<li class='odd'>";
                }
                else 
                {
                    echo'<li class="even">';
                }
                if($row["type"]=='user')
                {
                       echo'<img src="../Admin/upuser/'.$row["pic"].'"><br>';
                    
                }
                else{
           echo'
             
            <img src="../Admin/testimonial/'.$row["pic"].'"><br>';
                }
              
              echo'<p>'.$row["description"].'</p>
            <p style="float:right;">'.$row["t_name"].'</p>
            </li>
           ';
    
              $c++;
              $i++; 
   
            } 
            ?>
    </ul>
</div>
</div> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="jquery.easy-ticker.js"></script> 
<script>
$(function(){
	$('.demo1').easyTicker({
		direction: 'up',
		easing: 'swing'
	});
	
	
	
	$('.demo3').easyTicker({
		visible: 1,
		interval: 4000
	});
	
});
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
</body>
</html>
