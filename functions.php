<?php
//build in function to convert to MB
define('MB',1048576);

//I use this function to ensure  my data is secure
function filterRequest($requestName){


    return  htmlspecialchars(strip_tags($_POST[$requestName]));
}

Function uploadImage($imageRequest){
 //array of image error 
    global $imageErro;
//add random  number for the image name 
$imageName=rand(1000,10000). $_FILES[$imageRequest]['name'];
$imageTemp=$_FILES[$imageRequest]['tmp_name'];
$imageSize=$_FILES[$imageRequest]['size'];
//types of image that can be upload  we can add files like pdf,text ....ect
$allowExt=array("jpg","png","gif","jpeg");
//convert the allowExt    to array  
$strToArray=explode(".",$imageName);
//end function to get the last element in tha array
$ext=end($strToArray);
//convert it to lower letters
$ext=strtolower($ext);
if(!empty($imageName)&&!in_array($ext,$allowExt)){

    $imageErro[]="Ext";
}if($imageSize >10 * MB){
   $imageErro[]="size" ;
}if(empty($imageErro)){
    //تاخذ المسار المؤقت وتحفظ الملف في المسار المحدد
    //يتغير المسار بحسب موقع الملف عند استخدام الداله
    move_uploaded_file($imageTemp,"../upload/".$imageName);
    return $imageName;
}else{
    return "failed";
    
}
}

Function deleteFile($dir,$fileName){
    if(file_exists($dir."/".$fileName)){
        unlink($dir."/".$fileName);
    }
}