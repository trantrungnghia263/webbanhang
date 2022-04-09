<?php
   session_start();
   require_once('../mySql_general/function_helper.php');
  //  include '../pageHeader/header.php';
    if(isset($_SESSION['cart'])){
      $cart=$_SESSION['cart'];
    }
    else{
      $cart=[];
    }
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
</head>
<?php
session_start();
include '../pageHeader/header.php';
?>
<style>
 body{
    background-image: url('https://minhhaisport.vn/wp-content/themes/metro/assets/img/banner.jpg');
    background-repeat: repeat-y;
    height: 1000px;
}
#head{
  margin-top: 120px;
}
.menu_icon #slsp span{
    color: white;
    font-size: 16px;
}
input{
  overflow: visible;
      width: 68px;
}
.notifyCart{
  position: absolute;
  top: 300px;
  left: 560px;

}
.notifyCart p{
  font-size: 22px;
}
.menu_icon #account {
    position: absolute;
    right: 138px;
    top: 20px;
    font-size: 20px;
    cursor: pointer;
}
</style>
<body>
  <div class="container">
  <?php
$total=0;
foreach($cart as $item){
    $total+=$item['num'];
}
?> 
  <input type="hidden" name="slgiohang" id="slgiohang" value="<?php echo $total?>">
  <div id="giohang">
  <div id="head" class="panel panel-primary" >
                        <div class="panel panel-info">
                            <h2 class="text-center"> GIỎ HÀNG CỦA BẠN </h2>
                        </div>
                        <div class="panel-body">
                          <table class=" table table-bordered  table-striped">
                            <thead >
                          <tr>
                                <th> STT</th>
                                <th width=150px style="text-align: center;"> HÌNH ẢNH</th>
                                <th style="text-align: center;"> Sản Phẩm</th>
                                  <th style="text-align: center;"> Số Lượng</th>
                                  <th style="text-align: center;"> Đơn Giá</th>
                                  <th style="text-align: center; width: 130px;">Thành Tiền</th>
                                  <th style="text-align: center; width:60px;">UPDATE</th>
                                  <th width=60px style="text-align: center;">DELETE</th>
                                </tr>
                              </thead>
                                          <tbody>
                                            <?php 
                                            if(isset($_SESSION['cart'])){
                                              $cart=$_SESSION['cart'];
                                            }
                                            $stt=0;
                                            foreach($cart as $item): ?>
                                            <form action="cart.php" method="POST">
                                              <tr>
                                              <td> <?php  echo ++$stt?></td>
                                              <td><img src="<?php echo $item['hinhAnh']?>" alt="" width=100px> </td> 
                                              <td style="text-align: center;"><?php echo $item['tenHang'] ?> </td>
                                              <td style="text-align: center;"><input type="number" name="quantity" id="quantity" value="<?php print_r( $item['num'])?>" min="1"  max="<?php echo $item['sltk'] ?>" > </td>                                       
                                              <td style="text-align: center;"><?php echo number_format($item['gia']) ?> VNĐ</td>
                                              <td style="text-align: center;"> <?php echo   number_format($item['gia']*$item['num']) ?> VNĐ</td>
                                              <input type="hidden" name="id" id="id" value="<?php echo $item['id']?>">
                                               <td><button class= "btn btn-warning" name="action" value="update"> UPDATE</button> </td>
                                              </form>
                                              <td><button type="button" class= "btn btn-danger" onclick="deleteData(<?php  echo $item['id']?>)" > DELETE</button> </td>
                                            </tr>
                              </tbody>
                              <?php endforeach ;
                              ?>
                              <?php
                              $tongtien=0;
                              foreach($cart as $item){
                                $tongtien+=   $item['gia']*$item['num'] ;
                              }
                              ?>
                              <tr>
                                <td style="width: 120px; font-weight: 600; font-size: 18px; color: red;">Tổng Tiền :</td>
                                <td colspan="12" class="text-center" style="background-color: rgba(0,0,0,0.6); color: #fff; font-size: 22px;"><?php echo  number_format($tongtien) ?> VNĐ</td>
                              </tr>
                            </table>
                            <a href="../thanhtoan/thanhToanDonHangTrongCart.php">
                              <button class="btn btn-success" style="width: 100%; margin-top: 30px; padding-top: 10px; padding-bottom: 10px;"> THANH TOÁN ĐƠN HÀNG </button>
                            </a>
                      </div>
                    </div>
               </div>
                    <div  class="notifyCart" id="notify">
                      <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/5fafbb923393b712b96488590b8f781f.png" alt="không có đơn hàng" width="180px">
                      <p>Chưa có sản phẩm !</p>
                    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"></script>
<script>
  function deleteData(id){
    var choose= confirm(" Bạn có muốn xóa sản phẩm này khỏi giỏ hàng không ??!!!");
    if(!choose){
      return
    }
    else
    {
      $.post('Cart.php',{
      'action':'delete',
      'id':id
     
    },function(data){
      location.reload();
    })
    }
  }
    var slgiohang=document.getElementById('slgiohang').value;
    // document.getElementById('notify').style.display = "none"
    // document.getElementById('giohang').style.display = "none"
    
    if( parseInt(slgiohang)==0){
      document.getElementById('giohang').style.display = "none";
      document.getElementById('notify').style.display = "block";
    }
    else{
      document.getElementById('giohang').style.display = "block";
      document.getElementById('notify').style.display = "none";
    }
</script>
</html>