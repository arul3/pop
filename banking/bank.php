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



  
          
                fun();
    

function fun() {

    $link = mysqli_connect("sql103.epizy.com", "epiz_20549538", "jlLYrM4R");

$sql="SELECT *,TIMESTAMPDIFF(HOUR,time,NOW()) AS hours FROM accounts";

$res = mysqli_query($link, $sql);

        $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
    
        while($row)
        {
?>
            
            <div class="element" data-id="<?php echo $row['id']?>" data-name="<?php echo $row['name']?>">
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
                <div class="bal"><?php echo $row['balance'] ?></div>
                
                <div class="time_ago" ><?php echo $row['hours']."  hours  ago";?></div>
                
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
            var name =$(this).attr('data-name');
            var url="service.php?x="+user+"&name="+name;
            window.location.assign(url);
            });
        
        </script>
    </body>
</html>
