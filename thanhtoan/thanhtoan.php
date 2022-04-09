<?php
session_start();
  require_once('../mySql_general/function_helper.php');
  require_once('../mySql_general/config_DB.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
  if(!empty($_POST)){
        if(isset($_POST['quantity'])){
            $quantity=$_POST['quantity'];
        }
        if(isset($_POST['productName'])){
            $productName=$_POST['productName'];
        }
        if(isset($_POST['price'])){
            $price=$_POST['price'];
        }
        if(isset($_POST['hinhAnh'])){
            $hinhAnh=$_POST['hinhAnh'];
        }
        if(isset($_POST['id'])){
            $id=$_POST['id'];
        }
        if(isset($_POST['sltk'])){
            $sltk=$_POST['sltk'];
        }
        if(isset($_POST['id'])){
            $id=$_POST['id'];
        }
        if(isset($_POST['userName'])){
            $userName=$_POST['userName'];
        }
        if(isset($_POST['phoneNumber'])){
            $phoneNumber=$_POST['phoneNumber'];
        }
        if(isset($_POST['address'])){
            $address=$_POST['address'];
        }
        if(isset($_POST['radio'])){
            $pttt=$_POST['radio'];
        }
        $kq=get_memberProduct($id);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
   <link rel="stylesheet" href="ThanhToan1SanPham.css">
    <link rel="stylesheet" href="../pageHeader/header.css">
    <title>Trang Thanh Toán Đơn Hàng</title>
</head>
<style>
        .text a{
    text-decoration: none;
    color: #3b5998;
}
    #container{
        margin-top: 120px;
    }
    .text p#title{
    position: absolute;
    font-size: 30px;
    color: #111;
    top: -15px;
    text-shadow: 2px 2px 2px #cc0000;
    font-family: 'Open Sans', sans-serif;
    margin-left: 9px;
}
#menu_main li a:hover{
    border-bottom: 4px solid rgb(235, 77, 77);
    transition: 0.25s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    width: 30%;
    color: #CD201F;
    border-radius: 2px;
   /*  khi hover chuột vào li thì xuất hiện dấu gạch chân bên dưới thẻ li */
} 
#content #check_don_hang{
    position: absolute;
    top: 37px;
    left: 7px;
    padding: 0px ;
}
#content #check_don_hang a{
    list-style: none;
    text-decoration: none;
    color: #111;
    margin-left: 4px;
    font-size: 22px;
}
.content{
    border: 1px solid gray;
    padding: 10px;
    background-color: rgb(255, 255, 255);
   width: 400px;
   height: 65px;
   margin: 0 auto;
}
.content #size{
  position: absolute;
  top: 56px;
}
#value_size {
    position: absolute;
    top: 34px;
    left: 65px;
    font-size: 22px;
}
.content #soluong{
    position: absolute;
    top:56px;
}
#value_num{
    position: absolute;
    top: 32px;
    left: 182px;
}
#tongTien{
    position: absolute;
    top: 35px;
    left: 220px;
}
#pirce {
    position: absolute;
    right: 20px;
    top: 34px;
    font-size: 20px;
}
#dat_hang button{
    width: 225%;
    padding: 15px ;
   background-color: #28a745; 
   color: #fff;
   border: none;
   border-radius: 4px;
  font-size: 18px;
}
#dat_hang button:hover{
    background-color: #19742e;;
    cursor: pointer;
}
</style>
<body>
    <?php include '../pageHeader/header.php'?>
    <div id="container">
        <div id="title">
            <h1>THANH TOÁN ĐƠN HÀNG</h1>
        </div>
        <div id="left">
        <form action="datathanhtoanSingerProduct.php" method="POST"> 
            <h2>THÔNG TIN ĐƠN HÀNG</h2>
            <div class="form_group">
                <p>Tên người nhận</p>
                <input type="text" name="userName" id="nhap" placeholder=" Tên người nhận hàng" required>
            </div>
            <div class="form_group">
                <p> số điện thoại</p>
                <input type="text" name="phoneNumber" id="nhap" placeholder=" Số điện thoại người nhận hàng" required>
            </div>
            <div class="form_group">
                <p>Địa chỉ nhận hàng</p>
                <input type="text" name="address" id="nhap" placeholder=" VD: Thôn yên mỹ xã liên minh huyện đức thọ tỉnh hà tĩnh" required>
            </div>
            <div class="form_group">
                <p>Thanh toán</p>
                <input type="radio" name="radio" id=""checked="true" value="thanh toán khi nhận hàng"> <span>  Thanh  toán khi nhận hàng  </span> 
            </br>
                <input type="radio" name="radio" id="" value="thanh toán bằng thẻ card"><span>  Thanh toán bằng thẻ card </span> 
            </div>
            <input type="hidden" name="maHang" value="<?php echo $kq['id']?>">
            <input type="hidden" name="tenHang" value="<?php echo $productName?>">
            <input type="hidden" name="slMua" value="<?php echo $quantity?>"> 
            <input type="hidden" name="donGia" value="<?php  echo $price?>">
            <div id="dat_hang">
                <button type="submit" > ĐẶT HÀNG</button>
            </div>
            </form>
        </div>
        <div class=" right">
            <h3>Sản phẩm bạn chọn</h3>
            <div class="content">
                <p id="tensanpham"><?php echo $productName ?> </p>
               <p id="soluong">Số lượng:</p>
               <p id="value_num"><?php echo $quantity ?></p>
               <p id="tongTien"> Tổng tiền:</p></p>
               <p id="pirce"><?php echo number_format($price*$quantity) ?>đ</p>
            </div>
            <div>
                <img id="image" src="<?php echo $kq['hinhAnh'];?>" alt=""  width="350px" height="auto" >
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"></script>
</html>