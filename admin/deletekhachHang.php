 <?php
      require_once('../mySql_general/function_helper.php');

      if(isset($_POST))
      {
       $id=$_POST['id'];
       $sql = "DELETE FROM khachhang WHERE id= $id";
     execute($sql);
     header("location: quanLyThongTinKhachHang.php");
      }
     
?> 