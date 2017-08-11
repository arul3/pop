<?php
$link = mysqli_connect("127.0.0.1", "root", "", "fb2");

if (!$link) {
    echo "Error: Unable to connect to MySQL.";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}

$sql="INSERT INTO usermsg (sender,msg) VALUES ('234','hi hello viking')";

        $res=mysqli_query($link, $sql);
            if (!$res)
                
                { 
                die('query error');
            
                }


mysqli_close($link);