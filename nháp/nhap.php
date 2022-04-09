<?php
require_once('../mySql_general/function_helper.php');
$sl="2";
$maHang="1";
$sql4="UPDATE sanpham SET soLuong=(soLuong+ $sl) where id=$maHang";
execute($sql4);
//còn hai vấn đề đó là check đơn hàng và khi thanh toán xong thì cho trở về trang chính để tiếp tục mua hàng
?>