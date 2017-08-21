<?php



$link = mysqli_connect("127.0.0.1", "root", "", "fb2");
session_start();

 if (isset($_POST)) 
{
            $userid=$_SESSION['id'];
            $add_user=$_POST['add_user'];
 
             $sql1="SELECT no FROM $userid"."_chatlist WHERE user_id=$add_user";                          
                            
                                        
                                        
            $res1 = mysqli_query($link, $sql1);
            
            if(!$res1) die("error".mysqli_error ($link));
                    
                               $row= mysqli_fetch_array($res1,MYSQLI_ASSOC);
                               if(!$row) {                     
                                             addChatlist();
                                             mysqli_free_result($res1);
                                           }      
                                   if($row) {   die("operation error"); }
$sql3 = "CREATE TABLE $userid".
        "_$add_user (no INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, sender_id VARCHAR(10),receiver_id".
                    " VARCHAR(10),message TEXT,time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,".
                    "status INT(3))";
            
                            $res3=mysqli_query($link, $sql3);
                            
                            if (!$res3)    die("FFF".mysqli_error($link));

                            
$sql4 = "CREATE TRIGGER update_to_$userid"."_$add_user
        AFTER INSERT ON $userid"."_$add_user FOR EACH ROW BEGIN
        IF NEW.receiver_id=$userid THEN
        INSERT INTO $userid"."_incoming_message (sender_id,message,time) VALUES
        (NEW.sender_id,NEW.message,NEW.time,'101');
        ELSEIF NEW.receiver_id=$add_user THEN
        INSERT INTO $add_user"."_incoming_message (sender_id,message,time) VALUES
            (NEW.sender_id,NEW.message,NEW.time,'101');
 END IF;END;";    
        
            $res4=mysqli_query($link, $sql4);
                            
                            if (!$res4)   die("create trigger".mysqli_error($link));

mysqli_close($link);                         
            
}

function addChatlist()
{
    global $link,$userid,$add_user;
    
   $sql1 = "SELECT * FROM users WHERE ID=$add_user";
    $res1 = mysqli_query($link, $sql1);
            
    if(!$res1) die("error".mysqli_error ($link));
    $row = mysqli_fetch_array($res1);
    if(!$row) die ("invalid operation");
    if($row) { $ID = $row['ID']; $name = $row['name']; 
    
    
    $sql="INSERT INTO $userid"."_chatlist (user_id,name) VALUES ('$ID','$name')";
    $res = mysqli_query($link, $sql);
            
    if(!$res) die("error".mysqli_error ($link));
mysqli_free_result($res1);
    
    }

            
  
}
?>

<form name="add user to chat list" action="add_user.php" method="POST">
    
    <input type="text" name="add_user">
    <input type="submit" value="click to chat">
    
    
    
</form>
