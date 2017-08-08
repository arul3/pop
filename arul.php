<!DOCTYPE html>
<html>
<head>
	<title>hi</title>
	<link rel="stylesheet" type="text/css" href="arul.css">

	<script src="js/jquery-3.2.1.min.js"></script>
	<script> 

       $(document).ready(function(){

          $("button").click(function(){
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
             $("#page_body").animate({  left:'-400px'  },"slow");
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

    </script> 
</head>
<body>

 

<div id="outer">
	
<div id="inner">
	
<div id="page_body">
	
<div id="pg_title_bar">
	
    <div id="arrow"></div>
    <div id="profile_tit">Profile</div>

</div>

<div id="pg_detils">

	<div id="profile_img">
   
  <div id="profile_img_hover"></div>


	
		<div id="profile_img_list">
    
    <div id="some_thing_1">Yoga</div>
    <div id="some_thing_2">Arul</div>
    <div id="some_thing_3">Sakthi</div>
    <div id="some_thing_4">Vijay</div>

    </div>
	</div>

	<div id="your_name">
		
	<div id="input_div">
	<input type="text" name="name" placeholder="Your name">
	<div id="y_name">Your name</div>
	</div>
	<div id="pen_box">
		
	<div id="smile"></div>

	</div>
	<div id="pen_link">
		<div id="pen_link_2"></div>
	</div>

	</div>


  <div id="text_contant">
    
  <p> This is not your username or pin. This name will be visible to your WhatsAapp contacts.</p>

	
</div>

<div id="foot_bar">
  
<div id="foot_bar_tit">About and phone number</div>
<div id="user_name">yoga</div>
<div id="mobile_number">9087784093</div>

</div>





</div>


</div>

</div>

</div>
<button>yoga</button>
</body>
</html>