<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include'dbcon1.php';
if(isset($_REQUEST["btnadd"]))
{
 // $id=$_REQUEST["txtid"];  
  $placename=$_REQUEST["txtname"];
  $history=  mysql_real_escape_string($_REQUEST["txthistory"]);
  $near=$_REQUEST["txtnear"];
  $description=  mysql_real_escape_string($_REQUEST["txtdescription"]);
  $hotel=$_REQUEST["txthotel"];
  $post=$_REQUEST["txtpost"];
  $city=$_REQUEST["txtcity"];
  $popular=$_REQUEST["txtpopular"];
  $short=$_REQUEST["txtshort"];
  $source=$_FILES["upfile"]["tmp_name"];
  $target="upload/".$_FILES["upfile"]["name"];
   if(move_uploaded_file($source, $target))
  {
       echo 'hello file is moving';
 $image=$_FILES["upfile"]["name"];
  
 $qry="insert into place (p_heading,p_history,p_cityid,place_near,p_description,p_hotel,p_postdate,p_image,p_popular,p_short) values('".$placename."','".$history."','".$city."','".$near."','".$description."','".$hotel."','".$post."','".$image."','".$popular."','".$short."')";
 echo'<script>alert("Now you will navigate to other to add more images of the place")</script>';  
 if(mysql_query($qry,$con))
      {
       echo $qry;
       echo 'qry executed';
       echo '<script>window.location.href="image.php";</script>';
       }
       
     else {
             echo "<h1 class='c1'>Error</h1>".mysql_error();
          }
          
  }
   else
         {   //$image=$_FILES["upfile"]["name"];
       echo'<script>alert("Now you will navigate to other to add more images of the place")</script>';    
       $qry="insert into place (p_heading,p_history,p_cityid,place_near,p_description,p_hotel,p_postdate,p_popular,p_short) values('".$placename."','".$history."','".$city."','".$near."','".$description."','".$hotel."','".$post."','".$popular."','".$short."')"; 

             if(mysql_query($qry, $con))
             {
             echo "<h1 class='c1'>Your Blog is uploaded with</h1>";    
             echo "<h1 class='c1'> No Title Photo is uploaded.</h1>";
              echo '<script>window.location.href="image.php";</script>';
             }
              else {
                  echo "<h1 class='c1'>Error</h1>".  mysql_error();
                 }
         }
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Place</title>
        <style type="text/css">
            body
            {
                 background-color:black;
            }
            *
            {
              margin:0;
              padding:0; 
            }
          .d1{
                height:120px;
                background-image:url('giphy.gif');
                color:wheat;
                font-size:50px; 
                text-align:center;
                font-weight:bold; 
            }
            .d2
            {
               height:30px;
               background-color:red; 
            }
            .t1
            {
                color:whitesmoke;
                font-size:25px;
            }
            .a1
            {
                color:whitesmoke;
                background-color:orange;
                padding:10px; 
                transition-property:background-color;
                transition-duration:3s; 
                border-radius:10%;
            }
            .a1:hover
            {
               background-color:white;
               color:black;
               cursor:hand;
            }
            .c1
            {
                color:whitesmoke;
                font-weight:bold; 
            }
            </style>
    </head>
    <body>
         <div class='d1'>
            <h1>ADD NEW PLACE</h1>
            </div>
        <div class='d2'>
            <marquee class='t1'>Travel Beyond your limits</marquee>
        </div>
        <form name="addplace" action="addplace.php" method="POST" enctype="multipart/form-data">
           
            <center><table border="0" cellspacing="10px" cellpadding='15px' >
                    <tr>
                        <td class='t1'>Place id</td>
                        <td><input type="text" name="txtid" <?php 
                        $qry1="select max(p_id)+1 as max_id from place";
                        $result=mysql_query($qry1,$con);
                        $row=  mysql_fetch_array($result);
                        echo'value="'.$row["max_id"].'"';
                        ?>></td>
                    </tr>        
                    <tr>
                        <td class='t1'>Name of the Place </td>
                        <td><input type="text" name="txtname" value=""/></td>
                    </tr>
                    <tr>
                        <td class='t1'>History of Place</td>
                        <td><textarea rows="4" cols="25" name="txthistory"> </textarea></td>
                    </tr>
                     <tr>
                        <td class='t1'>Place in Popular </td>
                        <td><input type="text" name="txtpopular" value=""/></td>
                    </tr>
                    <tr>
                        <td class='t1'>City Name</td>
                        <td><select name='txtcity'>
                                <option value=''>---Select City---</option>
                                <?php
                                include'dbcon1.php';  
                                $qry="select * from city";
                                $result=  mysql_query($qry,$con);
                                while($row= mysql_fetch_array($result))
                                {
                                
                                    echo'<option value="'.$row["cityid"].'">'.$row["city"].'</option>';
                                }
                                    ?>
                                
                            </select>
                        </td>
                    </tr>    
                    <tr>
                        <td class='t1'>Near to the place</td>
                        <td><input type="text" name="txtnear" value=""/></td>
                    </tr>
                    
                    <tr>
                        <td class='t1'>Description</td>
                        <td><textarea rows="20" cols="25" name="txtdescription"> </textarea></td>
                    </tr>
                    <tr>
                        <td class='t1'>Short Description</td>
                        <td><textarea rows="20" cols="25" name="txtshort"> </textarea></td>
                    </tr>
                    <tr>
                        <td class='t1'>Name of the hotel</td>
                        <td><input type="text" name="txthotel" value=""/></td>
                    </tr>
                    <tr>
                        <td class="t1">Title Image of the place</td>
                        <td><input type="file" name="upfile" value=""/>
                    </td>
                  
                    </tr>
                  
                    <tr>
                        <td class='t1'>Post Date</td>
                        <td><input type="text" name="txtpost" value=""/></td>
                    </tr>
                    
                    <tr>
                        
                        <td colspan="2"><input type="submit" name="btnadd" value="Add Place" class='a1'/></td>
                    </tr>
              
            </table>
            </center>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
