<?php
session_start();

require_once('../mySql_general/function_helper.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pageHeader/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../main/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <title>THIẾT BỊ CHĂM SÓC</title>
</head>
<style>
.text p#title{
    position: absolute;
    top: -12px;
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
    position: absolute !important;
    top: 23px !important;
    right: 93px !important;
}
#content #check_don_hang a{
    margin-left: 14px;
    font-size: 21px;
}
h3{
    font-size: 29px;
   
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
#wraper{
    margin-bottom: -200px;
}
</style>
<body >
    <?php  include '../pageHeader/header.php'?>
    <div class="top-banner">
    <div class="picture">
                    <div class="picture_items">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                            <!-- The slideshow banner -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../main/images/banner1.jpg" alt="Los Angeles" width="100%" height="500">
                                </div>
                                <div class="carousel-item">
                                    <img src="../main/images/banner5.jpg" alt="Chicago" width="100%" height="500">
                                </div>
                                <div class="carousel-item" id="pictureLast">
                                    <img src="../main/images/banner7.png" alt="New York" width="100%" height="500">
                                </div>
                                <div class="carousel-item" id="pictureLast">
                                    <img src="../main/images/banner6.jpg" alt="England" width="100%" height="500">
                                </div>
                                <div class="carousel-item" id="pictureLast">
                                    <img src="../main/images/banner8.jpg" alt="Paris" width="100%" height="500">
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
    </div>
    <H3 style="text-align: center; margin-top: 120px; font-family: 'Abel', sans-serif;
        font-family: 'Dancing Script', cursive;
        font-family: 'Saira', sans-serif;
        font-family: 'Source Serif Pro', serif">THIẾT BỊ CHĂM SÓC QUẦN ÁO</H3>


<div style="font-family: 'Abel', sans-serif;
        font-family: 'Dancing Script', cursive;
        font-family: 'Saira', sans-serif;
        font-family: 'Source Serif Pro', serif; margin-top: 300px;" class="products" id="productss">      <!--  phần này để show các sản phẩm -->
         <!-- sản phẩm thứ 1 -->
        <?php
       
          $sql=" select * from sanpham where maNhom=2";
          $result=executeResult($sql ,true);
        if($result!=null){
              
      
        foreach($result as $item)
        {
            echo '  
                    <div class="product">
                   
            <div class="product_top">
             <img src="'.$item['hinhAnh'].'"  width="350px" height=" auto" class="product_image" > 
                <p class="sale">10%</p>
                <a href="../detail_product/detailProduct.php?id='.$item['id'].'" class="mua"> XEM NGAY</a>
            </div>
           
            <div class="product_bottom">
                <h3 class="title">'.$item['tenHang'].'</h3>
                <div class="product_price">
                    <p class="price_root">'.number_format($item['donGia']).'đ</p>
                    <p style="color:red;" class="price_sale">'.number_format($item['donGia']*0.9).'đ</p>
                </div>
            </div>
        </div>';
        }
    }
        ?>
       
  
    </div>
    
</body>
<?php  include '../footer/footer.php'?>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"></script>
</html>