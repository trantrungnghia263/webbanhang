<?php
 require_once("../mySql_general/function_helper.php");
 require_once('../mySql_general/config_DB.php');
// const host="localhost";
// const username="root";
// const password="";
// const database="doanweb";

// $conn=  new mysqli(host, username, password, database);
mysqli_set_charset($conn,'utf8');
if(!empty($_POST)){
  if(isset($_POST['btnAdd']))
  {
    if(isset($_POST['category']))
    {
      $category=$_POST['category'];
    }

    $sql1=mysqli_query($conn,"select * from nhomhang where tenNhom='$category'");
    if($sql1){
       $data=mysqli_fetch_assoc($sql1);
    }
    if($data!=null){
      echo '
      <div class="alert alert-success alert-dismissible" style="width: 500px; margin: 0 auto; margin-top:20px;  position: absolute; left: 503px;    z-index: 1;" >
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>THÔNG BÁO!</strong> </br>Danh mục này đã có trong hệ thống vui lòng thêm danh mục khác.
          </div> ';
     
    }
    else
    {
      
      $sql="insert into nhomhang(tenNhom) value('$category')";
       execute($sql);
      header("location: quanLyDanhMuc.php");

    }

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
                <li  id="nhapdanhmuc" >
                  <a href="trangchuAdmin.php">  Thêm Khách hàng
                   
                  </a>
                </li>
                <li id="quanlykhachhang1">
                  <a href="quanLyThongTinKhachHang.php" style="padding-left: 10px;">
                    <i class="zmdi zmdi-link"></i> Quản Lý Khách Hàng
                  </a>
                </li>
                <li id="">
                  <a href="addProduct.php">
                    <i class="zmdi zmdi-widgets"></i>  Nhập Sản Phẩm
                  </a>
                </li>
                <li>
                  <a href="quanLySanPham.php">
                    <i class="zmdi zmdi-calendar"></i> Quản Lý Sản Phẩm
                  </a>
                </li>
                <li  style="background-color:rgba(63, 67, 73, 0.897);">
                  <a href="themDanhMuc.php" style="color: #f5f5f5;">
                    <i class="zmdi zmdi-info-outline"></i> Thêm  Danh Mục
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
                  <div id=""> 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center">Thêm Danh Mục </h2>
                        </div>
                        <div class="panel-body">
                          <div class="form-group">
                            <form action="" method="POST" name="addCategory" >
                          <label for="maNhom">Tên Danh Mục</label>
                          <input required="true" type="text" class="form-control" id="category" name="category" >
                          </div>   
                         <a href="quanLyDanhMuc.php"> <button  type="submit" class="btn btn-success" name="btnAdd"  > ADD Danh Mục </button></a>
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
  var record= <?php echo json_encode($row)?>
  alert("hello"+record)
</script>


</html>