<?php
session_start();
$_SESSION["admin_name"]="";
$_SESSION["admin_id"]="";
session_destroy();
header("Location:adminlog.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

