<?php


include "../connect.php";

$noteUser=filterRequest("id");
$noteTitle=filterRequest("noteTitle");
$noteContent=filterRequest("noteContent");
$imageName=uploadImage("file");

if($imageName!='failed'){
    $stmt=$con->prepare("INSERT INTO `usernote`( `noteTitle`, `noteContent`, `noteUser`,`noteImage`) VALUES (?,?,?,?)");

$stmt->execute(array($noteTitle,$noteContent,$noteUser,$imageName));

$cout=$stmt->rowCount();

if($cout>0){

    echo  json_encode(array("status"=>"success"));
}else{

    echo  json_encode(array("status"=>"failed"));
}
}else{
    echo  json_encode(array("status"=>"failed"));
}