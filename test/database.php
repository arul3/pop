<?php
$link = mysqli_connect("127.0.0.1", "root", "", "fb2");

if (!$link) {
    echo "Error: Unable to connect to MySQL.";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}

//$sql="INSERT INTO usermsg (sender,msg) VALUES ('234','hi hello viking')";

  //      $res=mysqli_query($link, $sql);
    //        if (!$res)
                
      //          { 
              //  die('query error');
            
        //        }
$sql="CREATE PROCEDURE ex(IN str TEXT) BEGIN SET @qry=str; PREPARE state FROM @qry; EXECUTE state; DEALLOCATE PREPARE state; END;";


$sql4="CREATE TABLE user_message (sender_id INT,group_id INT NULL,message TEXT,".
                            "time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,status INT(3))";
                                        
                                        
        $res2=mysqli_query($link, $sql4);
                
                                        if(!$res2){echo 'FFF'.mysqli_error($link); }
                    


mysqli_close($link);