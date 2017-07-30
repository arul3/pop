<?php

require_once 'function.php';



    
    $id=$_GET['q'];
    
    $q="INSERT INTO `flist` (id) VALUES ('$id')";
    
    $result=$con->query($q);
    if($result)
    {
        echo 'Added successfully';
    }
            
    
    
    
    $con->close();

    ?>
    
    
    
  
    
    



