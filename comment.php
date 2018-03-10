<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'dbcon1.php';
if(isset($_REQUEST["btnshow"]))
{
    $id=$_REQUEST["search"];
    if($id=="")
    { 
        $qry2="select * from comment,place where comment.p_id=place.p_id";
    } 
    else if(isset($id))
    {   
       
        $qry2="select * from comment,place where place.p_id='".$id."'and comment.p_id=place.p_id";
        echo $qry2;
        
    }
    
    $result=  mysql_query($qry2,$con);
     echo '<style type="text/css">
        td
        {
        color:white;
        }
        body
        {
        background-color:#051127;
        }
     </style>';
    echo '<center><table cellpadding="6px" cellspacing="1px" border="3px">
    <tr>
    <td> Comment id</td>
    <td> Comment Description</td>
    <td> User id</td>
    <td> Place id</td>
    <td>Place Name</td>
     </tr>
    ';
     while($row= mysql_fetch_array($result))
     {
        echo '<tr>';
        echo '<td>'.$row["co_id"].'</td>';
        echo '<td>'.$row["co_description"].'</td>';
         echo '<td>'.$row["u_id"].'</td>';
         echo '<td>'.$row["p_id"].'</td>';
         echo '<td>'.$row["p_heading"].'</td>';
        
        
         echo '</tr>';
     }       
          echo '</table></center>';   
}
 else {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comment Section</title>
    <style type="text/css">
            *
            {
                padding:0;
                margin:0; 
            }
             .d1{
                height:120px;
                background-image:url('giphy.gif');
                color:wheat;
                font-size:40px; 
                text-align:center;
                font-weight:bold; 
            }
            .d1:hover{
                color:whitesmoke;
                text-decoration:underline; 
            }
              .d2
            {
               height:30px;
               background-color:red; 
            }
             body
            {
                background-color:black; 
            }
             .c1
            {
                background-color:orange;
                font-size:20px;
                color:whitesmoke;
                border:1px solid red;
                padding:5px; 
                border-radius:15%;
                transition-property:background-color;
                transition-duration:3s; 
            }
            .c1:hover
            {
                background-color:red;
                border:1px solid orange;
                cursor:hand; 
            }
            .t1
            {
                color:whitesmoke;
                font-size:25px;
            }
            </style>
    </head>
    
    <body>
        <div class='d1'>
            <h1>Comment Section</h1>
            </div>
        <div class='d2'>
            <marquee class='t1'>Travel Beyond your limits</marquee>
        </div>
         <form name="comment" action="comment.php" method="POST" enctype="multipart/form-data">
            <center>
             
         <table border="0" cellpadding="15px" cellspacing="15px" >
             <tr>
                 <td class='t1'>Search Through Place Name</td>
                 <td><select name="search">
                         <option value="">---Select Place---</option>
                         <?php
                         include'dbcon1.php';
                         $qry21="select * from place";
                         $result1=  mysql_query($qry21,$con);
                          while ($row1 = mysql_fetch_array($result1)) {
                              echo '<option value="'.$row1["p_id"].'">'.$row1["p_heading"].'</option>';
                              
                         }
                         ?>
                     </select></td>
             </tr>
             <tr>
                 <td><input type="submit" name="btnshow" value="Show" class="c1"/></td>
                     
             </tr>
         </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
<?php
}
?>