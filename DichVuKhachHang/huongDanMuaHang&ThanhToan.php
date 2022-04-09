<?php
session_start();
include '../pageHeader/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HƯỚNG DẪN MUA HÀNG VÀ THANH TOÁN </title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../pageHeader/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../main/main.css">
    <link rel="stylesheet" href="trangchuAdmin.css">
</head>
<style>
        .text a{
    text-decoration: none;
    color: #3b5998;
}
     .text p#title{
    position: absolute;
    font-size: 30px;
    color: #111;
    top: -12px;
    text-shadow: 2px 2px 2px #cc0000;
    font-family: 'Open Sans', sans-serif;
    margin-left: 9px;
}
.menu_icon #slsp span{
    color: white;
    font-size: 16px;
}
.menu_icon #slsp{
    position: absolute;
    top: 8px;
    padding: 4px;
}
#menu_main li a:hover{
    border-bottom: 4px solid rgb(235, 77, 77);
    transition: 0.25s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    width: 30%;
    color: #CD201F;

} 
#cart {
    position: relative;
    top: 28px;
    right: -296px;
}
#content #check_don_hang a{
    margin-left: 14px;
    font-size: 21px;
}
 .footer #address a{
    color: rgb(185, 184, 184);
    font-size: 20px;
    text-decoration: none;
    position: absolute;
    top: 8px;
    right: 19px;
    margin-left: 0px;
}
img{
    margin-left: 80px;
}

</style>
<body>
    <div class="conntentMenu" style="margin-top: 120px;margin-bottom: 200px; font-size: 20px;margin-left: 150px;">

        <p style="text-align: center; font-weight: 500; font-size: 25px;"> <strong>  HƯỚNG DẪN MUA HÀNG VÀ THANH TOÁN SẢN PHẨM </strong></p>
        <p> <strong>  BƯỚC 1: Truy cập vào website và chọn sản phẩm cần mua nhấn xem ngay </strong>  </p>
        <img src="img/buoc1.jpg" alt="" width="80%">
        <p> <strong> BƯỚC 2: Chọn số lượng phù hợp với bạn muốn và nhấn mua ngay hoặc là thêm vào giỏ hàng </strong></p>
        <img src="img/buoc2.jpg" alt="" width="80%">
        <p> <strong>BƯỚC 3: Nếu chọn MUA NGAY thì đến với thanh toán và đặt hàng </strong></p>
        <img src="img/buoc3.jpg" alt="" width="80%">

        <p> <strong> BƯỚC 4: Nếu bạn chọn THÊM VÀO GIỎ HÀNG thì đến với giỏ hàng và thanh toán như BƯỚC 3</strong></p>
        <img src="img/buoc4.jpg" alt="" width="80%">
    </div>
   
</body>
<?php include '../footer/footer.php'?>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"></script>
</html>