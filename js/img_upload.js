//variables
var ix=0;
var iy=0;
var X;
var Y;

var inter;
var pos;
//uploading details 
var imgObject;



$('#attach').click(function(){
                
            $('#postphoto').click();
        
            });
            $('#upload-photo').click(function(){
               
                imgObject=new image1();
                
                var formdata = new FormData();
                var file=document.getElementById('postphoto').files[0];
                formdata.append("photo",file);
                formdata.append("x",imgObject.x);
                formdata.append("y",imgObject.y);
                formdata.append("w",imgObject.w);
                formdata.append("h",imgObject.h);
                
                var req=new XMLHttpRequest();
                req.onreadystatechange=function()
                {
                    if (this.readyState == 4 && this.status == 200)
                    {
                      $('#ttr').append(this.responseText);
                    }
                };
                req.open("POST","upload_image.php",true);
                req.send(formdata);

              
                
                                                    
        var newnode = document.createElement("div");  //adding element to message body
        var div=document.createElement("div");
        var newnode2=document.createElement("div");
        var newnode3=document.createElement('div');
        var oldnode= document.getElementById("msgbody");
        oldnode.appendChild(div);    
        div.appendChild(newnode);  //adding Element to message body
        div.id="apple";                          
        newnode.setAttribute('class','receive2');
        newnode.appendChild(newnode2);
        newnode2.setAttribute('class','postphoto2');
        newnode2.appendChild(newnode3);
        newnode3.setAttribute('class','loader');
        
        var image=document.createElement('IMG');
        newnode2.appendChild(image);
        image.src="";

        req.upload.addEventListener("progress",function(ev){ updateProgress(ev,newnode3,image,file)});
        document.getElementById('p-upload').style.display="none";
        
        
            });
       
function updateProgress(ev,newnode3,image,file)
{
    if(ev.lengthComputable)
    {
        var percentage=ev.loaded/ev.total; //while uploading
        percentage=percentage*100;
        var p=percentage.toFixed(0); //uploading percentage via XMLrequest
        if(p>75)
        {
            newnode3.style.borderColor="#3498db  #3498db transparent transparent ";
        }
        if(p==100)
        {
            newnode3.style.borderColor="#3498db  #3498db #3498db #3498db ";
            
               var appa=newnode3.parentElement;
               appa.removeChild(newnode3);
               var url=URL.createObjectURL(file);
               image.src=url;
               image.setAttribute('class','postphoto2');
            
        }
                 
        
    }
}
       
       
      
  var pp =function(event)
  {
      var input=event.target;
      file=input.files[0];
      
      var read=new FileReader();
      read.onload=function(){
          
          var dataURL=read.result;
          document.getElementById('preview').src=dataURL;
   



        };
      read.readAsDataURL(file);
  
        document.getElementById('p-upload').style.display="block";
  };
  
  window.onclick=function(ev)
  {
      
      var modal=document.getElementById('p-upload');
      if(ev.target==modal)
      document.getElementById('p-upload').style.display="none";
  }



document.getElementById('preview').onload=function(){
            
           X=document.getElementById('preview').naturalWidth;
           Y=document.getElementById('preview').naturalHeight;
          $('.modal-content').width(750);
          $('.modal-content').height(550);
          
          
            ix=X;
            iy=Y;
          
              ix= (300/iy)*ix; iy=300; 
          $('.preview').width(ix);
          $('.preview').height(iy);
            
          
             inter=setInterval(pos,20);

                                                     };



// image object constructor fn
function image1()
{  
   
   clear();
  
    this.x=(225-oX)*(X/ix);
    this.y=(100-oY)*(Y/iy);
    
    this.w=300*(Y/iy);
    this.h=300*(Y/iy);


}

          