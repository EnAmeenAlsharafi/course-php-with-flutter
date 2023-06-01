<?php


include "../connect.php";


$noteId=filterRequest("noteId");
$imageName=filterRequest("imageName");



$stmt=$con->prepare("DELETE FROM `usernote` WHERE `noteId`=?");

$stmt->execute(array($noteId));

$cout=$stmt->rowCount();
//if I want to get the data of the user 


if($cout>0){
    deleteFile("../upload",$imageName);

    echo  json_encode(array("status"=>"success"));
}else{

    echo  json_encode(array("status"=>"failed"));
}