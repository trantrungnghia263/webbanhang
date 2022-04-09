
<?php
session_start();
require_once("../mySql_general/function_helper.php");
$hostname ="localhost";
$username ="root";
$password ="";
$database ="dogiadung";

$connect =new mysqli($hostname,$username,$password,$database);
if($connect->connect_error){
    die("Không kết nối :" .$connect->connect_error);
    exit();
}
$hoten = $email = $phone =$noidungphanhoi='';
if(!empty($_POST)){
  if(isset($_POST['btn']))
  {
     if(isset($_POST['hoten']))
     {
       $hoten=$_POST['hoten'];
     }
     if(isset($_POST['email']))
     {
       $email=$_POST['email'];
     }
     if(isset($_POST['phone']))
     {
       $phone=$_POST['phone'];
     }
     if(isset($_POST['noidungphanhoi']))
     {
       $noidungphanhoi=$_POST['noidungphanhoi'];
     }
     if (!preg_match('/^0[0-9]{9}$/', $phone)) 
        {
            echo '<div class="alert alert-success alert-dismissible" style="width: 300px; margin: 0 auto; margin-top:-50px; position: absolute; left: 560px; z-index:1;" >
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>THÔNG BÁO!</strong></br>Số điện thoại không hợp lệ.
            </div>';
        }
        else
        {
            $sql="insert into yeucaukhachhang(hoten,email,phone,noidungphanhoi) value('$hoten','$email','$phone','$noidungphanhoi')";
            execute($sql);
        }

   
    }
}


$connect->close();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pageHeader/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <!-- <link rel="stylesheet" href="../main/index.css"> -->
    <link rel="stylesheet" href="../main/main.css">
    <link rel="stylesheet" href="trangchuAdmin.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script src="lienhe.js"></script> -->
    <title>CONTACT</title>
</head>
<style>
    .text #title :hover {
        transform: scale(1.1);
    }

    .text a {
        text-decoration: none;
        color: #3b5998;
    }

    #menu_main li a:hover {
        border-bottom: 4px solid rgb(235, 77, 77);
        transition: 0.25s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        width: 70%;
        color: #CD201F;

    }

    #cart {
        position: absolute !important;
        top: 20px !important;
        right: 93px !important;
    }

    #content #check_don_hang a {
        margin-left: 14px;
        font-size: 21px;
    }
    h6{
        margin-left: -240px;
        
    }
    h4 {
        font-size: 20px;
        margin-left: 50px;
        top: 10px;
    }

    h3 {
        margin-left: 50px;
        top: 30px;
    }

    .footer #address a {
        color: rgb(185, 184, 184);
        font-size: 20px;
        text-decoration: none;
        position: absolute;
        top: 8px;
        right: 19px;
        margin-left: 0px;
    }

    .menu_icon #account {
        position: absolute;
        right: 138px;
        top: 20px;
        font-size: 20px;
        cursor: pointer;
    }

    #content #check_don_hang a {
        margin-left: 4px;
        font-size: 20px;
    }

    .col-md-5 {
        width: 400px;
        height: 400px;
        left: 200px;
        top: 10px;
    }
    .col-md-5 h4{
        font-size: 25px;
        color: blue;
        margin-left: -4px;
    }
    .col-md-5 iframe {
        width: 500px;
        height: 380px;
    }

    .row a {
        color: #CD201F;
    }

    .row h3 {
        font-size: 21px;
    }

    .row a:hover {
        color: blue;
    }

    .row {
        margin-bottom: 50px;
    }

    .row_two {
        margin-top: -20px;
    }

    .dongke {
        margin-top: -20px;
        width: 990px;
        margin-left: -18px;
    }
    .panel-body{
        margin-left: 100px;
        width: 500px;
    }

    .fixed {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 10;
            padding: 10px;
            background-color: #Dc2617;
            border-radius: 50%;
            animation: hieuung .9s ease-in-out infinite;
        }

        @keyframes hieuung {
            0% {
                transform: scale(1, 1);
            }

            50% {
                transform: scale(0.5, 0.5);
            }

            100% {
                transform: scale(1, 1);
            }
        }

        .fixed i {
            font-size: 40px;
            color: #fff;
            z-index: 10;
        }

        .fixed #contact_message:hover {
            opacity: 25%;
        }

</style>

<body style="margin-top: 50px;">
<?php

include '../pageHeader/header.php';
?>
    <div class="row">
        <div class="col-md-6">
            <h2 style="margin-left: 50px; color :blue; ">THÔNG TIN LIÊN HỆ CỦA SHOP </h3>
                <br>
                <div class="dongke">
                    <hr width="86%" style="color: gray; border-width:3px;">
                </div>
                <br>
                <div class="row_two">
                    <h4>Số điện thoại : 0399 602 281</h4>
                    <h4>Email : <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwPVfKHdjGlpbltMkSmnjjVhbRnBwZrsmzglgNTVkCWBDTLvBvFHclBttLLwRSrwjfBMwQh">nghiachoet263@gmail.com</a> </h4>
                    <h4>Address : Liên Minh, Đức Thọ , Tỉnh Hà Tĩnh</h4>
                    <h4>Working Day : T2 - CN at 8:30 AM - 11:00 PM</h4>
                    <h4>
                        <div class="row">
                            <h3 style="margin-left: 15px;">Facebook : <a href="https://www.facebook.com/263ttn/" style="margin-top: 8px;" target="blank">https://www.facebook.com/263ttn/</a></h3>
                        </div>
                    </h4>
                </div>
                <div class="dongke">
                    <hr width="86%" style="color: gray; border-width:3px;">
                </div>
                <h3 style="color: blue; font-size:25px;">YÊU CẦU - PHẢN HỒI CỦA BẠN</h3>
                <h6 style="color: gray;" align="center">Vui lòng để lại thông tin và nội dung lời nhắn .</h6>
        </div>
        <div class="col-md-5">
            <h4>BẢN ĐỒ</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1100.5258218091062!2d105.60707538114016!3d18.539304113306954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139c96e5029b47b%3A0x19a1ea577d988626!2zQ-G7rWEgaMOgbmcgdOG6oXAgaG_DoSBMw6BpIEhvw6A!5e0!3m2!1svi!2sus!4v1649219295494!5m2!1svi!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.8450129219405!2d105.60586171439799!3d18.535904673544007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139c92aca736c17%3A0xa41e4f359ce1be83!2zVGjDtG4gWcOqbiBN4bu5IHjDoyBMacOqbiBNaW5oIMSQ4bupYyBUaOG7jSBIw6AgVMSpbmg!5e0!3m2!1svi!2s!4v1635411346465!5m2!1svi!2s" style="border: 1px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <form action="" method="POST" onsubmit="var result = IsInvalidEmail(this.email.value);return result;">
                    <label for="hoten">Họ và tên</label>
                    <input required="true" type="text" class="form-control"  name="hoten" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input required="true" type="text" class="form-control" name="email" id="gmail">
            </div>
            <div class="form-group">
                <label for="phone"> Số Điện Thoại</label>
                <input required="true" type="text" class="form-control" name="phone" id="phone" >
            </div>
            <div class="form-group">
                <label for="noidung">Nội dung</label>
                <input required="true" type="text" class="form-control"  name="noidungphanhoi" id="noidung">
            </div>
               <button type="submit" class="btn btn-success" name="btn" >Gửi nội dung</button>
            </form>
        </div>
    </div>
    </div>
    <div class="contact_fixed">
        <div class="fixed">
            <a href="https://www.facebook.com/263ttn/" target="_blank">
                <i class="fab fa-facebook-messenger" id="contact_message"></i>
            </a>
        </div>
        <div class="alert alert-secondary alert-dismissible fade show" style="width: 260px;height:auto; padding:13px 0px 10px 0px; margin-right: 10px; position: fixed; right: 80px; bottom: 30px; z-index: 20; text-align: center; background-color: rgb(255 153 0) ;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>Nhắn tin cho shop tại đây.
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
               //  alert("Email đúng định dạng");
                   return true;
               } else {
                   alert("Email sai định dạng");
                   return false;
                   }
                }
                // function IsInvalidPhone(the_phone) {
                //    var phone=the_phone.length('10');
                //    if(phone = the_phone.length(10)) {
                //        alert("SĐT phải đủ 10 số");
                //    }
                // }
            </script>
            <!-- <script type="text/javascript">
                function send(){
                    var phone=document.getElementById('phone').value;
                    if(isNaN(phone)){
                        alert("SĐT phải là số");
                    }else if(phone.length=10){
                        return true;
                    }else{
                        alert("SĐT phải gồm 10 số");
                    }
                }
            </script> -->

            <!-- bắt lỗi -->


</body>
<?php include '../footer/footer.php' ?>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../pageHeader/header.js"></script>

</html>