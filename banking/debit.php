<?php

/* 
 *  This is created by ARULKUMR S, THE AUTHOR

 */
if(filter_var($_GET['amount'], FILTER_VALIDATE_INT))
{

$amount=$_GET['amount'];

}else
    {
        die("ERROR_VALUES");
        
    }
    
    
 if(filter_var($_GET['u'], FILTER_VALIDATE_INT))
 {
    $user_id =$_GET['u'];
 }
 else{     die("ERROR _ VALUES");   }
 
 
 $link = mysqli_connect("sql103.epizy.com", "epiz_20549538", "jlLYrM4R", "epiz_20549538_bank");
 if (!$link) {
    echo "Error: Unable to connect to MySQL.";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}

$table = $_GET['type'];

$SQL ="INSERT INTO $table (id,value) VALUES ('$user_id','$amount')";

        $result = mysqli_query($link, $SQL);
                        if(!$result) die("query error".mysqli_error($link));
                            
                            
                            
     $sql2="SELECT * FROM accounts WHERE id=$user_id";
     
             $result2 = mysqli_query($link, $sql2);
             
                         if (!$result2) { die(" query error".mysqli_error($link));}
                        
                          $row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                          if($table == "credit")
                          $new_balance = $row['balance']+$amount;
                          
                         if($table == "debit")
                          $new_balance = $row['balance']-$amount;
                         
                         
        $sql3 = " UPDATE accounts SET `balance`='$new_balance' WHERE id=$user_id";
        $result3 = mysqli_query($link, $sql3);
             
                         if (!$result3) { die(" query error".mysqli_error($link));  }
                         
                         
                         if($result && $result2 && $result3) 
                             echo 'successfully '.$table."ed";