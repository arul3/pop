<?php

/* 
 *  This is created by ARULKUMR S, THE AUTHOR

 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>main test</title>
        <script src="../js/jquery-3.2.1.min.js"></script>
  
    </head>
    <body>
        
        <input type="button" value="load chat list"  id="bton"/>
    
<div id="chat_list">
<div>
    <h4>chat_list</h4>
</div>
    <div>   </div>    
</div>
        <script>
            
            
    $('#bton').click(function(){
        chat_list();
    });         
            function chat_list()
            {
                    var htp = new XMLHttpRequest;
                    htp.onreadystatechange = function()
                    {
                        if(this.status = 200 && this.readyState == 4)
                        {
                            var resp=this.responseText;
                            
                            $('#chat_list').append(resp);
                        }
                    }
                    var r=Math.random(); r=r.toFixed(2);
                    htp.open('POST',"chat_list.php",true);
                    htp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    var q="r"+r;
                    htp.send(q);
                    
            }   
        </script>
</body>
</html>
