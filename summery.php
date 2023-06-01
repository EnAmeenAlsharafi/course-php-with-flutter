<?php
// echo "Hello Ameen";
// echo "hhhhhhh";
// $name='ameen';

// echo $name;

// if($name=='ameen'){
//      echo "Hi "  ;
// }else{
//     echo "no";
// }
 $i=0;
while ($i<5) {
    echo $i;
    $i++;
}

for($b=0;$b<6;$b++){
  echo  $b.'<br/>';
}

function printhi(){

    echo "Hi ameen ";
}
printhi();

function salam ($name){
    echo "<br/>Don't worry .'<br/>'";
}

salam('Ameen');


// parameters in php  cant be access in function not like dart  so in order to access them you 
//you have to add Global before the name 

// $name='Ameen';

// function  name (){
//      global $name;
//      echo $name;
// }

// name();


//array in php  threre is two type of array indexed array and association  array 

//indexed array  

$name=array('name','age'); //like list in dart 

echo $name[0];
echo "<br/>";


//association   array like map in flutter 

$info=array("name"=>"ameen","age"=>20);

echo$info['name'];


//to get the key and value of array  use foreach in array 


foreach($info as $key=>$value){

    echo "the Key".$key."<br/>";
    echo "the value".$value."<br/>";
    
}

 //make loop for indexed array 
for($i=0; $i<count($name);$i++){

    echo "<br/>";
    echo $name[$i];
}

print_r($name); //print_r to print the whole array 


 