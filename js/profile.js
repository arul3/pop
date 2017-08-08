/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.*/ 

       $(document).ready(function(){

          $('.avatar').click(function(){
             $("#page_body").animate({  left:'0px'  },"slow");
             $("#profile_img").animate({ width: '150px' ,height: '150px' },"slow");
             $("#text_contant").animate({  left:'2px',top:'61.5%'  },200);
             $("#text_contant").animate({  left:'0px',top:'63%'  },600);
             $("#foot_bar_tit").animate({  padding:'15px 0px 15px 4%'  },400);
             $("#foot_bar_tit").animate({  padding:'15px 0px 15px 6%'  },600);
             $("#foot_bar_tit").animate({  padding:'15px 0px 15px 5%'  },400);
             $("#user_name").hide();
             $("#user_name").show(600);
             $("#mobile_number").hide();
             $("#mobile_number").show(600);
          });

          $("#arrow").click(function(){
             $("#page_body").animate({  left:'-440px'  },"slow");
             $("#profile_img").animate({ width: '0px' ,height: '0px' },"slow");
          });

          $("#pen_link").click(function(){
             $("#pen_box").animate({  width: 'toggle'  },300);
             $("#y_name").toggle();
             $("#pen_link_2").toggle();
             //$("#pen_link").css(  	'background-image', 'url(im3.png)'  );
          });

       	     $( "#profile_img").click( function(event) {
       	     	$("#profile_img_list").css(  	'visibility', 'visible'  );
             var div = $("#profile_img_list");
               div.css( {

                    position:"absolute", 
                    top:event.pageY - 130, 
                    left: event.pageX});

  			  
    
});

       	      $('#profile_img').on('mouseout', function() {
   // var height = $('div#b1').css('height');
             $('#profile_img_list').hide();
         });

       	      $('#profile_img').on('mouseover', function() {
       	      	$('#profile_img_list').show();
       	      	$("#profile_img_list").css(  	'visibility', 'hidden'  );
         });

              $('#profile_img_list').on('mouseover', function() {
                $('#profile_img_list').show();
                $("#profile_img_list").css(   'visibility', 'visible'  );
                $("#profile_img").css(   'opacity', '0.7'  );

                $('#profile_img_hover').show();
                $("#profile_img_hover").css(   'visibility', 'visible'  );
         });

              $('#profile_img_list').on('mouseout', function() {
                $('#profile_img_list').hide();
                $('#profile_img_hover').hide();
                $("#profile_img").css(   'opacity', '01'  );
         });

              $('#profile_img').on('mouseover', function() {
                $('#profile_img_hover').show();
                $("#profile_img_hover").css(   'visibility', 'visible'  );
                $("#profile_img").css(   'opacity', '0.7'  );
         });

              $('#profile_img').on('mouseout', function() {
                $('#profile_img_hover').hide();
                $("#profile_img").css(   'opacity', '01'  );
         });
             
       	 });

