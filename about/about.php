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

/* css phan noi dung chính */
.about{
    margin-top: 60px;
    margin-left: 37px;
    font-family: Arial;
    border: 1px solid #696969;
    width: 304px;
}
.about ul li{
    list-style: none;
    margin-left: -23px;
}
.about ul li a{
    color: #EE5C42;
}
.about ul li a:hover{
    color: 	#F4A460;
}
.about p{
    margin-top: 10px;
    text-align: center;
    font-size: 20px;
}
.about .an a{
    color: #EE5C42;
    font-size: 17px;
}
    </style>
  <!-- <link rel="stylesheet" href="danhmuc.css"> -->
    <!-- <link rel="stylesheet" href="../search//danhmucsp.css"> -->
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>BÀI VIẾT</title>
</head>
<body>

<?php  include '../pageHeader/header.php'?>
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
        <div class="about">
            <p>Nội dung chính
            <span class="an">
                [<a href="#">Ẩn</a>]
            </span>
            </p>
            <ul class="about_nd">
                <li>
                    <a href="../main/main.php">
                        <span>0.0 Website bán đồ gia dụng của Trần Trung Nghĩa</span>
                    </a>
                </li>
                <li>
                    <a href="https://th.bing.com/th/id/R.41d9f6b697cac9ed8ef4b28bcd4ff0e4?rik=1CuGTtkyiXV%2bGA&riu=http%3a%2f%2fgiadunglongviet.com%2fwp-content%2fuploads%2f2016%2f12%2fdo-nau.jpg&ehk=zBV07Kp%2fVrg%2b5BpfCWuXmoCQlNLbjDKtF0FVhTqE8t8%3d&risl=&pid=ImgRaw&r=0" target="_blank">
                        <span>1 Đồ gia dụng là gì ? Website bán đồ gia dụng giá rẻ</span>
                    </a>
                </li>
                <li>
                    <a href="https://perfectusa.com.vn/collections/all" target="_blank">
                        <span>2 Sản phẩm gia dụng chất lượng</span>
                    </a>
                </li>
                <li>
                    <a href="https://thegioidogiadung.com.vn/gia-dung-duc" target="_blank">
                        <span>3 Một số địa chỉ bán đồ gia dụng nổi tiếng</span>
                    </a>
                </li>
                <li>
                    <a href="../DichVuKhachHang/huongDanMuaHang&ThanhToan.php" target="_blank">
                        <span>4 Hướng dẫn chi tiết khi mua sắm gia dụng online</span>
                    </a>
                </li>
                <li>
                    <a href="https://tongkhobuonsi.com/co-nen-mua-do-gia-dung-online-hay-khong-n70008.html" target="_blank">
                        <span>5 Có nên mua đồ gia dụng online không ?</span>
                    </a>
                </li>
                <li>
                    <a href="../product/product.php">
                        <span>6 Bạn cần đồ gia dụng ? Đến với website gia dụng 2IM NGHIA </span>
                    </a>
                </li>
                <li>
                    <a href="http://mamnonblienninh.edu.vn/tin-tuc-su-kien/thong-diep-9k-cua-bo-y-te-phong-chong-covid-19.html" target="_blank">
                        <span>7 Thông điệp phòng chống COVID-19</span>
                    </a>
                </li>
            </ul>
        </div>
     </div>
     <div id="right">
     <?php  include '../pageHeader/header.php'?>    
    </div>
    <div class="baiviet">
        <h3 style="text-align: center; margin-top :10px;color:#Dc2617; font-size :30px;">
            WEBSITE ĐỒ GIA DỤNG 2IM NGHIA <br> <h5 style="text-align: center; color :rgb(255 153 0)">BÀI VIẾT</h5>
            <hr style="color: #EE5C42; border-width :3px;">
        </h3>
        <br> <br>
        <table >
            <tr style=" border-style: dashed;">
            <td valign="top">
            <a href="https://shop.vnexpress.net/gia-dung" target="_blank"><img src="https://th.bing.com/th/id/R.41d9f6b697cac9ed8ef4b28bcd4ff0e4?rik=1CuGTtkyiXV%2bGA&riu=http%3a%2f%2fgiadunglongviet.com%2fwp-content%2fuploads%2f2016%2f12%2fdo-nau.jpg&ehk=zBV07Kp%2fVrg%2b5BpfCWuXmoCQlNLbjDKtF0FVhTqE8t8%3d&risl=&pid=ImgRaw&r=0" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="https://shop.vnexpress.net/gia-dung" target="_blank"><h2>Đồ gia dụng là gì ? Website bán đồ gia dụng giá rẻ</h2></a>
							<p>
								<font size="4">
                                Đồ gia dụng còn được gọi là thiết bị gia dụng, là cụm từ được sử dụng để chỉ chung các phẩm được thiết kế và sản xuất với mục đích phục vụ những nhu cầu thiết yếu trong sinh hoạt hằng ngày của các gia đình. 
								</font>
							</p>
						</td>
            </tr>
            <tr style="border-style: dashed;">
            <td valign="top">
							<a href="https://perfectusa.com.vn/collections/all" target="_blank"><img src="https://vinasem.com.vn/administrator/webroot/upload/image/images/tin-tuc/viet-luan-van-chat-luong-sp.jpg" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="https://perfectusa.com.vn/collections/all" target="_blank"><h2>Sản phẩm gia dụng chất lượng</h2></a>
							<p>
								<font size="4">
                                Chất lượng chính là biểu hiện, là kết quả của quản lý chất lượng. Quản lý chất lượng tốt thì sản phẩm sản xuất ra đảm bảo theo yêu cầu chất lượng đã được đặt ra. Ngược lại chất lượng sản phẩm tốt phản ánh quản lý chất lượng đã thực hiện đúng các chức năng nhiệm vụ của mình trong quá trình tạo ra sản phẩm.
								</font>
							</p>
						</td>
            </tr>
            <tr style=" border-style: dashed;">
            <td valign="top">
							<a href="https://thegioidogiadung.com.vn/gia-dung-duc" target="_blank"><img src="https://duhocnhatysk.edu.vn/sites/default/files/chia-se-bi-quyet-su-dung-do-dien-gia-dung-hieu-qua-va-tiet-kiem-1.jpg" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="https://thegioidogiadung.com.vn/gia-dung-duc" target="_blank"><h2> Một số địa chỉ bán đồ gia dụng nổi tiếng</h2></a>
							<p>
								<font size="4">
                                Top 5 Địa chỉ chuyên bỏ sỉ đồ gia dụng, đồ dùng nhà bếp giá rẻ và uy tín nhất Hà Nội <br>
                                Siêu thị online trực tuyến hàng gia dụng chính hãng ,chủ yếu tập trung vào một số các danh mục như: quạt không cánh, bếp từ, nồi chiên không dầu, ấm đun siêu tốc, robot hút bụi tự động,  , máy rửa bát,máy lọc không khí ,máy sưởi điện...
								</font>
							</p>
						</td>
            </tr>
            <tr style=" border-style: dashed;">
            <td valign="top">
							<a href="../DichVuKhachHang/huongDanMuaHang&ThanhToan.php" target="_blank"><img src="../DichVuKhachHang/img/hdonline.jpg " width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="../DichVuKhachHang/huongDanMuaHang&ThanhToan.php" target="_blank"><h2>Hướng dẫn chi tiết khi mua sắm gia dụng online</h2></a>
							<p>
								<font size="4">
								Để mua hàng online được nhanh chóng và tiết kiệm thì bạn cần chú ý những điểm sau đây  <br>
                                Đăng ký tài khoản trả tiền: nói chung cốt là bạn có tiền chứ không quan trọng là bạn dùng hình thức nào trả tiền.  Tuy nhiên những hình thức sau tương đối phổ thông <br>
                                Thẻ tín dụng - Thẻ ATM nội địa - Trả góp bằng thẻ tín dụng...
								</font>
							</p>
						</td>
            </tr>
            <tr style="border-style: dashed;">
            <td valign="top">
							<a href="https://tongkhobuonsi.com/co-nen-mua-do-gia-dung-online-hay-khong-n70008.html" target="_blank"><img src="https://hdfashion.net/wp-content/uploads/2020/02/online-shopping-768x512.jpg" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="https://tongkhobuonsi.com/co-nen-mua-do-gia-dung-online-hay-khong-n70008.html" target="_blank"><h2>Có nên mua đồ gia dụng online không ?</h2></a>
							<p>
								<font size="4">
									Nên mua hàng online ở trên mạng ? Nếu bạn có nhu cầu mua hàng gia dụng và băn khoăn thì cần nên lựa chọn Lazada , Shoppe , Tiki... Từ bếp điện, nồi cơm điện, máy xay sinh tố, lò vi sóng,...đều được đánh giá cao về chất lượng. Các sản phẩm sẽ được đóng gói cẩn thận nên không cần lo việc bị hư hỏng khi vận chuyển.
								</font>
							</p>
						</td>
            </tr>
            <tr style=" border-style: dashed;">
            <td valign="top">
							<a href="../product/product.php" target="_blank"><img src="https://nhadepso.com/wp-content/uploads/2017/09/do-gia-dung-thong-minh_do-gia-dung-thong-thuong.jpg" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="../product/product.php" target="_blank"><h2>Bạn cần đồ gia dụng ? Đến với website gia dụng 2IM NGHIA</h2></a>
							<p>
								<font size="4">
                                Bạn muốn mua đồ dùng nhà bếp giá sỉ? Bạn muốn tìm kiếm nguồn hàng dồi dào, số lượng lớn? Bạn vẫn đang khó khăn trong việc tìm kiếm một địa chỉ chuyên bỏ sỉ đồ gia dụng, đồ dùng nhà bếp giá rẻ và uy tín nhất Hà Nội? Bài viết này của Toplist sẽ giúp bạn trả lời những thắc mắc trên.
								</font>
							</p>
						</td>
            </tr>
            <tr style=" border-style: dashed;">
            <td valign="top">
							<a href="http://mamnonblienninh.edu.vn/tin-tuc-su-kien/thong-diep-9k-cua-bo-y-te-phong-chong-covid-19.html" target="_blank"><img src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2020/12/info5k_eqsm_thumb_thumb.jpg" width="300px" height="210"></a>
						</td>
						<td valign="top">
							<a href="http://mamnonblienninh.edu.vn/tin-tuc-su-kien/thong-diep-9k-cua-bo-y-te-phong-chong-covid-19.html" target="_blank"><h2>Thông điệp 5K phòng chống COVID-19</h2></a>
							<p>
								<font size="4">
                                Theo Bộ Y tế, hiện nay, dịch bệnh COVID - 19 đang diễn biến hết sức phức tạp. Để chủ động phòng, chống dịch hiệu quả, các lực lượng chức năng và người dân cần thực hiện thông điệp 9K, với các nội dung chính sau
								</font>
							</p>
						</td>
            </tr>
        </table>
    </div>
    </div>
     </div> 
     <br>
     <br>
     <!-- <div  class="camket_sp">
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
    </div> -->
    </div> 
    </div>
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