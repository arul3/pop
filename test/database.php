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


$sql4="CREATE TRIGGER update_to_incoming
        AFTER INSERT ON 1_101 FOR EACH ROW BEGIN
        IF NEW.receiver_id=1 THEN
        INSERT INTO 1_incoming_message (sender_id,message,time) VALUES
        (NEW.sender_id,NEW.message,NEW.time,'101'); END IF;END;";
         
                                        
                                        
        $res2=mysqli_query($link, $sql4);
                
                                        if(!$res2){echo 'FFF'.mysqli_error($link); }
                    


mysqli_close($link);