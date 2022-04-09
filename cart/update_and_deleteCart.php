<?php
session_start();
require_once('../mySql_general/function_helper.php');
  $cart=(isset($_SESSION['cart']))?$_SESSION['cart']:$cart=[];

     if(!empty($_POST)){
         $id=$_POST['id'];
         $action=$_POST['action'];
        $quantity=$_POST['quantity'];
     }
    if($action =='delete'){
      unset($_SESSION['cart'][$id]);
      
    }
    ?>