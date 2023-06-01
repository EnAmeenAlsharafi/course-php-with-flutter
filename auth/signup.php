<?php


include "../connect.php";

$name=filterRequest("name");
$email=filterRequest("email");
$password=filterRequest("password");


$stmt=$con->prepare("INSERT INTO `users`( `name`, `email`, `password`) VALUES (?,?,?)");

$stmt->execute(array($name,$email,$password));

$cout=$stmt->rowCount();

if($cout>0){

    echo  json_encode(array("status"=>"success"));
}else{

    echo  json_encode(array("status"=>"failed"));
}