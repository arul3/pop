<?php



$link = mysqli_connect("127.0.0.1", "root", "", "fb2");
session_start();

 if (isset($_POST)) 
{
            $userid=$_SESSION['id'];
            $add_user=$_POST['add_user'];
            
$sql3 = "CREATE TABLE $userid".
        "_$add_user (no INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, sender_id VARCHAR(10),receiver_id".
                    " VARCHAR(10),message TEXT,time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,".
                    "status INT(3))";
            
                            $res3=mysqli_query($link, $sql3);
                            
                            if (!$res3)    die("FFF".mysqli_error($link));

                            
$sql4 = "CREATE TRIGGER update_to_$userid
        AFTER INSERT ON $userid"."_$add_user FOR EACH ROW BEGIN
        IF NEW.receiver_id=$userid THEN
        INSERT INTO $userid"."_incoming_message (sender_id,message,time) VALUES
        (NEW.sender_id,NEW.message,NEW.time,'101');
        ELSEIF NEW.receiver_id=$add_user THEN
        INSERT INTO $add_user"."_incoming_message (sender_id,message,time) VALUES
            (NEW.sender_id,NEW.message,NEW.time,'101');
 END IF;END;";    
        
            $res4=mysqli_query($link, $sql4);
                            
                            if (!$res4)    die("adding_user".mysqli_error($link));

  $sql1="SELECT no FROM $userid"."_chatlist WHERE user_id=$add_user";                          
                            
  $sql2="INSERT INTO $userid"."_chatlist (user_id) VALUES ('$add_user')";                                      
                                        
            $res1 = mysqli_query($link, $sql1);
            
            if(!$res1) die("error".mysqli_error ($link));
                    
                               $row= mysqli_fetch_array($res3,MYSQLI_ASSOC);
                               if(!row) {       die("eror operation");               }
                               
            
}