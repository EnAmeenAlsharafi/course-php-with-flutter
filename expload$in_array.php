<?php 
//example the iamge  name
$finleName="Image.png";
//convert the string to array   فصل عناصر المصفوفه عند وجود نقطه
$toArray=explode(".",$finleName);

//the method end() return the last element in the array
$ext=end($toArray);

$allowExt=array("jpg","png","gif");
if(in_array($ext,$allowExt)){

    echo "Yes";
}else{
    echo "no";
}