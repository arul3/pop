<?php

/* 
 *  This is created by ARULKUMR S, THE AUTHOR

 */
$user = 7;
$chat_user = $_GET['x'];
$table = $user."_".$chat_user;
$table = preg_replace("/ /", "", $table);

$link = mysqli_connect("127.0.0.1", "root", "", "fb2");


$sql = "SELECT * FROM `$table`";
echo "<br>s";echo $sql;

$res = mysqli_query($link, $sql);

        if(!$res) die("query".mysqli_error($link));

        $data[] = array();
            
        
                $data = mysqli_fetch_all($res,MYSQLI_ASSOC);
                
                


              //  echo json_encode($data);
                
                
                
mysqli_free_result($res);

mysqli_close($link);