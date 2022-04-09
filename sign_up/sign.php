<?php
  require_once('../mySql_general/function_helper.php');
  date_default_timezone_set('Asia/Ho_Chi_Minh');//Lay gio viet nam
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
    if($userName=='Admin'){
        echo  '<div class="alert alert-success alert-dismissible" style="width: 500px; margin: 0 auto; margin-top:20px; position: absolute; left: 420px; z-index:1;" >
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>THÔNG BÁO!</strong> </br>Tên đăng nhập này đã có trong hệ thống vui lòng chọn tên khác.
      </div>';
    }
       else
       {
        $sql=mysqli_query($conn,"select * from khachhang where  phoneNumber='$phoneNumber'");
        if($sql){
            $data=mysqli_fetch_assoc($sql);
        }
         if(!empty($data)){
         echo '<div class="alert alert-success alert-dismissible" style="width: 500px; margin: 0 auto; margin-top:20px; position: absolute; left: 420px; z-index:1;" >
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong>THÔNG BÁO!</strong> </br>Số điện thoại này đã tồn tại trong hệ thống vui lòng chọn số khác !!
       </div>';
       }
    else
        if($confirmPassword!=$password){
            echo '<div class="alert alert-success alert-dismissible" style="width: 500px; margin: 0 auto; margin-top:20px; position: absolute; left: 420px; z-index:1; " >
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>THÔNG BÁO!</strong> </br> Mật khẩu xác nhận bạn điển vào không chính xác vui lòng kiểm tra lại !!
          </div>';
        }
        else 
        {
        $ngayTao=$ngayUpdate=date('Y-m-d H:i:s');
        $sql=" insert into khachhang(userName,passWord,phoneNumber,birthday,email,address,ngayTao,ngayUpdate) values ('$userName','$password','$phoneNumber','$birthday','$email','$address','$ngayTao','$ngayUpdate')";
        execute($sql);
        
        header("location: ../login/Login.php");
          }
        }//else

        }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ĐĂNG KÝ TÀI KHOẢN</title>
    <style>
  #form_sign_up{
      max-width: 573px;
      background: rgba(0,0,0,0.8);         /* làm mờ khung  */
      flex-grow: 1;              /* giãn khung ra  */
      padding: 30px 30px 80px;
      box-shadow: 0px 0px 20px 3px rgba(253, 253, 253, 0.8);
  
  }
  #formgroup{
      margin-bottom: 28px;
  }
  #formgroup h3{
      font-size: 20px;
      font-weight: 200;
      padding-top: 15px;
  }
    </style>
</head>
<body >
    <div  id="total">
        <form action="" id="form_sign_up" method="POST" name="formRegister"  onsubmit="var result = IsInvalidEmail(this.email.value);return result;">
            <h1 class="formheading">  ĐĂNG KÍ TÀI KHOẢN</h1>
            <div id="formgroup">
               <h3>Tên người dùng:</h3>
                <input type="text"  id="user" placeholder="Tên Người Dùng"  name="userName" required>
            </div>
            <div id="formgroup">
               <h3> Địa Chỉ :</h3>
                <input type="text"  id="user" placeholder="Nhập địa chỉ "  required  name="address">
            </div>
            <div id="formgroup">
               <h3> Số Điện Thoại  :</h3>
                <input type="text"   id="user" placeholder="Nhập số điện thoại"  required  name="phoneNumber">
            </div>
            <!-- thêm -->
            <div id="formgroup">
               <h3> Email :</h3>
                <input type="text"  id="user" placeholder="Nhập email "  required  name="email">
            </div>
            <div id="formgroup">
                <h3> Ngày Sinh :</h3>
                 <input type="date"  id="user"  required name="birthday">
             </div>
            <div id="formgroup_1" style="margin-top: 41px;margin-bottom: 32px;">
               <h3 style="font-size: 20px; font-weight: 100;">Mật khẩu :</h3>
                <input type="password"    id="password" placeholder="Mật khẩu" required name="password">
                <div id="eye" style="margin-top: 5px;">
                    <i class="fas fa-eye"></i>
                </div>
            </div>
                <div id="formgroup_2" >
                    <h3 style="font-size: 20px; font-weight: 100; position: absolute; top:16px"> Nhập lại mật khẩu: </h3>
                    <input type="password"    id="confirmpassword" placeholder="Mật khẩu" required name="confirmPassword" style="margin-left: 248px;">
                  <div id="eye1">
                      <i class="fas fa-eye"></i>
                  </div>
                </div>
            <input type="submit" value="ĐĂNG KÍ"  class="formsubmit" name="register">
        </form>
    </div>
    <script>
     function IsInvalidEmail(the_email) {
     var at = the_email.indexOf("@");
     var dot = the_email.lastIndexOf(".");
     var space = the_email.indexOf(" ");
 
    if ((at != -1) && //có ký tự @
      (at != 0) && //ký tự @ không nằm ở vị trí đầu
      (dot != -1) && //có ký tự .
      (dot > at + 1) && (dot < the_email.length - 1) //phải có ký tự nằm giữa @ và . cuối cùng
       && (space == -1)) //không có khoẳng trắng 
    {
     alert("Email đúng định dạng");
     return true;
    } else {
    alert("Email sai định dạng");
    return false;
    }
    }
 </script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script><!-- import thư viện của jquery -->
<script src="sign.js"></script>

</html>