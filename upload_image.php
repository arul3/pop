<?php
 

        if (isset($_FILES)) {
            
            
            
            $name=$_FILES['photo']['name'];
            $destination="uploads/".$name;
            $width=$_POST['w'];
            $height=$_POST['h'];
            $x=$_POST['x'];
            $y=$_POST['y'];
            
            
            
            
                    if(file_exists($destination))
                    {
                        echo 'file exist';
            
                    }
                    else
                    
                     if(move_uploaded_file($_FILES['photo']['tmp_name'], $destination))
                    {
                        echo 'file is uploaded';
                        
                        $tmp= imagecreatetruecolor($width, $height);
                        
                        $src= return_resource($destination);
                        imagecopyresampled($tmp, $src, 0,0, $x, $y, $width, $height, $width, $height);
                        
                        imagejpeg($tmp,$destination);
                        imagedestroy($tmp);
                        imagedestroy($src);
                    }
                       
     
     
     
}

function return_resource($src)
   {
        $info=getimagesize($src);
       if($info['mime']=="image/jpeg")    
                    $resource=imagecreatefromjpeg($src);
                    elseif ($info['mime']=="image/png")
                            $resource=imagecreatefrompng($src);
                        return $resource;
   }