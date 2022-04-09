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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="footer.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: -1%;
    }
    .carousel-indicators{
        opacity: 0.5;
    }
    .product li i{
      
      font-size: 30px;
      margin-right:  10px;
  }
  .product li #mui_ten{
      position: absolute;
      top:23px;
      left: 62px;
      }

    .drop_header{
        display: flex;
        justify-content: space-between;
        justify-items: center;
        height: 61px;

        }
.drop_header #search #search_item{
    margin-top: 5px;
}
#search #search_icon{
    background-color: #cc0000;
    color: white;
    padding: 15px 22px;
    margin-right: 25px;
    position: absolute;
    right: 18px;
    top: 6%;
}
.drop_header #danh_muc i {
    position: absolute;
    color: #fff;
    top: 20px !important;
    left: 40px !important;
    font-size: 24px;
    font-weight: 100;
}
.fixed{
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 10;
    padding: 10px;
    background-color:#Dc2617;
    border-radius:50%;
    animation: hieuung .9s ease-in-out infinite;
}
@keyframes hieuung{
    0%{
        transform: scale(1,1);
    }

    50%{
        transform: scale(0.5,0.5);
    }
    100%{
        transform: scale(1,1);
    }
}
.fixed i{
    font-size: 40px;
    color: #fff;
    z-index: 10;
}
.fixed #contact_message:hover{
    opacity: 25%;
}
.product_bottom .product_price_2 p{
    text-align: center;
    color: red;
    font-size: 20px;
}
#wraper{
    margin-bottom: -200px;
}
    </style>
  <!-- <link rel="stylesheet" href="danhmuc.css"> -->
    <link rel="stylesheet" href="danhmucsp.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>PRODUCT - BỘ NỒI CHẢO</title>
</head>
<body>
<!-- <script>
    

     $(document).ready(function () {
     $.lockfixed(".left", {offset: {
       top: 20, 
       right :100,
       bottom: 1000
      } 
    });
     });
</script> -->

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
    <div id="wraper" style="margin-top: 20px;">
    <div class="drop_header">
        <div id="danh_muc" style="position: relative; left: 35px;">
            <i class="fas fa-align-left"></i>
            <p> DANH MỤC</p>
        </div>
        <form action="" method="GET">
        <div id="search">
            <input type="text"  id="search_item" name="search"  id="search" placeholder="Tìm Kiếm Sản Phẩm" >
            <div id="search_icon">
               <i class="fas fa-search"></i> 
            </div>
        </div>
        </form>
    </div>
    <div class="prev_product">
        <div class="left">
        <ul class="product">
        <li>
                <i class="fa fa-forward" aria-hidden="true" style="opacity: 50%;"></i>               
                <a href=""> <span>Thiết bị điện</span>
                </a>
                <i id="mui_ten1" class="far fa-chevron-right"></i>
                <ul class="sub_danhmuc">
                                                                <!-- _blank : chuyển mở sang tab mới -->
                    <li> <a href="../search/binhthuydien.php" target=""><span>Bình thủy điện</span></a></li>
                    <li> <a href="../search/banla.php" target="">  <span>Bàn là cầm tay</span> </a></li>
                </ul>     
            </li>
            <li>
            <!-- danh muc left -->
             <i class="fa fa-forward" aria-hidden="true" style="opacity: 50%;"></i> 
                <a id="shoes" href=""><span >Vật dụng bếp</span> </a>
                <i id="mui_ten" class="far fa-chevron-right"></i>
                <ul class="sub_danhmuc"> 
                                                              <!-- _blank : chuyển mở sang tab mới-->
                    <li> <a href="../search/bonoichao.php" target=""> <span>Bộ nồi chảo</span> </a></li> 
                    <li> <a href="../search/bepdientu.php">  <span>Bếp điện từ</span> </a></li>
                </ul>     
            </li>
            <li>
            <i class="fa fa-forward" aria-hidden="true" style="opacity: 50%;"></i> 
                <a id="balo" href=""><span>Thiết bị gia đình</span></a>
                <i id="mui_ten" class="far fa-chevron-right"></i>
                <ul class="sub_danhmuc"> 
                                                              <!-- _blank : chuyển mở sang tab mới-->
                    <li> <a href="../search/dondepnha.php" target=""> <span>Máy hút bụi</span> </a></li> 
                    <li> <a href="../search/maynuocnong.php">  <span>Máy nước nóng</span> </a></li>
                </ul>  
            </li>
            <li>
            <i class="fa fa-forward" aria-hidden="true" style="opacity: 50%;"></i> 
                <a id="other" href="../search/sanphamkhac.php"> <span> Sản phẩm khác</span></a>
            </li>
        </ul>
        <div class="info">
            <div id="facebook">
                <img src="../main//images/me.JPG" alt="ảnh đại diện">
                <i class="fab fa-facebook-square"></i>
                <a href="https://www.facebook.com/263ttn/">2IM NGHIA </a>
            </div>
            <div id="zalo">
                <i  class="fas fa-phone-square-alt"></i>
                <a href="https://zalo.me/+84339779454">0399 602 281</a>
            </div>
            <div id="address">
                <i class="fal fa-location-arrow"></i>
                <a href="https://www.google.com/maps/place/Th%C3%B4n+Y%C3%AAn+M%E1%BB%B9+x%C3%A3+Li%C3%AAn+Minh+%C4%90%E1%BB%A9c+Th%E1%BB%8D+H%C3%A0+T%C4%A9nh/@18.5359047,105.6058617,17z/data=!3m1!4b1!4m5!3m4!1s0x3139c92aca736c17:0xa41e4f359ce1be83!8m2!3d18.5358996!4d105.6080504" target="_blank">ĐỨC THỌ HÀ TĨNH</a>
            </div>
        </div>
     </div>
     <div id="right">

     <?php  include '../pageHeader/header.php'?>
    <H3 style="margin-left: 100px; margin-top: 20px; font-family: 'Abel', sans-serif;
        font-family: 'Dancing Script', cursive;
        font-family: 'Saira', sans-serif;
        font-family: 'Source Serif Pro', serif">BỘ NỒI CHẢO - NHÀ NHÀ ƯA DỤNG</H3>
        <div style="font-family: 'Abel', sans-serif;
        font-family: 'Dancing Script', cursive;
        font-family: 'Saira', sans-serif;
        font-family: 'Source Serif Pro', serif; margin-top: 400px;" class="products" id="product_s">      <!--  phần này để show các sản phẩm -->
         <!-- sản phẩm thứ 1 -->
        <?php
       
          $sql=" select * from sanpham where maNhom=4";
          $result=executeResult($sql ,true);
        if($result!=null){
              
      
        foreach($result as $item)
        {
            $sale=ceil(100 - (($item['giaKhuyenMai'])/($item['donGia']) * 100));
            echo '  
            <div class="product">
            <div class="product_top">
             <img src="'.$item['hinhAnh'].'"  width="350px" height=" auto" class="product_image" > 
                <p class="sale">'.$sale.'%</p>
                <a href="../detail_product/detailProduct.php?id='.$item['id'].'" class="mua"> XEM NGAY</a>
            </div>
            <div class="product_bottom">

                <h3 class="title">'.$item['tenHang'].'</h3>
                <div class="product_price">
                    <p class="price_root">'.number_format($item['donGia']).'đ</p>
                    <p style="color:red;" class="price_sale">'.number_format($item['giaKhuyenMai']).'đ</p>
                </div>
            </div>
        </div>';
        }
    }
        ?>  
    </div>

       </div>
     </div> 
     <br>
     <br>
     <div  class="camket_sp">
        <div class="text">
            <div id="text1" >
                <span> <marquee behavior="" direction="right">100% sản phẩm chính hãng</marquee></span>
           </div>
           <div id="text2" >
               <span><marquee behavior="" direction="" vspace="0.4%">Hỗ trợ đổi trả thoải mái</marquee></span>
           </div >
           <div id="text3"  >
            <span><marquee behavior="" direction="up"> Uy Tín chất lượng</marquee></span>
        </div >
        </div>
    </div>
    </div>  <!-- div prev_ product -->
    <!-- <div class="marketing_title hover-title">
        <h3>KHUYẾN MÃI HOT !</h3>
    </div> -->
    </div><!-- div by wraper -->
                                               <!-- hien thi gia tri page trang chu -->

    <!-- <ul class="pagination  justify-content-center">
        <php  
        for($i=1;$i<=$pageNumber;$i++){
            if($page==$i){
                echo ' <li class="page-item active"><a class="page-link" href="" >'.$i.'</a></li>';
            }
            else
            {
                echo ' <li class="page-item "><a class="page-link" href="?page='.$i.'" >'.$i.'</a></li>';
            }
        }
        ?>
  </ul> -->


  <div class="contact_fixed">
      <div class="fixed">
         <a href="https://www.facebook.com/263ttn/" target="_blank">
         <i class="fab fa-facebook-messenger" id="contact_message"></i>
         </a>
      </div>
      <div class="alert alert-secondary alert-dismissible fade show" style="width: 260px;height:auto; padding:13px 0px 10px 0px; margin-right: 10px; position: fixed; right: 80px; bottom: 30px; z-index: 20; text-align: center; background-color: rgb(255 153 0) ;" >
        <button type="button" class="close" data-dismiss="alert">&times;</button>Nhắn tin cho shop tại đây.
      </div>
</body>
<?php  include '../footer/footer.php'?>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="main.js"></script>
<script src="slider.js"></script>
</html>