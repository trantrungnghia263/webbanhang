<?php
require_once('../mySql_general/function_helper.php');
  if(!empty($_GET))
    $maNhom=$_GET['maNhom'];
      $result=get_memberCategory($maNhom);
    if(!empty($_POST))
    {
    if(isset($_POST['btnsave'])){

      if(isset($_POST['category'])){
        $category=$_POST['category'];
      }
      $sql= "UPDATE nhomhang SET tenNhom='$category'  where maNhom= $maNhom ";
       execute($sql);
    //    $message = "cập nhật thành công !!";
    // echo "<script type='text/javascript'>alert('$message');</script>";
   header("location: quanLyDanhMuc.php");
    }
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
     <link rel="stylesheet" href="header.css">
    <title>Trang Sửa Thông Tin</title>
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
                  <a href="trangchuAdmin.php" >  Thêm Khách hàng 
                   
                  </a>
                </li>
                <li id="themsanpham1">
                  <a href="quanLyThongTinKhachHang.php">
                    <i class="zmdi zmdi-link"></i> Quản Lý Khách Hàng
    
                  </a>
                </li>
                <li id="editsp">
                  <a href="#">
                    <i class="zmdi zmdi-widgets"></i>  Thêm Sản Phẩm
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="zmdi zmdi-calendar"></i> Quản Lý sản Phẩm
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
                  <a href=""> <P>VỀ TRANG CHỦ </P></a> 
                </div>
                <div class="noi_dung_main">
                  <div id=""> 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center"> SỬA THÔNG TIN DANH MỤC </h2>
                        </div>
                        <div class="panel-body">
                          <div class="form-group">
                            <form action="" method="POST"> 
                          <label for="maNhom">Tên Danh Mục</label>
                          <input required="true" type="text" class="form-control" id="category" name="category" value="<?=$result['tenNhom']  ?>">
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
    
</body>
</html>