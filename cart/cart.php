<?php
session_start();
// require_once('../mySql_general/function_helper.php');
require_once('../mySql_general/config_DB.php');
if(!empty($_POST)){
    if(isset($_POST)){
        $id=$_POST['id'];
    }
}
$action=(isset($_POST['action']))? $_POST['action']:'add';
$quantity=(isset($_POST['quantity']))?$_POST['quantity']:1;
// $kq=get_memberProduct($id);
$query= mysqli_query($conn, "SELECT * FROM sanpham where id=$id");
if($query){
    $kq=mysqli_fetch_assoc($query);
}
        $item=[
            'id'=> $kq['id'],
            'hinhAnh'=> $kq['hinhAnh'],
            'tenHang'=>$kq['tenHang'],
            'gia'=> $kq['giaKhuyenMai'],
            'sltk'=>$kq['soLuong'],
            'num'=> 1,
        ];
        if($action=='add'){
            if(isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]['num']++;
                header( "refresh:0.1;url=../detail_product/detailProduct.php?id=$id"); 
            }
            else
                {
                    $_SESSION['cart'][$id]=$item;
                    header("location: ../detail_product/detailProduct.php?id=$id");
                }
        }
        if($action == 'update'){
            $_SESSION['cart'][$id]['num']=$quantity;
            header("location: viewCart.php");
          }
          if($action=='delete'){
            unset($_SESSION['cart'][$id]);
          }
    ?>