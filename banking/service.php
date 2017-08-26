<!DOCTYPE html>
<html>
    <head>
        <title>SERVICES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bank.css">
         <script src="../js/jquery-3.2.1.min.js"></script>
         <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        
    </head>
    <body>
        <div class="login">
            
            <div class="debit">
                <input type="text" class="" pattern="[0-9]" maxlength="4" id="debit_input">
                <button type="button" class="" id="debit"><b>DEBIT</b></button>
                
            </div>
            <div class="credit">
                <input type="text"  pattern="[9-0]" maxlength="4" id="credit_input" >
                <button type="button" id="credit"><b> CREDIT</b></button>
            </div>
        </div>
        <div class="pop-box">
            <div class="box-element">
                <div class="box-header">
                    <div class="box-name"><?php echo $_GET['name'];?></div>
                </div>
                <div class="box-content">
                    <div class="content"></div>
                </div>
                <button class="confirm" type="button" id="confirm">CONFIRM</button>
                <button type="button" class="cancel" id="cancel">CANCEL</button>
                <button type="button" class="ok" id="ok" >OK</button>
                
            </div>
            
        </div>
        <script>
            var amount;
            var type;
            $('#debit').click(function(){
                $(".pop-box").css("display","block");
                 amount = $('#debit_input').val();
                  
                $('.content').text(amount);
                type = "debit";
               
            });
            
            $('#credit').click(function(){
                $(".pop-box").css("display","block");
                 amount = $('#credit_input').val();
                  
                $('.content').text(amount);
                type = "credit";
               
            });
            $('#cancel').click(function(){
                $('.pop-box').css("display","none");
               
            });
            $('#confirm').click(function(){
                var htp = new XMLHttpRequest;
                
        htp.onreadystatechange = function()
        {
            if(this.readyState == 4)
                updating(this);
        };
        var url="debit.php?u="+<?php echo $_GET['x']?>+"&amount="+amount+"&type="+type;
                
        htp.open("GET",url,true);
        htp.send();
            
            });
            
$('#ok').click(function(){
    
    $('#ok').css("display","none");
       
        $('.pop-box').css("display","none");
        $('#confirm').css("display","block");
        $('#cancel').css("display","block");
        $('.box-content').html("<div class='content'><div>");
        $('#debit_input').val('0');
        window.location.assign('bank.php');
       
});
            
            
            
    function updating(ob)
    {
        $('.content').css("display","none");
        $('#confirm').css("display","none");
        $('#cancel').css("display","none");
        $('#ok').css("display","block");
        $('.box-content').text(ob.responseText);
        
        
    }
        </script>
    </body>
</html>


