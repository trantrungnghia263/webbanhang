<!-- <php
require_once("../mySql_general/function_helper.php");
if(isset($_POST)){
    $maHd=$_POST['maHd'];
    $mahoadon=$_POST['mahoadon'];
$sql="UPDATE donhang SET trangThai='Đang giao' WHERE idHd=$maHd";
execute($sql);
$sql4="SELECT maHang,slMua FROM `donhang` WHERE idHd=$maHd";
$kq=executeResult($sql4);
foreach($kq as $item){
    $mahang=$item['maHang'];
    $slMua=$item['slMua'];
 $sql5="UPDATE sanpham SET soLuong=(soLuong-'$slMua') where id='$mahang'";
 execute($sql5);
}//?code trừ số  lượng không có hiệu lực  vì đã trừ trực tiếp số lượng khi admin nhấn xác nhận đơn hàng


$sql1="UPDATE donhang set trangThai='Đã lấy hàng' where idHd=$mahoadon";//??? nghi vấn sql này không có ý nghĩa
execute($sql1);
$sql2="insert into donhangdaban  select * from donhang where trangThai='Đã lấy hàng'";
execute($sql2);
$sql3= "DELETE from donhang where idHd=$mahoadon";
execute($sql3);
// $sql6="UPDATE donhangdaban set trangThai='Đã lấy hàng' where idHd=$mahoadon";//??? nghi vấn sql này không có ý nghĩa
// execute($sql6);

}

?> -->



<!-- <php
require_once("../mySql_general/function_helper.php");
if(isset($_POST)){
    $maHd=$_POST['maHd'];
    $mahoadon=$_POST['mahoadon'];
$sql="UPDATE donhang set trangThai='Đang giao' where idHd=$maHd";
execute($sql);
$sql4="SELECT maHang,slMua FROM `donhang` WHERE idHd=$maHd";
$kq=executeResult($sql4);
foreach($kq as $item){
    $mahang=$item['maHang'];
    $slMua=$item['slMua'];
 $sql5="UPDATE sanpham SET soLuong=(soLuong-'$slMua') where id='$mahang'";
 execute($sql5);
}//?code trừ số  lượng không có hiệu lực  vì đã trừ trực tiếp số lượng khi admin nhấn xác nhận đơn hàng

$sql1="UPDATE donhang set trangThai='Đã lấy hàng' where idHd=$maHd";//??? nghi vấn sql này không có ý nghĩa
execute($sql1);
$sql2="insert into donhangdaban  select * from donhang where trangThai='Đã lấy hàng'";
execute($sql2);
$sql3= "DELETE from donhang where idHd=$maHd";
execute($sql3);
}
?> -->

<?php
        require_once('../mySql_general/function_helper.php');
        if(isset($_POST['maHd'])){

        $maHd=$_POST['maHd'];
        }
       
        $sql1="update donhang set trangThai='Đang giao' where idHd=$maHd";
        $kq=executeResult($sql1);
        // var_dump($kq);
        foreach($kq as $item){
                $maHang=$item['maHang'];
                $slMua=$item['slMua'];
               $sql5="UPDATE sanpham SET soLuong=(soLuong +'$slMua') where id='$maHang'";
                execute($sql5); 
                }
        $sql="update donhang set trangThai ='Đã lấy hàng' where idHd=$maHd";
        execute($sql);
        $sql2="insert into donhangdaban select * from donhang where trangThai='Đã lấy hàng'";
        execute($sql2);
        $sql3="delete from donhang where idHd=$maHd";
        execute($sql3);


       
?>

