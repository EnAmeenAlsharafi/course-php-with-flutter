<?php

//include like import in dart 
include "connect.php";

//stmt is short for statement 
//the prerare method we write تعليمة  sql   
$stmt=$con->prepare("SELECT * FROM USER ");

$stmt->execute();
//here to get the information for the database and we have there type of function to get the data 
//fetchAll to get all the data 
//fetch to get one use or single data
//fetchColumn to get one column 

//$users=   $stmt->fetchAll(PDO::FETCH_ASSOC);
  
$user=$stmt->fetchAll();
//this function has to values 0 nad 1. 0 if there is no data in the database to the data you want is not exit 
// 1 if there is data 
$count=$stmt->rowCount();

echo $count;

// print_r($users);

//to convert the user data to json in order to use it with dart 
 $userMap= json_encode($user);
echo $userMap;

echo json_encode(array("name"=>"ameen"));