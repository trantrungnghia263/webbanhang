<?php
require_once('../mySql_general/function_helper.php');
require_once('../mySql_general/config_DB.php');
session_start();

date_default_timezone_set('Asia/Ho_Chi_Minh');

if(isset($_SESSION['cart'])){
    $cart=$_SESSION['cart'];
}


if(!empty($_POST)){
    $userName=$_POST['userName'];
    $phoneNumber=$_POST['phoneNumber'];
    $address=$_POST['address'];
    $pttt=$_POST['radio'];
    $order_date=date('Y-m-d H:i:s');
   
}
    $sql=mysqli_query($conn,"select * from khachhang where   phoneNumber='$phoneNumber'");
    if($sql){
        $data=mysqli_fetch_assoc($sql);
    }
   if($data!=null){
       $makh=$data['id'];
       $kieukhachhang=1;
     
   }else
   {
       $makh='null';
       $kieukhachhang=0;
   }

 

    $sql="insert into hoadon(ngayBan,maKh,userName,phoneNumber,address) value('$order_date','$makh','$userName','$phoneNumber','$address')";
    execute($sql);
  
    $sql1=mysqli_query($conn,"select * from hoadon where ngayBan='$order_date'");
    if($sql1){
        $data=mysqli_fetch_assoc($sql1);
        
    }
    if($data!=null){
        $order_id=$data['maHd'];

    }
    else
    {
        $order_id= null;
    }
  
  
    foreach($cart as $item){
        $mahang=$item['id'];
        $tenhang=$item['tenHang'];
        $dongia=$item['gia'];
        $slmua=$item['num'];
        $sql2="insert into donhang(idHd,maKhachHang,tenHang,maHang,donGia,slMua,pttt,ngayDatHang,trangThai,kieuKhachHang)
         value('$order_id','$makh','$tenhang','$mahang','$dongia','$slmua','$pttt','$order_date','Chờ xử lý đơn',$kieukhachhang)";
        // $sql3="UPDATE sanpham SET soLuong=(soLuong-'$slmua') where id='$mahang'";
         $sql4="insert into donghoadon(maHd,maHang,soLuong) value('$order_id','$mahang',$slmua)";
         execute($sql2);
       //  execute($sql3);
         execute($sql4);
    }
    header("location: ../dialog/DialogDatHangThanhCong.php")

 


  
?>