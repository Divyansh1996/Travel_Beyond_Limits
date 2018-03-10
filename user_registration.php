<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'dbcon1.php';
if(isset($_REQUEST["btnsubmit"]))
{
    $id=$_REQUEST["txtid"];
     $name=$_REQUEST["txtname"];
     $pass1=$_REQUEST["txtpass1"];
     $pass2=$_REQUEST["txtpass2"];
     $address=$_REQUEST["txtadd"];
     $date=$_REQUEST["txtdate"];
     $email=$_REQUEST["txtemail"];
     
    
}    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="user_registration" action="user_registration.php" method="POST" enctype="multipart/form-data">
            <table border="0" cellspacing="10" cellpadding="10">
                    <tr>
                        <td>User id</td>
                        <td><input type="text" name="txtid" value="" readonly/></td>
                    </tr>
                
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="txtname" value=""/></td>
                    </tr>
                    
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="txtpass1" value=""/></td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="txtpass2" value=""/></td>
                    </tr>
                    <tr>
                        <td>Profile Image:</td>
                        <td><input type="file" name="txtphoto" value=""/></td>
                    </tr>
                    <tr>
                        <td>New E-mail:</td>
                        <td><input type="text" name="txtemail" value=""/></td>
                    </tr>
                    <tr>
                        <td>Contact:</td>
                        <td><input type="text" name="txtcontact" value=""/></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><textarea rows="10" cols="15" name="txtadd" value=""/></textarea></td>
                    </tr>
                    <tr>
                        <td>Registered Date</td>
                        <td><input type="text" name="txtdate" value=""/></td>
                    </tr>
                    <tr>
                        
                        <td colspan="2"><input type="submit" name="btnsubmit" value="Register"/></td>
                    </tr>
                
            </table>

        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
