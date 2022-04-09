<?php
require_once('../mySql_general/function_helper.php');
$fullname = $age = $address ='';
if(!empty($_POST)){
  if(isset($_POST['btn']))
  {
     if(isset($_POST['fullname']))
     {
       $fullname=$_POST['fullname'];
     }
     if(isset($_POST['age']))
     {
       $age=$_POST['age'];
     }
     if(isset($_POST['address']))
     {
       $address=$_POST['address'];
     }

     $sql="insert into khachhang(fullname,age,address) value('$fullname','$age','$address')";
         execute($sql);
         header("location: trangchuAdmin.php");
    }
}

$id='';
if(isset($_GET['id'])){
      $id=$_GET['id'];
      echo $id;
    /*   $sql='select * from sanpham where id='.$id;
     $result= executeResult($sql);
     if($result!=null && count($result)>0){
       $std=$result[0];
       $fullname=$std['fullname'];
       $age=$std['age'];
       $address=$std['address'];
     }
     else
     $id=''; */
}
else
echo "Web Bán Đồ Gia Dụng";
?>