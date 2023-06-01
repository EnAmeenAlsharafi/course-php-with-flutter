<?php


include "../connect.php";


$userId=filterRequest("id");



$stmt=$con->prepare("SELECT  * FROM `usernote` WHERE  `noteUser`=?");

$stmt->execute(array($userId));

$cout=$stmt->rowCount();
//if I want to get the data of the user 
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);

if($cout>0){

    echo  json_encode(array("status"=>"success","data"=>$data));
}else{

    echo  json_encode(array("status"=>"failed"));
}