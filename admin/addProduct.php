<?php
require_once("../mySql_general/function_helper.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');//lấy thời gian của việt nam
      if(!empty($_POST)){
        $productName=$category=$price=$sale=$quantity=$thumbnail=$content='';
        if(isset($_POST['addProduct']))
        {
        if(isset($_POST['productName'])){
          $productName=$_POST['productName'];
          $productName=str_replace('"','\\"',$productName);
        }
        if(isset($_POST['category'])){
          $category=$_POST['category'];
          $productName=str_replace('"','\\"',$productName);
        }
        if(isset($_POST['price'])){
          $price=$_POST['price'];
          $category=str_replace('"','\\"',$category);
        }
        if(isset($_POST['quantity'])){
          $quantity=$_POST['quantity'];
        }
        if(isset($_POST['thumbnail'])){
          $thumbnail=$_POST['thumbnail'];
          $thumbnail=str_replace('"','\\"',$thumbnail);
        }
        if(isset($_POST['content'])){
          $content=$_POST['content'];
          $content=str_replace('"','\\"',$content);
        }
        //them phan khuyen mai
        if(isset($_POST['sale'])){
          $sale=$_POST['sale'];
          $sale=str_replace('"','\\"',$sale);
        }
      }
  
      $ngayTao=$ngayUpdate= date('Y-m-d H:i:s');
      $sql= "insert into sanpham(tenHang, moTa,maNhom,hinhAnh,donGia,giaKhuyenMai,soLuong,ngayTao,ngayUpdate) value('$productName','$content','$category','$thumbnail','$price','$sale','$quantity','$ngayTao','$ngayUpdate')";
          execute($sql);
         header("location: quanLySanPham.php");
    
    }
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
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <link rel="stylesheet" href="trangchuAdmin.css">
    <title>Trang quản lý của ADMIN</title>
   
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
                  <a href="trangchuAdmin.php" > Thêm Khách Hàng
                   
                  </a>
                </li>
                <li id="quanlykhachhang1">
                  <a href="quanLyThongTinKhachHang.php">
                    <i class="zmdi zmdi-link"></i>Quản Lý Khách Hàng
                  </a>
                </li>
                <li id="" style="background-color:rgba(63, 67, 73, 0.897);">
                  <a href="addProduct.php">
                    <i class="zmdi zmdi-widgets"></i> Thêm Sản Phẩm
                  </a>
                </li>
                <li>
                  <a href="quanLySanPham.php">
                    <i class="zmdi zmdi-calendar"></i> Quản Lý Sản Phẩm
                  </a>
                </li>
                <li>
                  <a href="themDanhMuc.php">
                    <i class="zmdi zmdi-info-outline"></i> Thêm Danh Mục
                  </a>
                </li>
                <li>
                  <a href="quanLyDanhMuc.php">
                    <i class="zmdi zmdi-settings"></i> Quản Lý Danh Mục
                  </a>
                </li>
                <li>
                  <a href="quanLyHoTroKhachHang.php">
                    <i class="zmdi zmdi-settings"></i> Quản Lý HTKH
                  </a>
                </li>
                <li>
                  <a href="../admin/donHang.php">
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
                  <div> 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center">THÊM SẢN PHẨM MỚI </h2>
                        </div>
                    
                        <div class="panel-body">
                        <form action="" method="POST">
            <div class="row">
              <div class="col-md-9">
    
                <div class="form-group">
                          <label for="tenSanPham">Tên Sản Phẩm</label>
                          <input required="true" type="text" class="form-control" id="hoten" name="productName" placeholder="Tên sản phẩm" >
                    </div> 
                <div class="form-group">
                              <label for="tenNhom">Mô Tả</label>
                             <textarea required="true" name="content" class="form-control" id="content" cols="30" rows="10" placeholder=" Mô tả sản Phẩm"></textarea>
                          </div>  
                          <a href="quanLySanPham.php"> <button  type="submit" class="btn btn-success" name="addProduct" id="addProduct" style="width: 250px; margin-left: 300px;" > ADD PRODUCT </button></a>

              </div><!-- close div md-9 -->
              <div class="col-md-3" style="border: 1px solid green; padding-top: 10px; padding-bottom: 10px;">
              <div class="form-group">
                              <label for="tenNhom">Hình Ảnh</label>
                              <input required="true" type="text" class="form-control" id="thumbnail" name="thumbnail"   onchange="upadateImage()" placeholder="Link hình ảnh">
                              <img src="<?php  $thumbnail ?>" alt="" style="max-width: 160px;" id="img_thumbnail">
                          </div>
                          <div class="form-group">
                          <label for="danhMuc"> Danh Mục</label>
                          <select  class="form-control"   name="category" id="category">
                         <option > <---Thuộc danh mục---> </option>
                         <?php
                           $sql="select * from nhomHang";
                           $kq=executeResult($sql);
                           foreach($kq as $item){
                              echo '<option  value="'.$item['maNhom'].'"> '.$item['tenNhom'].' </option> ';
                          }
                          
                           ?> 
                         </select>
                          </div>
                          <div class="form-group">
                              <label for="tenNhom">Giá Bán</label>
                              <input required="true" type="number" class="form-control" id="diachi" name="price"   placeholder="Giá Bán">
                          </div>
                          <!-- them khuyen mai -->
                          <div class="form-group">
                              <label for="tenNhom">Khuyến Mãi</label>
                              <input required="true" type="number" class="form-control" id="diachi" name="sale"   placeholder="Khuyến Mãi">
                          </div>
                          <div class="form-group">
                              <label for="tenNhom">Số Lượng</label>
                              <input required="true" type="number" class="form-control" id="diachi" name="quantity" min="1"  placeholder="Số Lượng">
                          </div>
              </div><!-- close div md-3 -->
            </div>
            </form>              
                      </div>
                    </div>
                  </div>
                

                </div>

            </div>
           
          </div>
    </div>
    
</body>
<script>
     function upadateImage(){
    $('#img_thumbnail').attr('src',$('#thumbnail').val())
  }
 
    </script>
</html>