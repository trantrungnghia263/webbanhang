
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
    <title>Trang Quản Lý Đơn hàng </title>
</head>
<style>
  /* css cho button xử lý đơn hàng */
  .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 10px;
  font-size: 14px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
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
                <li>
                  <a href="quanLyHoTroKhachHang.php">
                    <i class="zmdi zmdi-settings"></i> Quản Lý HTKH
                  </a>
                </li>
                <li>
                  <a href="thongKe.php">
                    <i class="zmdi zmdi-comment-more"></i> Thống Kê
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
                  <div id=""> <!--  nhập  khach hàng mới -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center"> QUẢN LÝ ĐƠN HÀNG </h2>
                        </div>
                        <div class="panel-body">
                          <table class=" table table-bordered">
                            <thead>
                          <tr>
                                <th width=20px> STT</th>
                                <th width=60px  style="text-align: center;"> MÃ ĐƠN HÀNG</th>
                                <th width=150px style="text-align: center;"> TÊN KHÁCH HÀNG</th>
                                  <th width=200px style="text-align: center;"> SẢN PHẨM MUA </th>
                                  <th width=60px style="text-align: center;"> NGÀY ĐẶT HÀNG</th>
                                  <th width=60px style="text-align: center;"> CHI TIẾT ĐƠN HÀNG</th>
                                  <th width=80px style="text-align: center;"> XL ĐƠN </th>
                                  <th width=60px style="text-align: center;"> XÓA ĐƠN</th>

                                </tr>
                              </thead>
                                          <tbody>
                   <?php
                      $sql= 'select hoadon.maHd,hoadon.userName, donhang.tenHang tenHang ,donhang.ngayDatHang  ngayDat,donhang.trangThai from hoadon, donhang where hoadon.maHd=donhang.idHd group by donhang.idHd ';
                      $order=executeResult($sql);
                      $index=0;
               ?>
                      <!--  foreach -->
                      <?php 
                       foreach($order as $item):
                      ?>
                      <tr>
                                <td><?php  echo ++$index ?></td>
                                <td style="text-align:center;"> <?php echo $item['maHd']?></td>
                                <td style="text-align:center;"> <?php  echo $item['userName']?></td>
                                <td style="text-align:center;"><?php  echo $item['tenHang']?></td>  
                                <td>  <?php  echo date("d/m/Y  H:i:s", strtotime($item['ngayDat'])) ?> </td>
                                <td style="text-align:center;" >  <a href="chiTietDonHang.php?maHd= <?php  echo $item['maHd']?>"> <button class="btn btn-warning"  id="edit" >  CHI TIẾT </button> </a></td>
                                <?php  
                                if($item['trangThai']=="Đang giao" ||$item['trangThai']=="Đã lấy hàng")
                                 echo '<td style="  color:red; "> Đã xl đơn </td>';
                                 else 
                                 echo ' <td>  
                                 <div class="dropdown">
                                 <button  id ="dropdown" onclick="myFunction()" class="dropbtn" >XL ĐƠN</button>
                                 <div id="myDropdown" class="dropdown-content">
                                   <button onclick="XacNhanDonHang('.$item['maHd'].')">Xác nhận đơn hàng </button>
                                 </div>
                               </div></td>';
                                ?>
                                <td style="text-align:center;" >  <button class="btn btn-danger" id="delete"  onclick="deleteOrder( <?php  echo $item['maHd'] ?>)" > Delete</button></td>
                              </tr>
                        <?php endforeach ;
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
    <script>
        function deleteOrder(maHd){
            var options= confirm("Bạn có chắc chắn muốn xóa đơn hàng này không ??");
            if(!options)
                return;
            else
            {
            $.post('deleteDonHang.php',
            {
                'maHd':maHd
            },
            function(data){
                location.reload();
            })
            }
        }
        function XacNhanDonHang(maHd){
          var result = document.getElementById("dropdown")
          result.innerHTML='Đã xl đơn';
            $.post('xacNhanDonHang.php',
            {
                'maHd':maHd
            },
            function(data){
                location.reload();
            })
            }
    </script>
<script src="xuLyDon.js"></script>
</body>
</html>