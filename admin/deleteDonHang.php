<?php
        require_once('../mySql_general/function_helper.php');
        if(isset($_POST['maHd'])){

        $maHd=$_POST['maHd'];
        }
       
        $sql3="select * from donhang where idHd=$maHd";
        $kq=executeResult($sql3);
        // var_dump($kq);
        foreach($kq as $item){
                $maHang=$item['maHang'];
                $slMua=$item['slMua'];
               $sql4="UPDATE sanpham SET soLuong=(soLuong +'$slMua') where id='$maHang'";
                execute($sql4); 
                }
        $sql="delete  from donhang where idHd=$maHd";
        execute($sql);
        $sql2="delete from donghoadon where maHd=$maHd";
        execute($sql2);
        $sql1="delete from hoadon where maHd=$maHd";
        execute($sql1);


       
?>