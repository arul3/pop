<?php

/* 
 *  This is created by ARULKUMR S, THE AUTHOR

 */
$link = mysqli_connect("127.0.0.1", "root", "", "fb2");

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
                                     
                                    $user_group = $userid."_groups";
                                     $user_incoming_message = $userid."_incoming_message";
                                        
                    $sql3="CREATE TABLE $user_group (group_id INT(10))";
                    
                    $sql4="CREATE TABLE $user_incoming_message (sender_id INT,group_id INT NULL,message TEXT,".
                            "time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,status INT(3))";
                    
                                        
                                        
                      $res3 = mysqli_query($link, $sql3);
                      
                                        if(!$res3){   die('query error'.mysqli_error($link));   }
                                        
                                        
                      $res4 = mysqli_query($link, $sql4);
                      
                                        if(!$res4){   die('query error'.mysqli_error($link));   }
                        
            
       
 
                                     echo $userid."userid";
                                        }