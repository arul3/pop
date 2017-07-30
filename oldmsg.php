<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'function.php';
header("Content-type: text/xml");
session_start();
$_SESSION['id']="1";

$q="SELECT * FROM `messages` WHERE (sendid=".$_SESSION['id']." AND receiveid='3' AND STATUS='1') OR (receiveid=".$_SESSION['id']." AND sendid='3' AND STATUS='1' )";

$result=$con->query($q); if(!$result){die("query error".$con->error);}

$row=$result->num_rows;

echo '<?xml version="1.0" encoding="UTF-8" ?>';
echo '<msgs>';

for ($i=0 ;$i<$row ;$i++ )
{
   $x=$result->fetch_assoc();
   if($x['sendid']==$_SESSION['id'])
   {
echo '<msg type="s">'.$x['message'].'</msg>';

   }
 else {
       echo '<msg type="r">'.$x['message'].'</msg>';
   }
}

//$q="UPDATE msg SET status='r' WHERE status='ur'";
//$result3=$con->query($q);
$con->close();
echo '</msgs>';
?>

