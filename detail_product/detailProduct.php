<?php
session_start();
  require_once('../mySql_general/function_helper.php');
        if(!empty($_GET)){
            if(isset($_GET)){
                $id=$_GET['id'];
                $kq=get_memberProduct($id);
                $sql="select donGia,giaKhuyenMai from sanpham where id=$id";
                $result=executeResult($sql);
                $sale=ceil(100 - (($result[0]['giaKhuyenMai'])/($result[0]['donGia']) * 100));
            }
        }
        if(isset($_SESSION['cart'])){
            $cart=$_SESSION['cart'];
          }
          else
          $cart=[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="chiTietSanPham.css"> -->
    <!-- ghi chú -->
    <link rel="stylesheet" href="chitietsp.css">
    <link rel="stylesheet" href="chiTietSanPham.css">
   <link rel="stylesheet" href="../header/phanHeader.css">
   <link rel="stylesheet" href="../search/danhmucsp.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../pageHeader/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../main/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title> CHI TIẾT SẢN PHẨM</title>
</head>
<style>
    .text a{
    text-decoration: none;
    color: #3b5998;
}

.text a:hover{
 text-decoration: none;
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
    #gioHang{
        position: relative;
        top:-100px;
        right: -230px;
        width: 200px;
    }
        #gioHang i{
     position: absolute;
    top: 65px;
    left: 13px;
    color: #fff;
    font-size: 20px;
  
            }
    #carts{
    height: 50px;
    width: 200px;
    color: #fff;;
    background-color:#CD201F;
    border: 1px solid rgb(104, 101, 101);
    margin-top: 50px;
                }
#carts:hover{
    background-color: #f73c3c;
}
    .menu_icon #slsp{
    position: absolute;
    top: 8px;
    right:90px;
    background-color: #ec3d3d;
    border-radius: 50%;
    padding:3px;
    box-shadow: #f18286 0px 2px 2px 0px;
    color: white; 
    z-index: 1;
} 
.menu_icon #slsp span{
    color: white;
    font-size: 15px;
}
#dialog{
    position: absolute;
    top:250px;
    width: 320px;
    height: 130px;
    background: transparent; /* transparen màu trong suốt */
    background: rgba(0,0,0,0.8); 
    border-radius: 2px;
    display: none;
}
#dialog i{
    position: absolute;
    top: 20px;
    left: 132px;
    font-size: 40px;
  color: aqua;
}
#dialog p{
 position: absolute;
 top: 50px;
 left: 10px;
color: #fff;}

.content_bottom #title {
    position: absolute;
    top: 16px;
    left: -475px;
    margin-bottom: 5px;
    font-size: 20px;
    color: rgb(240, 238, 238);
}
.footer #address a{
    color: rgb(185, 184, 184);
    font-size: 20px;
    text-decoration: none;
    position: absolute;
    top: 8px;
    right: 10px;
    margin-left: 0px;
}
.container{
    margin-top: 120px;
    margin-bottom: 300px;
    margin-left: 100px;
}

body{
    font-family: 'Times New Roman', Times, serif;
    font-size: 18px;
}
</style>
<body >
    <div class="top-banner">
        <img src="../main/images/banner1.jpg" alt="" height="500px" style="margin-left: 150px;">
    </div>
    <div class="tieude">
      <h2 style="text-align: center; font-family:'Times New Roman', Times, serif; font-size:30px; margin-top:40px; color:red;">CHI TIẾT SẢN PHẨM BẠN MUỐN XEM</h2>
      <br>
      <hr style="color: blue; width :800px; border-width:2px;">
    </div>
<div class="container">
   <?php  include '../pageHeader/header.php'?>
<!-- phần hiển thị hình ảnh -->
    <div class="pricture_detail">
        <img src="<?php echo $kq['hinhAnh'] ?>" alt="" width="450px" height="auto">
        <p id="sale"> <?php echo $sale; ?>% </p>
    </div>
    <div class="content">
        <p id="title" style="font-family: 'Times New Roman', Times, serif;  font-weight: 600;"> <?php echo $kq['tenHang'] ?></p>

        <div class="price">
                <p id="pirce_root"> <?php echo number_format( $kq['donGia']) ?> đ</p>
                 <p id="pirce_sale" style="color: #cc0000;">  <?php echo number_format( $kq['giaKhuyenMai'] )?>đ</p>
        </div>
        <p style="font-family: 'Times New Roman', Times, serif; font-size:25px;">MÔ TẢ SẢN PHẨM </p>
        <div class="mo_ta">
            <p> <?php echo  $kq['moTa'] ?> </p>
        </div>
        <div class="choose">
            <div class="slsp">
                <p>Số lượng:</p>
    <form action="../thanhtoan/thanhtoan.php" method="POST" name="frm_detailProduct" onsubmit=" return checkInformation()">
                <div class="block">
                    <input type="number" id="quantity"  name="quantity"  value="1"  min="1">
                    <input type="hidden" id="sltk" name="sltk" value="<?php echo $kq['soLuong']?>"> 
                    <input type="hidden" id="productName" name="productName" value="<?php echo $kq['tenHang']?>"> 
                    <input type="hidden" id="price" name="price" value="<?php echo $kq['giaKhuyenMai']?>"> 
                    <input type="hidden" id="thumbnail" name="thumbnail" value="<?php echo $kq['hinhAnh']?>"> 
                    <input type="hidden" id="thumbnail" name="id" value="<?php echo $kq['id']?>"> 
                </div>
            </div>
            <div id= "status">
                <p>Trạng thái:</p>
                <p id="name_status"><?php  if($kq['soLuong']>0) echo 'Còn hàng' ;else echo 'Hết hàng' ?></p>
            </div>
        </div>
        <!-- <div class="buy_or_cart">   -->
            <a href="../thanhtoan/thanhtoan.php">
                <button id="buy" name="buy" style="background-color: #f14725; border: none; font-size: 18px; border-radius: 2px;">Mua ngay </button>
                </a>
            </form>
          <form action="../cart/cart.php" name="addToCart" id="addToCart" method="POST" onsubmit=" return checkCart()">
            <div id="dialog">
                <i class="fal fa-check-circle"></i>
                    <p>Sản phẩm đã được thêm vào giỏ hàng </p>
                </div>
            <div id="gioHang">
                    <input type="hidden" id="thumbnail" name="id" value="<?php echo $kq['id']?>"> 
                    <input type="hidden" id="sltk" name="sltk" value="<?php echo $kq['soLuong']?>">
                    <input type="hidden" id="numInCart" name="numInCart" value="<?php 
                    if(isset($_SESSION['cart'])){
                       echo $cart[$id]['num'];
                    }
                    else
                    echo 0;
                    ?>">          
               <!--  <a href="../cart/cart.php"> -->
            <i class="fal fa-shopping-cart" style="color: red; z-index: 1;"></i>
            <button type="submit" id="carts" name="cart" style="background-color: rgb(255 197 178 / 0.8); border: none; cursor: pointer;
            color:red;font-size: 17px; position: absolute; right:10px; padding-left: 38px; margin-right: -15px;"  > Thêm vào giỏ hàng</button>
          <!--   </a> -->
            </div>
            </form>
      <!--   </div> -->  
    </div>
   
</div> 
</body>
<?php  include '../footer/footer.php'?>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"></script>
<script src="../detail_product/detail.js"></script>
<script>
    function checkInformation(){
        var slht;
        var sltk;
        if (slht == null)
        {
        slht = document.frm_detailProduct.quantity.value;
        sltk = document.frm_detailProduct.sltk.value;
        if(parseInt(sltk)==0){
            alert("Sản phẩm hiện đang hết hàng !!");
            return false;
        }
    if(parseInt(slht)>parseInt(sltk))
     { 
       alert(" Vui lòng nhập số lượng hàng ít hơn "+sltk +" sản phẩm !!!");
        return false;
    }
    }
    return true;
    }
    function checkCart(){
        var sltk;
        var soLuongTrongCart;
        if(sltk == null){
            sltk = document.addToCart.sltk.value;
            soLuongTrongCart=document.addToCart.numInCart.value;
            if(parseInt(sltk)==0){
                alert("Sản phẩm này hiện nay đang hết hàng !! ");
                return false;
            }
        if(parseInt(soLuongTrongCart) >= parseInt(sltk)){
            alert(" Số lượng trong kho không đủ để thêm vào giỏ hàng cho sản phẩm này !!!");
            return false;
        }
      
    }
    else
    {
        return true;
    }
}
        $(function(){
            $("#carts").click(function() {
                var sltk;
                var soLuongTrongCart;
                document.getElementById("dialog").style.display = 'block';
                setTimeout(function() {
                    $('#dialog').fadeOut('5000');
                    }, 20000);
        if(sltk == null){
            sltk = document.addToCart.sltk.value;
            soLuongTrongCart=document.addToCart.numInCart.value;
            if(parseInt(sltk)==0){
            document.getElementById("dialog").style.display = 'none';
        }
        if(parseInt(soLuongTrongCart) >= parseInt(sltk)){
            document.getElementById("dialog").style.display = 'none';
        }
    }
        });
        });
</script>
</html>