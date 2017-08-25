<!DOCTYPE html>
<html>
    <head>
        <title>BANK USER</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bank.css">
         <script src="../js/jquery-3.2.1.min.js"></script>
        
    </head>
    <body>
        <div class="login">





<?php

/* 
 *  This is created by ARULKUMR S, THE AUTHOR

 */



 if (1) {
            
            
           // $x = $_POST['pass'];
           // if($x =="5573")
                fun();
    
}
function fun() {
$link = mysqli_connect("127.0.0.1", "root", "", "fb2");

$sql="SELECT * FROM accounts";

$res = mysqli_query($link, $sql);

        $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
    
        while($row)
        {
?>
            
            <div class="element" data-id="<?php echo $row['id']?>">
                <div style="display: inline;">
                    <div class="name_title">
                    <?php echo $row['name']?>
                     </div>
                </div>
                
                <div style="display: inline;">
                    <div class="balance_name">
                        Rs
                     </div>
                </div>
                <div class="bal"><?php echo $row['balance']?></div>
                
                
                
            </div>
            
            
            
            
            
            
            
            

 <?php        
            $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
        }



    
}
?>


        </div>
        <script>
            
            $('.element').click(function(){
               
            var user = $(this).attr('data-id');
            var url="service.php?x="+user;
            window.location.assign(url);
            });
        
        </script>
    </body>
</html>
