<?php

/* 
 *  This is created by ARULKUMR S, THE AUTHOR

 */
$link = mysqli_connect("127.0.0.1", "root", "", "fb2");
//start_session();

//$userid = $_SESSION['id'];
$count = 0;

$sql = "SELECT * FROM 6_chatlist";

    $res = mysqli_query($link, $sql);
    
    if (!$res)  die("query error".mysqli_error($link));    
    $chatlist_data[] = array();
    $chatlist_data = mysqli_fetch_all($res,MYSQLI_ASSOC);
     
  
  
  echo json_encode($chatlist_data); 
  