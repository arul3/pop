<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$url="https://www.google.co.in/search?q=create+url+to+files&ie=utf-8&oe=utf-8&client=firefox-b&gfe_rd=cr&ei=Jgh3Wd38D7Ly8AfvgqjoCw#q=dynamic+url+in+php";



$q=parse_url($url,PHP_URL_QUERY);

if(isset($_GET['data']))
$query=$_GET['data'];
$cook="456";

$id=$_GET['hash'];

$hash = hash('ripemd128',$query);
if($hash==$id)
{
    $src=$query.".jpg";

}
else
{
    echo 'No such File or Directory';
}
if(file_exists($src))
if($res=  imagecreatefromjpeg($src))
{
    header("Content-type:image/jpg");
    imagejpeg($res);
}
if($res==FALSE)
   
    echo "Forbidden";