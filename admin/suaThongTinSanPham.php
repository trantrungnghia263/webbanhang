<?php
          require_once('../mySql_general/function_helper.php');
          date_default_timezone_set('Asia/Ho_Chi_Minh');//format datetime vn
          //get id from quanlysanpham.php
          if(isset($_GET)){
            $id=$_GET['id'];
            $result=get_memberProduct($id);
          }

          if(!empty($_POST)){
            $productName=$category=$price=$quantity=$thumbnail=$content='';
            if(isset($_POST['btnsave']))
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
              $quantity=str_replace('"','\\"',$quantity);
            }
            if(isset($_POST['thumbnail'])){
              $thumbnail=$_POST['thumbnail'];
              $thumbnail=str_replace('"','\\"',$thumbnail);
            }
            if(isset($_POST['content'])){
              $content=$_POST['content'];
              $content=str_replace('"','\\"',$content);
            }
            
          }
         
          $ngayTao=$ngayUpdate= date('Y-m-d H:i:s');
          $sql= "UPDATE sanpham SET tenHang='$productName', maNhom='$category', moTa= '$content' , hinhAnh='$thumbnail',donGia='$price', soLuong='$quantity',ngayTao='$ngayTao',ngayUpdate='$ngayUpdate'  where id= $id ";
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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

     <link rel="stylesheet" href="header.css">

    <title>Trang Sửa Thông Tin Sản Phẩm</title>
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
                <li id="">
                  <a href="quanLyThongTinKhachHang.php">
                    <i class="zmdi zmdi-link"></i> Quản Lý Khách Hàng
    
                  </a>
                </li>
                <li id="">
                  <a href="addProduct.php">
                    <i class="zmdi zmdi-widgets"></i> Thêm Sản Phẩm
                  </a>
                </li>
                <li>
                  <a href="quanLySanPham.php">
                    <i class="zmdi zmdi-calendar"></i>Quản Lý Sản Phẩm
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
                  <a href="donHang.php">
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
                  <div id="#">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center"> SỬA THÔNG TIN SẢN PHẨM </h2>
                        </div>
                        <div class="panel-body">
                          <div class="form-group">
                            <form action="" method="POST"> 
                          <label for="productName">Tên Sản Phẩm</label>
                          <input required="true" type="text" class="form-control" name="productName"  value="<?=$result['tenHang']  ?>">
                          </div>
                          <div class="form-group">
                          <label for="category">Danh Mục</label>
                         <select  class="form-control"   name="category" id="id_danhMuc">
                         <option >---Lựa chọn danh mục cho sản phẩm---</option>
                         <?php
                           $sql="select * from nhomHang";
                           $kq=executeResult($sql);
                           foreach($kq as $item){
                             if($item['maNhom'] == $result['maNhom'])
                             {

                              echo '<option selected value="'.$item['maNhom'].'"> '.$item['tenNhom'].' </option> ';
                             }
                             else {
                              echo '<option  value="'.$item['maNhom'].'"> '.$item['tenNhom'].' </option> ';
                               
                             
                           }
                          }
                          
                           ?> 
                         </select>
                          </div>
                        
                          <div class="form-group">
                              <label for="dongia">Đơn Giá</label>
                              <input required="true" type="text" class="form-control" name="price" value="<?php  echo  number_format($result['donGia']); ?>" >
                          </div>
                          <div class="form-group">
                              <label for="soluong">Số Lượng</label>
                              <input required="true" type="number" class="form-control"  min="1" name="quantity"  value="<?php  echo $result['soLuong'] ?>">
                          </div>
                          <div class="form-group">
                              <label for="thumbnail"> Hình Ảnh</label>
                              <input required="true" type="text" class="form-control" id="thumbnail" name="thumbnail" onchange="upadateImage()" value="<?php  echo $result['hinhAnh'] ?>"  >
                              <img src="<?php  echo $result['hinhAnh'] ?>" style="max-width: 200px;" id="img_thumbnail">
                          </div>
                          <div class="form-group">
                              <label for="content"> Nội dung</label>
                              <textarea name="content" id="content"  rows="10" > <?php echo $result['moTa']  ?></textarea>
                          </div>

                          <button type="submit" class="btn btn-success" name="btnsave" style="border: 1px solid #111; width: 150px;" >SAVE</button>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</div>
<script>
  function upadateImage(){
    $('#img_thumbnail').attr('src',$('#thumbnail').val())
  }
 
</script>
</body>

</html>