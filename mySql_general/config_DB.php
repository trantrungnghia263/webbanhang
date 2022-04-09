<?php
const host="localhost";
const username="root";
const password="";
const database="dogiadung";

$conn=  new mysqli(host, username, password, database);
mysqli_set_charset($conn,'utf8');
if ($conn->connect_error) {
   var_dump($conn->$connect_error);
   die();
  }
 

?>