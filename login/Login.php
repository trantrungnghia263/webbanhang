<?php
session_start();
require_once('../mySql_general/config_DB.php');
require_once('../mySql_general/function_helper.php');
if(isset($_POST['submit']))
{
   if(isset($_POST['username'])){
       $username=$_POST['username'];
   }
   if(isset($_POST['password'])){
    $password=$_POST['password'];
    }
    $sql=mysqli_query($conn,"select * from khachhang where userName='$username' and passWord='$password'");
    if($sql){
        $data=mysqli_fetch_assoc($sql);
    }
    if($data!=null && count($data)>0){
        if(isset($_SESSION['cart'])){
            unset($_SESSION['cart']);
        }
        $list=[
            'id'=> $data['id'],
            'phone'=>$data['phoneNumber'],
            'user'=>$data['userName']
        ];
        $_SESSION['taikhoan']=$list;
     header("location: ../main/main.php");
    }
    else
    {
        echo '<div class="alert alert-success alert-dismissible fade show" style="width: 500px; margin: 0 auto; margin-top:20px; position: absolute; left: 420px; " >
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>THÔNG BÁO!</strong> </br>Tên đăng nhập hoặc Mật Khẩu của bạn không chính xác vui lòng kiểm tra lại.
      </div>';
     
    }  
    $sql1="select count(id) as 'total'  from khachhang where userName='$username' and passWord='$password'";
    $kq=executeResult($sql1);
   $count=($kq[0]['total']); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ĐĂNG NHẬP</title>

    <style>
      #ConfirmPassword a{
            text-decoration: none;
            color: white;
        }
        #ConfirmPassword a:hover{
            color:#54a0ff;
        }
        span{
            cursor: pointer;
        }
        #ConfirmPassword {
            display: none;
        }

    </style>
</head>
<body>
    <div  id="total">
        <form action="" id="formLogin" method="POST" name="formlogin" onsubmit=" return checkInformation()">
       <input type="hidden" id="account"value="<?php echo $count ?>">
            <h1 class="formheading"> ĐĂNG NHẬP WEBSITE</h1>
            <div id="formgroup">
                <i class="far fa-user"></i>
                <input type="text"  class="forminput" placeholder="Tên đăng nhập" name="username">
            </div>
            <div id="formgroup">
                <i class="fas fa-key"></i>
                <input type="password" class="forminput"  id="password"placeholder="Mật khẩu" name="password">
                <div id="eye">
                    <i class="fas fa-eye"></i>
                </div>
            </div>
            <div id="dang_ki">
                <a href="../sign_up/sign.php"><span>Đăng Kí Tài Khoản ở đây!</span></a>
            </div>
            <div id="ConfirmPassword">
                <a href="../login/confirmInfor.php"><span>  Xác minh thông tin để lấy lại mật khẩu !</span></a>
            </div>
            <input type="submit" value="ĐĂNG NHẬP"  class="formsubmit" name="submit">

        </form>
       
    </div>

    
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="eye.js"></script>
<script>
    function checkInformation(){
        
       var fullname = document.formlogin.username.value;
       var password = document.formlogin.password.value;
      
        if(fullname.length>0 && password.length ==0){
            alert(" Vui lòng điền mật khẩu vào để đăng nhập !!");
          return false;
        }
        else if(fullname.length==0 && password.length>0){
            alert(" Vui lòng điền userName vào để đăng nhập !!");
           return false;
        }
        
        return true;

    }
    var account= document.getElementById('account').value
    if(account==0){
        document.getElementById('ConfirmPassword').style.display='block'
    }

</script>


</html>