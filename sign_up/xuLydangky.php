<?php
  require_once('../mySql_general/function_helper.php');
  require_once('../mySql_general/config_DB.php');
if(!empty($_POST)){
    if(isset($_POST['register'])){
        if(isset($_POST['userName'])){
            $userName=$_POST['userName'];
        }
        if(isset($_POST['address'])){
            $address=$_POST['address'];
        }
        if(isset($_POST['phoneNumber'])){
            $phoneNumber=$_POST['phoneNumber'];
        }
        if(isset($_POST['birthday'])){
            $birthday=$_POST['birthday'];
        }
        //thêm
        if(isset($_POST['email'])){
            $email=$_POST['email'];
        }
        if(isset($_POST['password'])){
            $password=$_POST['password'];
        }
        if(isset($_POST['confirmPassword'])){
            $confirmPassword=$_POST['confirmPassword'];
        }
        $sql = "SELECT * FROM khachhang WHERE userName = '$userName' OR passWord = '$password'";
        $result = mysqli_query($conn, $sql);
         if(mysqli_num_rows($result)>0){
            $message = "Bản ghi này đã tồn tại";
        echo "<script type='text/javascript'>alert('$message');</script>";
        
    }
    else
        if($confirmPassword==$password){
          $ngayTao=$ngayUpdate=date('Y-m-d H:i:s');
           $sql=" insert into khachhang(userName,passWord,phoneNumber,birthday,email,address,ngayTao,ngayUpdate) values ('$userName','$password','$phoneNumber','$birthday','$email','$address','$ngayTao','$ngayUpdate')";
           execute($sql);
           header("location: ../login/Login.php");
        }

    }    
      
    }

?>