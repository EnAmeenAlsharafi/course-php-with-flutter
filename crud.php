<?php


include "connect.php";

//stmt is short for statement 
//insert into database
// $stmt=$con->prepare("INSERT INTO `user`(`id`, `email`, `password`) VALUES ('','nwaf@gmail.com','1234')");

// $stmt->execute();

// $cout=$stmt->rowCount();

// if($cout>0){

//     echo "success";
// }else{

//     echo "failed";
// }



//update into database
$stmt=$con->prepare("UPDATE `user` SET`email`='salem@gmail.com',`password`='5555' WHERE id=2");

$stmt->execute();

$cout=$stmt->rowCount();

if($cout>0){

    echo "success";
}else{

    echo "failed";
}