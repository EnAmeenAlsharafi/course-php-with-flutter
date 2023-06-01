<?php 
  

  //request using Get and Post  
  // Get use for read the data  and also can be used to insert and update the data  but it's not secure like post 
  //post used to insert delete and update the data  because it's more secure 

  //to accuse the get in the prowser  use ? after the php page  and use the get like this   name=ameen
  //to request more then one  use & between them   like name=ali &age=30

//   $name= $_GET['name'];
//   $age =$_GET['age'];
//   echo $age;

//   echo $name;

  
  //post   


  $ameen=$_POST['ameen'];

  echo $ameen;



?>