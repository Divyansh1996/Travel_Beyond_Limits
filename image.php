<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'dbcon1.php';
if(isset($_REQUEST["btn"]))
{
echo'<script>alert("Now you will navigate to other to add more images of the place")</script>';    
}    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Image</title>
    </head>
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
            .t2
            {
                color:whitesmoke;
                background-color:orange;
                padding:10px; 
                transition-property:background-color;
                transition-duration:3s; 
                border-radius:10%;
            }
            .t2:hover
            {
               background-color:white;
               color:black;
               cursor:hand;
            }
        
        </style>
    <body>
        <div class='d1'>
            <h1>ADD Image</h1>
            </div>
        <div class='d2'>
            <marquee class='t1'>Travel Beyond your limits</marquee>
        </div>
        <form name="image" action="upload.php" method="POST" enctype="multipart/form-data">
            <center><table border="0" cellspacing="10px" cellpadding='15px' >
                     <tr>
                        <td class='t1'>Place Id </td>
                        <td><input type="text" name="txtid" <?php
                        include'dbcon1.php';
                        $qry12="select max(p_id)as max_id from place";
                         $result=mysql_query($qry12,$con);
                        $row=  mysql_fetch_array($result);
                        echo'value="'.$row["max_id"].'"';
                        ?> readonly/></td>
                    </tr>
                    <tr>
                        <td class='t1'>Place Name</td>
                        <td><input type="text" name="txtname" <?php
                        include'dbcon1.php';
                        $qry12="select max(p_id)as max_id from place";
                         $result=mysql_query($qry12,$con);
                        $row=  mysql_fetch_array($result);
                        $id1=$row["max_id"];
                        $qry21="select * from place where p_id='".$id1."'";
                        $result1=mysql_query($qry21,$con);
                        $row1=  mysql_fetch_array($result1);
                        echo'value="'.$row1["p_heading"].'"';
                        ?> readonly/></td>
                    </tr>
                    <tr>
                        <td class='t1'>Place Image</td>
                        <td><input type="file" name="images[]" multiple="multiple" accept="image/*" class="t1"/></td>
                       
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Add Image" name="btn" class="t2"/>
                    </tr>
                </table>  
            </center>
        </form>
        <?phpecho "select * from place where p_id='".$id1."'";?>
        <?php
        // put your code here
        ?>
    </body>
</html>
