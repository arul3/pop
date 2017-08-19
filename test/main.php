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
        <style>
            .user_element
            {
                display: inline-block;
                white-space: pre;
            }
            .chat_box
            {
                width: 400px;
                height: 500px;
                position: absolute;
                right: 0px;
                top: 20px;
                background-color: lavender;
            }
        </style>
    </head>
    <body >
        
        <input type="button" value="load chat list"  id="bton"/>
    
<div id="chat_list">
<div>
    <h4>chat_list</h4>
</div>
    <div>   </div>    
</div>
      
        <div class="chat_box">
            
        </div>    
        
        
        <script>
            
            
    $('#bton').click(function(){
        chat_list();
    });         
            function chat_list()
            {
                    var y="";
                    var htp = new XMLHttpRequest;
                    htp.onreadystatechange = function()
                    {
                        if(this.status = 200 && this.readyState == 4)
                        {
                            var myObj = JSON.parse(this.responseText);
                            
                            load_chat(myObj);
                            
                           
                        }
                    }
                    var r=Math.random(); r=r.toFixed(2);
                    htp.open('POST',"chat_list.php",true);
                    htp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    var q="r"+r;
                    htp.send(q);
                    
            } 
function    load_chat(myObj)
            {
                var y="";
                for(x in myObj)
                            {
                             var response = "<div><div class='user_element' data-id=' "+myObj[x].user_id +" '>"+myObj[x].name+"</div></div>";
                             y+=response;
                            }
                            $('#chat_list').append(y);
                            onload();
            }
            function onload()
            {
            $('.user_element').click(function(){
               var id = $(this).attr("data-id");
               msgload(id);
            });
            
    
            }
            function msgload(id)
            {
                   
                    var htp = new XMLHttpRequest;
                    htp.onreadystatechange = function()
                    {
                        if(this.status = 200 && this.readyState == 4)
                        {
                                    // var myObj = JSON.parse(this.responseText);
                            
                           // load_chat(myObj);
                          $('.chat_box').append(this.responseText);
                            
                           
                        }
                    }
                    
                    htp.open('GET',"msgload.php?x="+id,true);
                    
                    htp.send();
                    
            }
        </script>
</body>
</html>
