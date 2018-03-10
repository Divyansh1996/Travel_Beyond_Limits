<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Message And View</title>
        <style type="text/css">
            body
            {
                background-color:lightcoral; 
            }
        </style>
    </head>
    <body>
        
        <?php
        include'dbcon1.php';
         $qry_s="select * from user,message where message.u_id=user.u_id";
    $result=mysql_query($qry_s,$con);
         echo '<table cellpadding="6px" cellspacing="1px" border="3px solid white" style="color:white;">
    <tr>
    <td> Message id</td>
    <td> User id</td>
    <td> User Name</td>
    <td> User Contact</td>
    <td> Subject</td>
    <td> Message</td>
    <td> Reply</td>
    </tr>
    ';
         while($row=  mysql_fetch_array($result))
    {
        echo '<tr>';
        echo '<td>'.$row["m_id"].'</td>';
        echo '<td>'.$row["u_id"].'</td>';
        echo '<td>'.$row["u_name"].'</td>';
        
        echo '<td>'.$row["u_contact"].'</td>';
        echo '<td>'.$row["m_subject"].'</td>';
        
        echo '<td>'.$row["m_message"].'</td>';
    
         echo '<td><a href="message2.php?id='.$row["m_id"].'">Reply</a></td>';
      
        echo '</tr>';
    }
    echo '</table>';
        ?>
    </body>
</html>
