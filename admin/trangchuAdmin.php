<?php
require_once("../mySql_general/function_helper.php");
if(!empty($_POST)){
  if(isset($_POST['btn']))
  {
    if(isset($_POST['userName']))
    {
      $userName=$_POST['userName'];
    }
    if(isset($_POST['birthday']))
    {
      $birthday=$_POST['birthday'];
    }  
    if(isset($_POST['passWord']))
    {
      $passWord=$_POST['passWord'];
    }
    if(isset($_POST['phoneNumber']))
    {
      $phoneNumber=$_POST['phoneNumber'];
    }
    if(isset($_POST['email']))
    {
      $email=$_POST['email'];
    }
    if(isset($_POST['address']))
    {
      $address=$_POST['address'];
    }

    //test
  //   if(isset($_POST['userName'])){
  //     $userName=$_POST['userName'];
  //   }
  //   if(isset($_POST['birthday'])){
  //     $birthday=$_POST['birthday'];
  //   }
  // if(isset($_POST['password'])){
  //   $password=$_POST['password'];
  //   }
  //   if(isset($_POST['phoneNumber'])){
  //       $phoneNumber=$_POST['phoneNumber'];
  //   }
  //   if(isset($_POST['address'])){
  //     $address=$_POST['address'];
  //   }
    var_dump($_POST);
    die();
    $sql="insert into khachhang(userName,passWord,phoneNumber,birthday,email,address) value('$userName','$passWord','$phoneNumber','$birthday','$email','$address')";
    execute($sql);
    // $sql="insert into khachang(userName,passWord,phoneNumber,birthday,address) value('$userName','$passWord','$phoneNumber','$birthday','$address')";
    // execute($sql);
    // $sql=" insert into khachhang(userName,passWord,phoneNumber,birthday,address,ngayTao,ngayUpdate) values ('$userName','$password','$phoneNumber','$birthday','$address','$ngayTao','$ngayUpdate')";
    //     execute($sql);
    header("location: quanLyThongTinKhachHang.php");
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
            <?php include '../admin/sidebar.php' ?>
            <!-- Content -->
            <div id="content">
                <div class="title">
                    <h2>TRANG QUẢN TRỊ ADMIN</h2>
                  <a href="../main/main.php"> <P>VỀ TRANG CHỦ </P></a> 
                </div>

                <div class="noi_dung_main">
                  <div id="nhapkhachhangmoi"> 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center">NHẬP KHÁCH HÀNG MỚI</h2>
                        </div>
                        <div class="panel-body">
                         <div class="form-group">
                            <form action="" method="POST">
                          <label for="userName">Họ và tên</label>
                          <input required="true" type="text" class="form-control" id="userName" name="userName" placeholder=" Input Fullname" >
                          </div>   
                          <div class="form-group">
                          <label for="birthday">Ngày Sinh</label>
                          <input required="true" type="date" class="form-control" id="birthday" name="birthday">
                          </div> 
                          <div class="form-group">
                          <label for="passWord">Mật Khẩu</label>
                          <input required="true" type="password" class="form-control" id="tuoi" name="passWord"  placeholder=" Input Password">
                          </div>
                          <div class="form-group">
                          <label for="phoneNumber"> Số Điện Thoại</label>
                          <input required="true" type="text" class="form-control" id="phoneNumber" name="phoneNumber"  placeholder="Input Phonenumber">
                          </div>  
                          <div class="form-group">
                          <label for="email">Email</label>
                          <input required="true" type="text" class="form-control" id="email" name="email"  placeholder="Input Email">
                          </div>
                          <div class="form-group">
                              <label for="address">Địa Chỉ</label>
                              <input required="true" type="text" class="form-control" id="diachi" name="address"  placeholder="input Address">
                          </div>
                         <a href="quanLyThongTinKhachHang.php"> <button  type="submit" class="btn btn-success" name="btn" id="themkhachhang" >Thêm khách hàng </button></a>
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