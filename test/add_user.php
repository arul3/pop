<?php

/* 
 *  This is created by ARULKUMR S, THE AUTHOR

 */

$link = mysqli_connect("127.0.0.1", "root", "", "fb2");
session_start();

 if (isset($_POST)) 
{
            $userid=$_SESSION['id'];
            $add_user=$_POST['add_user'];
            
$sql = "CREATE TABLE $userid".
        "_$add_user (no INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, sender_id VARCHAR(10),receiver_id".
                    " VARCHAR(10),message TEXT,time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,".
                    "status INT(3))";
            
                            $res=mysqli_query($link, $sql);
                            
                            if (!$res)    die("FFF".mysqli_error($link));

                            
$sql2 = "CREATE TRIGGER update_to_incoming"
        ."AFTER INSERT ON $userid"."_$add_user FOR EACH NEW ROW BEGIN"
        
        ."IF NEW.receiver_id"
        ."INSERT INTO $userid"."_incoming_message (sender_id,message,time) VALUES"
        . "('NEW.')";
                                                    
                                        
                                        
            
                                        
            
}