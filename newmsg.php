<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'function.php';
header("Content-type: text/xml");

$q="SELECT * FROM msg WHERE status='ur'";

$result=$con->query($q);

$row=$result->num_rows;

echo '<?xml version="1.0" encoding="UTF-8" ?>';
echo '<msgs>';

for ($i=0 ;$i<$row ;$i++ )
{
    $x=$result->fetch_assoc();
echo '<msg>'.$x['msg'].'</msg>';
}

$q="UPDATE msg SET status='r' WHERE status='ur'";
$result3=$con->query($q);
$con->close();
echo '</msgs>';
?>
