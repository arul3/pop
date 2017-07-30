/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var modal=document.getElementById('modal');

$('.avatar_small').click(function(){
    $('.full_background').css( "display","block");
    $(this).css("position","absolute");
    $(this).css({"z-index":"2","border-radius":"0px"});
    
    $(this).animate({"width":"200px","height":"200px","top":"200px","left":"200px"},1000);
    
    
});
$('.close').click(function(){
   
        $('.avatar_small').animate({"width":"60px","height":"60px"},20);
        $('.avatar_small').animate({"border-radius":"30px"},150);
        $('.avatar_small').css("position","static");
        
        
        modal.style.display = "none";
    
});


window.onclick = function(event) {
    if (event.target == modal) 
    {
       
        $('.avatar_small').animate({"width":"60px","height":"60px"},20);
        $('.avatar_small').animate({"border-radius":"30px"},150);
         $('.avatar_small').css("position","static");
     
        
        
        modal.style.display = "none";
    }

};