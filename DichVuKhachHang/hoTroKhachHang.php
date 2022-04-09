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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../pageHeader/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../main/main.css">
    <link rel="stylesheet" href="trangchuAdmin.css">
    <title>HỖ TRỢ KHÁCH HÀNG</title>
    <style>
            .text a{
    text-decoration: none;
    color: #3b5998;
}
        #menu_main li a:hover{
    border-bottom: 4px solid rgb(235, 77, 77);
    transition: 0.25s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    width: 30%;
    color: #CD201F;
        }
    #content #check_don_hang a{
    margin-left: 14px;
    font-size: 21px;

        } 
        #content #check_don_hang a {
    margin-left: 4px;
    font-size: 20px;
}
#cart {
    position: absolute !important;
    top: 20px !important;
    right: 93px !important;
}
.text p#title {
    position: absolute;
    font-size: 30px;
    color: #111;
    top: -13px;
    text-shadow: 2px 2px 2px #cc0000;
    font-family: 'Open Sans', sans-serif;
    margin-left: 9px;
}
.info_footer #address a {
    color: rgb(185, 184, 184);
    font-size: 20px;
    text-decoration: none;
    position: absolute;
    top: 8px;
    right: 27px;
    margin-left: 0px;

}
    </style>
</head>
<body>
    
    <div class="contentMenu" style=" margin-top: 120px;margin-bottom: 200px; font-size: 20px;margin-left: 150px;">
        <p  style="text-align: center; font-size: 25px;">  <strong> CHÍNH SÁCH HỖ TRỢ KHÁCH HÀNG CỦA SHOP </strong></p>
        <p   class="wraper" style=" font-family: 'Abel', sans-serif;
        font-family: 'Dancing Script', cursive;
        font-family: 'Saira', sans-serif;
        font-family: 'Source Serif Pro', serif;"> 
            <p> - Khách hàng được kiểm tra hàng thoải mái trước khi thanh toán !</p>
            <p> - Hỗ trợ khách hàng đổi trả sản phẩm trong vòng 7 ngày </p>
            <p> - Sản phẩm của shop cam kết chính hãng nếu phát hiện không phải hàng chính hãng thì shop sẽ đền tiền cho khách hàng  <strong>1000 lần </strong></p>
            <p> - Sản phẩm của bạn được bên shop bảo hành chính hãng trong vòng 6 tháng nếu do lỗi của nhà sản xuất thì shop sẽ hoàn tiền</p>
            <p> - Shop hỗ trợ bảo hành sản phẩm trong thời hạn </p>
            <p> - Thank you so much !!! </p>
            <hr style="width:680px ; height:2px;border-width:0px;color:gray;background-color:gray">
            <p style="text-align: center;"> Chủ cửa hàng<br> <i>Nghĩa</i> </br> <b>Trần Trung Nghĩa</b></p>

        </p>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"></script>
<?php  include '../footer/footer.php'; ?>
</html>