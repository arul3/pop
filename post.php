<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'function.php';
if(isset($_POST['mssg']))
{
    $m=$_POST['mssg'];
    $q="INSERT INTO `msg` (`msg`,`status`) VALUES ('$m','ur')";
    $res=$con->query($q);
    $con->close();
    
    
}


?>
