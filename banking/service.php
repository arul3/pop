<!DOCTYPE html>
<html>
    <head>
        <title>SERVICES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bank.css">
         <script src="../js/jquery-3.2.1.min.js"></script>
        
    </head>
    <body>
        <div class="login">
            
            <div class="debit">
                <input type="text" class="" pattern="[9-0]" maxlength="4">
                <button type="button" class="" id="debit"><b>DEBIT</b></button>
                
            </div>
            <div class="credit">
                <input type="text"  pattern="[9-0]" maxlength="4">
                <button type="button"><b> CREDIT</b></button>
            </div>
        </div>
        <div class="pop-box">
            <div class="box-element">
                <div class="box-header">
                
            </div>
                
            </div>
            
        </div>
        <script>
            $('#debit').click(function(){
                $(".pop-box").css("display","block");
               
            });
        </script>
    </body>
</html>


