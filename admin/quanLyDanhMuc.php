
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
    <title>Trang  Quản Lý Thông Tin Khách Hàng</title>
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
                <li style="background-color:rgba(63, 67, 73, 0.897);">
                  <a href="quanLyDanhMuc.php" style="color: #f5f5f5;">
                    <i class="zmdi zmdi-settings"></i>Quản Lý Danh Mục
                  </a>
                </li>
                <li>
                  <a href="quanLyHoTroKhachHang.php">
                    <i class="zmdi zmdi-settings"></i> Quản Lý Yêu Cầu Phản Hồi
                  </a>
                </li>
                <li>
                  <a href="donHang.php">
                    <i class="zmdi zmdi-comment-more"></i> Quản Lý Đơn Hàng
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
                  <div id="nhapkhachhangmoi"> <!--  nhập  khach hàng mới -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center"> QUẢN LÝ DANH MỤC SẢN PHẨM </h2>
                        </div>
                        <div class="panel-body">
                          <table class=" table table-bordered">
                            <thead>
                          <tr>
                                <th width=60px> STT</th>
                                <th  style="text-align: center;"> TÊN NHÓM</th>
                                <th width=200px style="text-align: center;"> Ngày Cập Nhật</th>
                                  <th width=60px style="text-align: center;"> EDIT</th>
                                  <th width=60px style="text-align: center;"> DELETE</th>

                                </tr>
                              </thead>
                                          <tbody>
                                          <?php
                      $sql= 'select * from nhomhang';
                      $category=executeResult($sql);
                      $index=0;
                      foreach($category as $item){
                        echo '<tr>
                                <td>'.(++$index).'</td>
                                <td style="text-align:center;"> '.$item['tenNhom'].'</td>
                                <td> '.date("d/m/Y  H:i:s", strtotime($item['ngayUpdate'])).'</td>
                                <td>  <a href="suaThongTinDanhMuc.php?maNhom='.$item['maNhom'].'"> <button class="btn btn-warning"  id="edit" >  Edit</button> </a></td>
                                <td>  <button class="btn btn-danger id="delete"  onclick="deleteCategory('.$item['maNhom'].')" > Delete</button></td>
                              </tr> ';

                      }
                      ?>
                
                              </tbody>
                            </table>
                          <a href="themDanhMuc.php"> <button class="btn btn-success" id="addkhach" >ADD DANH MỤC </button></a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</div>
    <script>
        function deleteCategory(maNhom){
            var options= confirm("Bạn có chắc chắn muốn xóa danh mục này không??");
            if(!options)
                return;
            else

            $.post('deleteCategory.php',
            {
                'maNhom':maNhom
            },
            function(data){
                location.reload();
            })
        }
    </script>
</body>
</html>