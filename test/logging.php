<?php

/* 
 *  This is created by ARULKUMR S, THE AUTHOR

 */
$link = mysqli_connect("127.0.0.1", "root", "", "fb2");
session_start();

        if (isset($_POST))
            
 {                 
            $pass = $_POST['pass']."5573";
            $hash = hash('ripemd128',$pass) ;
            $name = mysqli_real_escape_string($link,$_POST['name']);
            $no = mysqli_real_escape_string($link,$_POST['mobile']);
                
                $sql="INSERT INTO users (mobile_no,pass,name) VALUES ('$no','$hash','$name')";
                
                        $res = mysqli_query($link, $sql);
                        
                                if(!$res){ die('query error '.mysqli_error($link));         }
                                
              $sql2="SELECT ID FROM users WHERE mobile_no='$no' AND pass='$hash'";
              
                      $res2 = mysqli_query($link, $sql2);
                      
                                        if(!$res2){   die('query error2'.mysqli_error($link));   }
                                  
                                     $row = mysqli_fetch_array($res2,MYSQLI_ASSOC);
                                     
                                     $userid=$row['ID'];
                                    
                                     $_SESSION['id']=$userid;
                                    $user_group = $userid."_groups";
                                     $user_incoming_message = $userid."_incoming_message";
                                     $user_chatlist=$userid."_chatlist";
                                        
                    $sql3="CREATE TABLE $user_group (group_id VARCHAR(10))";
                    
                    $sql4="CREATE TABLE $user_incoming_message (sender_id INT,group_id INT NULL,message TEXT,".
                            "time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,status INT(3))";
                    
                                        
                                     
                    $sql5="CREATE TABLE $user_chatlist".
                            "(no INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,user_id VARCHAR(10))";
                    
                    
                    
                    $res3 = mysqli_query($link, $sql3);
                      
                                        if(!$res3){   die('query error'.mysqli_error($link));   }
                                        
                                        
                    $res4 = mysqli_query($link, $sql4);
                      
                                        if(!$res4){   die('query error'.mysqli_error($link));   }
                        
                    $res5 = mysqli_query($link, $sql5);
                                                    if(!$res5)   die('query error'.mysqli_error($link));
       
                                                    
                                     
                                     
              
                                        }
                                        
                                        
                                        
              ?>


<form name="add user to chat list" action="add_user.php" method="POST">
    
    <input type="text" name="add_user">
    <input type="submit" value="click to chat">
    
    
    
</form>
