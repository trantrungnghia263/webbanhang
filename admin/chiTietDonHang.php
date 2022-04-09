
<?php
 require_once("../mySql_general/function_helper.php");
require_once('../mySql_general/config_DB.php');

if(isset($_GET['maHd'])){
    $maHd=$_GET['maHd'];
}
$sql= "SELECT hoadon.maHd,hoadon.userName,hoadon.address, hoadon.phoneNumber, donhang.maHang maHang,donhang.slMua sl ,donhang.donGia gia ,  donhang.tenHang tenHang, donhang.ngayDatHang ngayDat,donhang.trangThai trangThai  
from hoadon,donhang where hoadon.maHd=donhang.idHd and donhang.idHd=$maHd";
$kq=executeResult($sql);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="header.css">
    <title>Trang  chi tiết đơn Hàng</title>
</head>
<body>
<div id="container">
        <div id="viewport">
            <!-- Sidebar -->
            <div id="sidebar">
              <header>
                <a href="../main/main.php">Nghĩa Handsome</a>
              </header>
              <ul class="nav">
                <li id="nhapdanhmuc" class="active">
                  <a href="trangchuAdmin.php" >  Thêm Khách Hàng 
                   
                  </a>
                </li>
                <li id="themsanpham1"   >
                  <a href="trangchuAdmin.php" >
                    <i class="zmdi zmdi-link"></i> Quản Lý Khách Hàng
    
                  </a>
                </li>
                <li id="editsp">
                  <a href="addProduct.php">
                    <i class="zmdi zmdi-widgets"></i> Thêm Sản Phẩm
                  </a>
                </li>
                <li>
                  <a href="quanLySanPham.php">
                    <i class="zmdi zmdi-calendar"></i> Quản Lý sản Phẩm
                  </a>
                </li>
                <li>
                  <a href="themDanhMuc.php">
                    <i class="zmdi zmdi-info-outline"></i> Thêm Danh Mục
                  </a>
                </li>
                <li >
                  <a href="quanLyDanhMuc.php" >
                    <i class="zmdi zmdi-settings"></i>Quản Lý Danh Mục
                  </a>
                </li>
                <li style="background-color:rgba(63, 67, 73, 0.897);">
                  <a href="donHang.php" style="color: #f5f5f5;">
                    <i class="zmdi zmdi-comment-more"></i> Quản Lý Đơn Hàng
                  </a>
                </li>
              </ul>
            </div>

            <!-- Content -->
            <div id="content">
                <div class="title">
                    <h2>TRANG QUẢN TRỊ ADMIN</h2>
                  <a href="../main/main.php"> <P>VỀ TRANG CHỦ </P></a> 
                </div>
                <div class="noi_dung_main">
                  <div id="">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center" style="font-family: 'Abel', sans-serif;
font-family: 'Dancing Script', cursive;
font-family: 'Saira', sans-serif;
font-family: 'Source Serif Pro', serif;"> CHI TIẾT ĐƠN HÀNG CỦA KHÁCH HÀNG - <?php echo  $kq[0]['userName'] ?></h2>
                        </div>
                        <div class="panel-body">
                          <table class=" table table-bordered">
                            <thead>
                          <tr>
                                <th width=20px> STT</th>
                                <th width=60px  style="text-align: center;"> MÃ ĐƠN HÀNG</th>
                                <th width=60px  style="text-align: center;"> MÃ HÀNG</th>
                                <th width=150px style="text-align: center;"> TÊN KHÁCH HÀNG</th>
                                <th width=200px style="text-align: center;"> ĐỊA CHỈ</th>
                                <th width=200px style="text-align: center;"> SỐ ĐIỆN THOẠI</th>
                                <th width=200px style="text-align: center;"> SẢN PHẨM MUA </th>
                                <th width=30px style="text-align: center;"> SL</th>
                                <!-- <th width=50px style="text-align: center;">  SIZE</th> -->
                                <th width=40px style="text-align: center;"> GIÁ </th>
                                <th width=200px style="text-align: center;"> TỔNG TIỀN </th>
                                <th width=60px style="text-align: center;"> NGÀY ĐẶT HÀNG</th>
                                 <th width=60px style="text-align: center;"> TRẠNG THÁI</th>
                               
                                </tr>
                              </thead>
                                          <tbody>
                                          <!-- donhang.slMua sl, donhang.size size,hoadon.donGia gia,donhang.ngayDatHang  ngayDat, donhang.trangThai status -->
                                 <?php

                      $index=0;
                      foreach($kq as $item){
                        echo '<tr>
                              <td>'.(++$index).'</td>
                              <td style="text-align:center;"> '.$item['maHd'].'</td>
                              <td style="text-align:center;"> '.$item['maHang'].'</td>
                              <td style="text-align:center;"> '.$item['userName'].'</td>
                              <td style="text-align:center;"> '.$item['address'].'</td>
                              <td style="text-align:center;"> '.$item['phoneNumber'].'</td>
                              <td style="text-align:center;"> '.$item['tenHang'].'</td> 
                              <td style="text-align:center;"> '.$item['sl'].'</td> 
                           
                              <td style="text-align:center;"> '.number_format($item['gia']).'</td> 
                              <td style="text-align:center;"> '.number_format($item['sl']*$item['gia']).'</td>
                              <td> '.date("d/m/Y  H:i:s", strtotime($item['ngayDat'])).'</td>
                              <td style="text-align:center;"> '.$item['trangThai'].'</td>
                              </tr> ';

                      }
                      ?>
                
                              </tbody>
                            </table>
                       
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</div>
    
</body>
</html>