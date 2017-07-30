<?php
$server="localhost";
$name="root";
$pass="";
$datab="fb2";

$con=new mysqli($server,$name,$pass,$datab);
if($con->connect_error) die($con->connect_error);

function queryrun($q)
{

global $con;
$result=$con->query($q);
if (!$result) die($con->error);


}
function destroy_session()
{
  $_SESSION=array();
  setcookie(session_name(),'',time()-25900,"/");
  session_destroy();
}
function sanitizeString($var)
{
  global $con;
  $var=strip_tags($var);
  $var=htmlentities($var);
  $var=stripslashes($var);
  return $con->real_escape_string($var);
}





 ?>
