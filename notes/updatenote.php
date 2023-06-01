<?php


include "../connect.php";

$noteId=filterRequest("noteId");
$noteTitle=filterRequest("noteTitle");
$noteContent=filterRequest("noteContent");
$imageName=filterRequest("noteImage");
 
if(isset($_FILES['file'])){
    deleteFile("../upload",$imageName);
    $imageName=uploadImage("file");
    
}

$stmt=$con->prepare("UPDATE `usernote` SET `noteTitle`=?,`noteContent`=? ,`noteImage`=? WHERE noteId=?");

$stmt->execute(array($noteTitle,$noteContent,$imageName,$noteId));

$cout=$stmt->rowCount();

if($cout>0){

    echo  json_encode(array("status"=>"success"));
}else{

    echo  json_encode(array("status"=>"failed"));
}