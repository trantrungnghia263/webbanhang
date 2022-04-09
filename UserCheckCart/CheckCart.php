<?php
session_start();
require_once('../mySql_general/function_helper.php');
require_once('../mySql_general/config_DB.php');
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
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../pageHeader/header.css">
    <title>CHECK CART FOR USER</title>
</head>
<style>
         #menu_main li a:hover{
    border-bottom: 4px solid rgb(235, 77, 77);
    transition: 0.25s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    width: 70%;
    color: #CD201F;
        }
        .text p#title {
    position: absolute;
    font-size: 30px;
    color: #111;
    top: 13px;
    text-shadow: 2px 2px 2px #cc0000;
    font-family: 'Open Sans', sans-serif;
    margin-left: 9px;
}
#cart img{
    position: absolute;
    right: -19px;
    top: -4px;
}
#content #check_don_hang a{
    margin-left: 5px;
    font-size: 21px;
        } 
         /* css cho button xử lý đơn hàng */
  .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 10px;
  font-size: 14px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  margin-left: 20px;
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
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
/* Links inside the dropdown */
.dropdown-content .btn{
    padding: 5px;
    margin-left: 20px;
}
.dropdown-content .btn:hover{
    color: red;
}
/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
<body>
 <?php include '../pageHeader/header.php';?>
<div class="panel-body"  style="margin-top: 200px;">
                        <form action="" method="get">
                            <div class="form-group" style="margin-left: 20px;">
                            <label for=""> <strong style="font-size: 23px;"> Kiểm tra đơn hàng </strong> </label>
                            <input type="text" name="checkDonHang" class="form-control"style="width: 300px; "placeholder="Nhập số điện thoại...">
                            </div>
                        </form>
                        <div id="wraper">
                        <table class=" table table-bordered table-hover">
                        <thead>
                          <tr>
                                <th width=20px> STT</th>
                                <th width=150px style="text-align: center;">MÃ HĐ</th>
                                <th width=150px style="text-align: center;"> TÊN KHÁCH HÀNG</th>
                                <th width=200px style="text-align: center;"> ĐỊA CHỈ</th>
                                <th width=200px style="text-align: center;"> SỐ ĐIỆN THOẠI</th>
                                <th width=200px style="text-align: center;"> SẢN PHẨM MUA </th>
                                <th width=30px style="text-align: center;"> SL</th>
                                <th width=40px style="text-align: center;"> GIÁ </th>
                                <th width=200px style="text-align: center;"> THÀNH TIỀN </th>
                                <th width=60px style="text-align: center;"> NGÀY ĐẶT HÀNG</th>
                                <th width=60px style="text-align: center;"> TRẠNG THÁI</th>
                          </tr>
                              </thead>
                              <tbody>
                              <?php
                            $phoneNumber='';
                            if(isset($_GET['checkDonHang']))
                            {
                                $phoneNumber=$_GET['checkDonHang'];
                                $sql=mysqli_query($conn,"select * from hoadon where  phoneNumber=$phoneNumber");
                            if($sql){
                                $data=mysqli_fetch_assoc($sql);
                            }
                            if(!empty($data)){
                                $maHd=$data['maHd'];
                            if(!empty($phoneNumber)){

                                // đang lỗi    
                                
                                $sql= "SELECT donhang.id,hoadon.maHd,hoadon.userName,hoadon.address, hoadon.phoneNumber, donhang.maHang maHang,donhang.slMua sl ,donhang.donGia gia ,  donhang.tenHang tenHang, donhang.ngayDatHang ngayDat,donhang.trangThai trangThai
                                
                                from hoadon,donhang where  hoadon.maHd=donhang.idHd and hoadon.phoneNumber=$phoneNumber  group by hoadon.maHd";
                                $kq=executeResult($sql);
                           if(!empty($kq)){
                                $mahoadon= $kq[0]['maHd'];
                                $trangthai=$kq[0]['trangThai'];
                             if($trangthai=="Đang giao"){
                                 echo '<div class="dropdown">
                                  <button  id ="dropdown" onclick="myFunction()" class="dropbtn" >Xác nhận bạn đã nhận được hàng</button>
                                  <div id="myDropdown" class="dropdown-content">
                                  <button  class="btn"onclick="xacNhanDonHang('.$mahoadon.')">Xác nhận </button>
                                  </div>
                               </div>';
                             }
                             if($trangthai=="Chờ Xử lý đơn" || $trangthai=="Đang giao"){
                                  echo '<button class="btn btn-outline-danger"  style="float: right; margin-right: 20px; margin-bottom: 20px;" onclick="deleteDonHang('.$mahoadon.')"> HỦY ĐƠN HÀNG</button>';
                             }
                             $sql1= "SELECT donhang.id,hoadon.userName,hoadon.address, hoadon.phoneNumber, donhang.maHang maHang,donhang.slMua sl ,donhang.donGia gia ,  donhang.tenHang tenHang, donhang.ngayDatHang ngayDat,donhang.trangThai trangThai  
                             from hoadon,donhang where hoadon.maHd=donhang.idHd and donhang.idHd=$mahoadon and hoadon.phoneNumber=$phoneNumber";
                            $kq2=executeResult($sql1);
                            $index=0;
                         foreach($kq2 as $item){
                              echo '<tr>
                              <td>'.(++$index).'</td>
                              <td style="text-align:center;">'.$item['id'].'</td>
                              <td style="text-align:center;">'.$item['userName'].'</td>
                              <td style="text-align:center;"> '.$item['address'].'</td>
                              <td style="text-align:center;"> '.$item['phoneNumber'].'</td>
                              <td style="text-align:center;"> '.$item['tenHang'].'</td> 
                              <td style="text-align:center;"> '.$item['sl'].'</td> 
                              <td style="text-align:center;"> '.number_format($item['gia']).'</td> 
                              <td style="text-align:center;"> '.number_format($item['sl']*$item['gia']).'</td>
                              <td> '.date("d/m/Y  H:i:s", strtotime($item['ngayDat'])).'</td>
                              <td style="text-align:center;"> '.$item['trangThai'].'</td>
                              </tr> ';
                          }
                      }   
                         else
                         {
                               echo '<a href="../main/main.php" style="font-size: 18px; position: relative; bottom: 7px; left: 25px;"> Đơn hàng đã giao thành công. Tiếp tục mua sắm nào !!!</a>';
                         }
                        }                    
                }             
                else
                      echo '<div class="alert alert-success alert-dismissible fade show" style="width: 500px; margin: 0 auto; margin-top:70px; position: absolute; left: 420px;  top:20px;  z-index: 10;" >
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>THÔNG BÁO!</strong> </br>Bạn Không có đơn hàng cho số điện thoại này vui lòng kiểm tra lại.
                    </div>';                            
          }                          
                    ?>
                  </tbody>
                    </table>
                    </div>
           </body>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"> </script>
<script>
function deleteDonHang(maHd){
    var option= confirm("Bạn có chắc chắn muốn xóa đơn hàng này không ?? ")
    if(!option)
    return;
    else
    $.post('../admin/deleteDonHang.php',{
        'maHd':maHd
    },function(data){
        location.reload();
    })
}
//thử nghiệm "mahoadon"
function xacNhanDonHang(mahoadon){
    $.post('../admin/xacNhanDonHang.php',{
        'maHd':mahoadon
    },function(data){
    location.reload();
    })
}
// function xacNhanDonHang(maHd){
//     $.post('../admin/xacNhanDonHang.php',{
//         'maHd':maHd
//     },function(data){
//     location.reload();
//     })
// }
</script>
<script src="../admin/xuLyDon.js"></script>
</html>