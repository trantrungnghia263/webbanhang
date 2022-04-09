<?php
session_start();
require_once('../mySql_general/function_helper.php');
include '../pageHeader/header.php';
// require_once('formDataCheckout.php');

if (isset($_SESSION['cart'])) {
  $cart = $_SESSION['cart'];
} else {
  $cart = [];
}
// $user=(isset($_SESSION['user']))?$_SESSION['user']:"";



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" href="../pageHeader/header.css">

  <title>Giỏ Hàng Của Bạn</title>

  <script type="text/javascript">
    function Redirect() {
      window.location = "../main.main.php";
    }
    document.getElementById('dialog').style.display = 'block';
    setTimeout('Redirect()', 20000);
  </script>
</head>
<style>
  body {
    height: 1000px;
  }

  #head {
    margin-top: 120px;
  }

  .menu_icon #slsp span {
    color: white;
    font-size: 16px;
  }

  input {
    overflow: visible;
    width: 68px;

  }

  #dialog {
    position: absolute;
    top: 300px;
    left: 500px;
    width: 320px;
    height: 130px;
    border-radius: 2px;
    background-color: rgba(0, 0, 0, 0.7);
    display: none;
  }

  #dialog i {
    position: absolute;
    top: 20px;
    left: 132px;
    font-size: 40px;
    color: aqua;


  }

  #dialog p {
    position: absolute;
    top: 69px;
    left: 55px;
    color: #fff;
  }

  */
</style>

<body>
  <form action="formDataCheckout.php" method="POST">
    <div class="container">
      <div class="row">

        <div class="col-md-5 " style="margin-top: 120px;">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="text-center">NHẬP THÔNG TIN </h2>
            </div>
            <div class="panel-body">
              <div class="form-group">

                <label for="userName">Họ và tên Người Nhận <font color="red" ;>*</font></label>
                <input required="true" type="text" class="form-control" id="userName" name="userName" placeholder=" Input Fullname">
              </div>

              <div class="form-group">
                <label for="phoneNumber"> Số Điện Thoại <font color="red" ;>*</font></label>
                <input required="true" type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Input Phonenumber">
              </div>
              <div class="form-group">
                <label for="address">Địa Chỉ <font color="red" ;>*</font></label>
                <input required="true" type="text" class="form-control" id="diachi" name="address" placeholder="input Address">
              </div>
              <div class="form_group" style="border: 1px solid rgba(0,0,0,0.4); padding: 10px;">
                <p> Phương Thức Thanh Toán</p>
                <input type="radio" name="radio" id="" checked="true" value="thanh toán khi nhận hàng"> <span> Thanh toán khi nhận hàng </span>
                </br>
                <input type="radio" name="radio" id="" value="thanh toán bằng thẻ"> <span> Thanh toán bằng thẻ card </span>

              </div>
              <!-- <a href="quanLyThongTinKhachHang.php"> <button style="width: 100%; margin-top: 30px;" type="submit" class="btn btn-success" name="btnDatHang" id="dathang" >ĐẶT HÀNG </button></a> -->

            </div>
          </div>
        </div>
        <div id="head" class="col-md-7">
          <div class="panel panel-info">
            <h2 class="text-center">SẢN PHẨM</h2>
          </div>
          <div class="panel-body">
            <table class=" table table-bordered  table-striped">
              <thead>
                <tr>
                  <th style="text-align: center;"> STT</th>
                  <th style="text-align: center;"> HÌNH ẢNH</th>
                  <th style="text-align: center; width: 100px;"> Sản Phẩm</th>
                  <th style="text-align: center;"> SL</th>
                  <!-- <th style="text-align: center;"> SIZE</th> -->
                  <th style="text-align: center;">Giá</th>
                  <th style="text-align: center; width: 130px;">Thành Tiền</th>


                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($_SESSION['cart'])) {
                  $cart = $_SESSION['cart'];
                }
                $stt = 0;
                foreach ($cart as $item) {
                  echo '  <tr>
                                                <td > ' . (++$stt) . '</td>
                                                <td><img src="' . $item['hinhAnh'] . '" alt="" width=100px> </td> 
                                                <td style="text-align: center; width: 250px;">' . $item['tenHang'] . ' </td>
                                                <td style="text-align: center;">' . $item['num'] . '  </td>
                                                <td style="text-align: center;">' . number_format($item['gia']) . ' VNĐ</td>
                                                <td style="text-align: center;"> ' .  number_format($item['gia'] * $item['num']) . ' VNĐ</td>
                                              </tr>';
                }

                ?>
              </tbody>


              <?php
              $tongtien = 0;
              foreach ($cart as $item) {
                $tongtien +=   $item['gia'] * $item['num'];
              }
              ?>
              <tr>
                <td colspan="" style="width: 120px; font-size: 14px; color:red;">Tổng Tiền</td>
                <td colspan="10" class="text-center" style="background-color: rgba(0,0,0,0.6); color: #fff; font-size: 22px;"><?php echo  number_format($tongtien) ?> VNĐ</td>
              </tr>

            </table>

            <button class="btn btn-success" style="width: 100%; margin-top: 30px; padding-top: 10px; padding-bottom: 10px;"> ĐẶT HÀNG </button>





          </div>
        </div>

      </div>
    </div>
  </form>

  <div id="dialog">
    <i class="fal fa-check-circle"></i>
    <p>ĐẶT HÀNG THÀNH CÔNG !! </p>
  </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../pageHeader/header.js"></script>



</html>