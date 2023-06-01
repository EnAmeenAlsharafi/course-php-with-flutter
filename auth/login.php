<?php


include "../connect.php";


$email=filterRequest("email");
$password=filterRequest("password");


$stmt=$con->prepare("SELECT  * FROM `users` WHERE  `email`=? AND  `password`=? ");

$stmt->execute(array($email,$password));

$cout=$stmt->rowCount();
//if I want to get the data of the user 
$data=$stmt->fetch(PDO::FETCH_ASSOC);

if($cout>0){

    echo  json_encode(array("status"=>"success Login","data"=>$data));
}else{

    echo  json_encode(array("status"=>"failed"));
}