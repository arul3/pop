<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */function return_resource($src)
   {
        $info=getimagesize($src);
       if($info['mime']=="image/jpeg")    
                    $resource=imagecreatefromjpeg($src);
                    elseif ($info['mime']=="image/png")
                            $resource=imagecreatefrompng($src);
                        return $resource;
   }


function editing($src,$name)
{ 
    $dir="uploads/edit/";
    $dest=$dir.$name;
    if(!file_exists($dir))
        mkdir($dir,0777);
    $image=  return_resource($src);
    
    $greeny=imagecolorallocate($image, 100, 200, 100);
    
    if(imagestring($image, 5, 20, 40, 'ARULKUMAR ', $greeny))
            
    imagejpeg($image,$dest);
        echo 'edited-success';
   }

        if (isset($_FILES['photo']['name'])) {
            
    
            $name=$_FILES['photo']['name'];
            $destination="uploads/".$name;
                    if(file_exists($destination))
                    {
                        echo 'file exist';
            
                    }
                    else
                    
                     if(move_uploaded_file($_FILES['photo']['tmp_name'], $destination))
                    {
                        echo 'file is uploaded';
                        
                        $uploading_info=  getimagesize($destination);
                        echo '<br>width:'.$uploading_info['0']."<br>height:".$uploading_info['1'];
                    }
                    
                    
                    $dest="uploads/compress/".$name;
                    $src=$destination;
     function compress($src,$dest,$quality)
     {
                        $info=getimagesize($src);
                        
                    if($info['mime']=="image/jpeg")    
                    $resource=imagecreatefromjpeg($src);
                    elseif ($info['mime']=="image/png")
                            $resource=imagecreatefrompng($src);
                    
                    if(imagejpeg($resource,$dest,$quality))
                            echo 'compressed<br>';
                    echo "width:". $info['0']."<br>height:".$info['1'];
                    
                    
                    return $dest;
                    
     }       
     $d=compress($src,$dest,50);
     editing($src, $name);
     
     
     
     
}



  
   