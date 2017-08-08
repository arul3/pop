element=document.getElementById('preview');
	var fixedX;
	var fixedY;
	var variableX;
	var variableY;


	

	var oX=225; element.style.left=225+"px";
	var oY=100; element.style.top=100+"px";
	

	
	var x=0;
	var y=0;
	
		


function pos()

{      
   
    
	var j=225-(ix-300);

	var k=100;
		
	if ((oX+x)<225 )   element.style.left=oX+x+"px"; 
						

									
    								
    								
    if ((oY+y)<100)     element.style.top =oY+y+"px";



    				

    	if ((oX+x)>=225)    element.style.left="225"+"px"; 


    	if ((oY+y)>=100)     element.style.top ="100"+"px";  



    	if ((oX+x)<j )   element.style.left=j+"px";   


    	if((oY+y)<k)     element.style.top=k+"px";  

    				

}


document.addEventListener("dragstart",function(ev){

fixedX=ev.screenX;
fixedY=ev.screenY;




var img = new Image(); 
 img.src = 'img.png'; 
 ev.dataTransfer.setDragImage(img, -1300, -1300);



});

document.addEventListener("drag",function (ev) {


 	variableX=ev.screenX;
 	variableY=ev.screenY;

	 x=variableX-fixedX;
	 y=variableY-fixedY;
	
	
});

document.addEventListener("dragend", function(ev){

  var   x1=ev.screenX-fixedX; 
  var    y2=ev.screenY-fixedY;
      oX +=(x1-6);
      oY +=(y2+7);
      if (oX>225) {oX=225;}
      if (oY>100) {oY=100;}
      x=0;
      y=0;
       
      
});

function clear()
{


clearInterval(inter);

}


