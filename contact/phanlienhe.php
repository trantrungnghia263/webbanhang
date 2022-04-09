<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>LIÊN HỆ</title>
</head>
<body>
<?php
session_start();
  require_once('../mySql_general/function_helper.php');
if(!empty($_POST)){
  if(isset($_POST['btn']))
  {
    if(isset($_POST['hoten']))
    {
      $hoten=$_POST['hoten'];
    }
    if(isset($_POST['email']))
    {
      $email=$_POST['email'];
    }  
    if(isset($_POST['phone']))
    {
      $phone=$_POST['phone'];
    }
    if(isset($_POST['noidung']))
    {
      $noidungr=$_POST['noidung'];
    }
    var_dump($_POST);
    die();
    $sql="insert into lienhe(hoten,email,phone,noidung) value('$hoten','$email','$phone','$noidung')";
    execute($sql);
    header("location: quanLyThongTinKhachHang.php");
  }
}

?>

    <div class="contact">
    <form method="$_POST" action="">
<div class="form-group">
    <label for="exampleInputPassword1">Họ và tên</label>
    <input type="name" class="form-control"placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Số điện thoại</label>
    <input type="phone" class="form-control" placeholder="Phone">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nội dung</label>
    <textarea name="Noidung" id="Noidung" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">GỬI LIÊN HỆ</button>
</form>
    </div>
</body>
</html>