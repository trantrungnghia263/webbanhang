
<?php
require_once("../mySql_general/function_helper.php");
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
     <link rel="stylesheet" href="header.css">
     <link rel="stylesheet" href="thongKe.css">
    <title>Trang Thống kê</title>
</head>
<body>
    <style>
        .thongke{
            display: flex;
            justify-content: space-between;
            justify-items: center;
            font-size: 22px;
        }
        .thongke .dagiao{
            background-color: #aab8c2;
            padding: 10px;
            border-radius: 5px;
            font-size: 22px;
            margin-left: 40px;
        }
        .thongke .dagiao  #title{
        padding-left: 12px;   
        border-bottom: 1px solid #111;
        }
        .thongke .dagiao  #quantity{
            font-size: 25px;
            text-align: center;
        }
        .notifyOrder{
          display: none;
        }
    </style>
<div id="container">
        <div id="viewport">
            <!-- Sidebar -->
            <div id="sidebar">
              <header>
                <a href="../main/main.php">Nghĩa Handsome</a>
              </header>
              <ul class="nav">
                <li id="nhapdanhmuc" class="active">
                  <a href="trangchuAdmin.php" >  Thêm khách Hàng 
                   
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
                <li>
                  <a href="quanLyHoTroKhachHang.php">
                    <i class="zmdi zmdi-settings"></i> Quản Lý HTKH
                  </a>
                </li>
                <li>
                  <a href="donHang.php">
                    <i class="zmdi zmdi-comment-more"></i> Quản Lý Đơn Hàng
                  </a>
                </li>
                <li style="background-color:rgba(63, 67, 73, 0.897);">
                  <a href="thongKe.php" style="color: #f5f5f5;">
                    <i class="zmdi zmdi-comment-more"></i> Thống Kê
                  </a>
                </li>
              </ul>
            </div>
            <!-- Content -->
            <div id="content">
                <div class="title">
                    <h2>TRANG QUẢN TRỊ ADMIN</h2>
                  <a href="../main/main.php"> <P>QUAY LẠI</P></a> 
                </div>
                <div class="noi_dung_main">
                  <div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center">Thống kê dữ liệu bán hàng </h2>
                        </div>
                        <div class="panel-body">
                  <div> 
                      <h2>Trạng thái các đơn hàng</h2>
                  </div>
                  <?php
                  // đếm số lượng đơn hàng ở trạng thái đang giao, đã giao và đang chờ xử lý
                  $sql="select count(id) as 'sl' from donhang where trangThai= 'Đang Giao'";
                  $kq=executeResult($sql);
                  $sldonHangDangGiao=$kq[0]['sl'];
                  
                  $sql="select count(id) as 'sl' from donhang where trangThai= 'Chờ Xử lý đơn'";
                  $kq=executeResult($sql);
                  $sldonHangDangChoXuLy=$kq[0]['sl'];
                    
                  $sql="select count(id) as 'sl' from donhangdaban where trangThai= 'Đã lấy hàng'";
                  $kq=executeResult($sql);
                  $sldonHangdaban=$kq[0]['sl'];
                  ?>
                  <input type="hidden" id="hangDangGiao" value="<?php  echo $sldonHangDangGiao; ?>">
                  <input type="hidden" id="hangDangChoXuLy" value="<?php  echo $sldonHangDangChoXuLy; ?>">
                  <input type="hidden" id="hangDaBan" value="<?php  echo $sldonHangdaban; ?>">
                  <div class="thongke" >
                      <div class="dagiao" >
                        <button class="tablinks" onclick="openThongKe(event, 'daGiao')" >
                          <p id="title">Đã giao hàng thành công </p>
                          <p id="quantity"><?php echo $sldonHangdaban ?>  đơn</p>
                        </button>
                      </div>
                      <div class="dagiao">
                        <button class="tablinks" onclick="openThongKe(event, 'dangGiao')">
                          <p id="title">Đơn đang giao </p>
                          <p id="quantity"><?php echo $sldonHangDangGiao ?>  đơn </p>
                        </button>
                      </div>
                      <div class="dagiao" style="margin-right: 50px;">
                      <button class="tablinks" onclick="openThongKe(event, 'choXuLy')">
                        <p id="title">Đơn đang chờ xử lý</p>
                        <p id="quantity"><?php echo $sldonHangDangChoXuLy ?>  đơn</p>
                      </button>
                      </div>
                  </div>
                  <div class="tabcontent" id="daGiao"> 
                  <table class="table table-bordered">
                            <thead>
                          <tr>
                                <th width=20px> STT</th>
                                <th width=60px  style="text-align: center;"> MÃ ĐƠN HÀNG</th>
                                <th width=150px style="text-align: center;"> MÃ KHÁCH HÀNG</th>
                                  <th width=200px style="text-align: center;"> TÊN SẢN PHẨM</th>
                                  <th width=60px style="text-align: center;"> SL MUA</th>
                                  <th width=80px style="text-align: center;"> TỔNG TIỀN </th>
                                  <th width=60px style="text-align: center;"> NGÀY ĐẶT HÀNG</th>
                                </tr>
                              </thead>
                     <tbody>
          <?php 
          $sql="SELECT * from donhangdaban ";
          $kq=executeResult($sql);
        $index=0;
          foreach($kq as $item){
            echo '<tr>
            <td>'.(++$index).'</td>
            <td style="text-align:center;">'.$item['idHd'].'</td>
            <td style="text-align:center;">'.$item['maKhachHang'].'</td>
            <td style="text-align:center;"> '.$item['tenHang'].'</td>
            <td style="text-align:center;"> '.$item['slMua'].'</td> 
            <td style="text-align:center;"> '.number_format($item['slMua']*$item['donGia']).' VND</td>
            <td> '.date("d/m/Y  H:i:s", strtotime($item['ngayDatHang'])).'</td>
            </tr> ';
          }
          ?>
                 </tbody>
                  </table>
                  </div>
                  <div class="tabcontent" id="dangGiao"> 
                  <table class="table table-bordered" id="tableDangGiao">
                            <thead>
                          <tr>
                                <th width=20px> STT</th>
                                <th width=60px  style="text-align: center;"> MÃ ĐƠN HÀNG</th>
                                <th width=150px style="text-align: center;"> MÃ KHÁCH HÀNG</th>
                                  <th width=200px style="text-align: center;"> TÊN SẢN PHẨM</th>
                                  <th width=60px style="text-align: center;"> SL MUA</th>
                                  <th width=80px style="text-align: center;"> TỔNG TIỀN </th>
                                  <th width=60px style="text-align: center;"> NGÀY ĐẶT HÀNG</th>
                                </tr>
                              </thead>
                    <tbody>
          <?php 
          $sql="SELECT * from donhang  WHERE  trangThai='Đang giao'";
          $kq=executeResult($sql);
        $index=0;
          foreach($kq as $item){
            echo '<tr>
            <td>'.(++$index).'</td>
            <td style="text-align:center;">'.$item['idHd'].'</td>
            <td style="text-align:center;">'.$item['maKhachHang'].'</td>
            <td style="text-align:center;"> '.$item['tenHang'].'</td>
            <td style="text-align:center;"> '.$item['slMua'].'</td> 
            <td style="text-align:center;"> '.number_format($item['slMua']*$item['donGia']).' VND</td>
            <td> '.date("d/m/Y  H:i:s", strtotime($item['ngayDatHang'])).'</td>
            </tr> ';
          }
          ?>
            </tbody>
                  </table>
                  <div  class="notifyOrder" id="notify" style="position: absolute; left:45%; top:70%; ">
                      <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/5fafbb923393b712b96488590b8f781f.png" alt="không có đơn hàng" width="80px">
                      <p style="margin-left: -25px;">Chưa có đơn hàng !</p>
                    </div>
                  </div>
                  <div class="tabcontent" id="choXuLy"> 
                  <table class="table table-bordered" id="tableDangXuLy">
                            <thead>
                          <tr>
                                <th width=20px> STT</th>
                                <th width=60px  style="text-align: center;"> MÃ ĐƠN HÀNG</th>
                                <th width=150px style="text-align: center;"> MÃ KHÁCH HÀNG</th>
                                  <th width=200px style="text-align: center;"> TÊN SẢN PHẨM</th>
                                  <th width=60px style="text-align: center;"> SL MUA</th>
                                  <th width=80px style="text-align: center;"> TỔNG TIỀN </th>
                                  <th width=60px style="text-align: center;"> NGÀY ĐẶT HÀNG</th>
                                </tr>
                              </thead>
                    <tbody>
          <?php 
          $sql="SELECT * from donhang  WHERE  trangThai='Chờ Xử lý đơn'";
          $kq=executeResult($sql);
        $index=0;
          foreach($kq as $item){
            echo '<tr>
            <td>'.(++$index).'</td>
            <td style="text-align:center;">'.$item['idHd'].'</td>
            <td style="text-align:center;">'.$item['maKhachHang'].'</td>
            <td style="text-align:center;"> '.$item['tenHang'].'</td>
            <td style="text-align:center;"> '.$item['slMua'].'</td> 
            <td style="text-align:center;"> '.number_format($item['slMua']*$item['donGia']).' VND</td>
            <td> '.date("d/m/Y  H:i:s", strtotime($item['ngayDatHang'])).'</td>
            </tr> ';
          }
          ?>
                      </tbody>
                  </table>
                  <div  class="notifyOrder" id="notify1" style="position: absolute; left:45%; top:70%; ">
                      <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/5fafbb923393b712b96488590b8f781f.png" alt="không có đơn hàng" width="80px">
                      <p style="margin-left: -25px;">Chưa có đơn hàng !</p>
                    </div>
             </div>
                </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</div>
</body>
<script src="thongke.js"></script>
<script>
  var hangDangGiao =document.getElementById('hangDangGiao').value;
  var hangDangChoXuLy =document.getElementById('hangDangChoXuLy').value;
  var hangDaBan =document.getElementById('hangDaBan').value;
 
  if( parseInt(hangDangGiao)==0){
   document.getElementById('notify').style.display = 'block';
    document.getElementById('tableDangGiao').style.display='none';
  }
  if( parseInt(hangDangChoXuLy)==0){
   document.getElementById('notify1').style.display = 'block';
    document.getElementById('tableDangXuLy').style.display='none';
  }
</script>
</html>