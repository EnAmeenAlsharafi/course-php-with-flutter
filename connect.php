<?php
$dns="mysql:host=localhost;dbname=noteapp";
$user="root";
$pass="";

//include  the function filterRequest

include "functions.php";
//to support Arabic language use this 

$option=array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"); //for arabic
try{

$con=new PDO($dns,$user,$pass,$option);
//to get different exception 
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
// in dart we use . to access the property of variable  Ex: e.toString()  but here we use  ->

echo $e->getMessage();

}