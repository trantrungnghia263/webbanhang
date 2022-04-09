<?php
session_start();
require_once('../mySql_general/function_helper.php');
require_once('../mySql_general/config_DB.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(!empty($_POST)){
   
   if(isset($_POST['slMua'])){
       $slMua=$_POST['slMua'];
   }
   if(isset($_POST['tenHang'])){
       $tenHang=$_POST['tenHang'];

   }
   if(isset($_POST['donGia'])){
       $donGia=$_POST['donGia'];

   }

   if(isset($_POST['maHang'])){
       $maHang=$_POST['maHang'];

   }
 
   if(isset($_POST['userName'])){
       $userName=$_POST['userName'];

   }
   if(isset($_POST['phoneNumber'])){
       $phoneNumber=$_POST['phoneNumber'];

   }
   if(isset($_POST['address'])){
       $address=$_POST['address'];

   }
   if(isset($_POST['radio'])){
       $pttt=$_POST['radio'];

   }
  

   $order_date=date('Y-m-d H:i:s');


}

$sql=mysqli_query($conn,"select * from khachhang where  phoneNumber='$phoneNumber'");
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


// $sql1=mysqli_query($conn,"select * from hoadon where ngayBan='$order_date'");
// if($sql1){
//     $data=mysqli_fetch_assoc($sql1);
    
// }
// if($data!=null){
//     $order_id=$data['maHd'];

// }
// else
// {
//     $order_id= null;
// }





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

    $sql2="insert into donhang(idHd,maKhachHang,tenHang,maHang,donGia,slMua,pttt,ngayDatHang,trangThai,kieuKhachHang)
     value('$order_id','$makh','$tenHang','$maHang','$donGia','$slMua','$pttt','$order_date','Chờ Xử lý đơn',$kieukhachhang)";
    execute($sql2);
    //   var_dump($sql2);
    //  die();
    //  $sql3="UPDATE sanpham SET soLuong=(soLuong-'$slMua') where id='$maHang'";
    //  execute($sql3);
     $sql4="insert into donghoadon(maHd,maHang,soLuong) value('$order_id','$maHang',$slMua)";
     execute($sql4);
    
   header("location: ../dialog/DialogDatHangThanhCong.php")



?>
