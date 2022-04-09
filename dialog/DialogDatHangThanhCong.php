<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Đặt hàng thành công </title>
</head>
<style>
    body{
        background-image: linear-gradient(to right,  #12c2e9, #c471ed, #f64f59); 
        box-shadow: 5px 8px  4px rgba(0, 68, 255, 0.2);
    }
    #dialog{
      
    position: absolute;
    top:300px;
    left: 500px;
    width: 320px;
    height: 130px;
    background: transparent; /* transparen màu trong suốt */
    background: rgba(0,0,0,0.8); 
    border-radius: 2px;
 /*    display: none; */
   
}
#dialog i{
    position: absolute;
    top: 20px;
    left: 132px;
    font-size: 40px;
  color: aqua;
  
 
}
#dialog p{
 position: absolute;
 top: 65px;
 left: 62px;
color: #fff;}
</style>
<body>
<div id="dialog">
                <i class="fal fa-check-circle"></i>
                    <p>ĐẶT HÀNG THÀNH CÔNG </p>
                </div>
                <?php
     header( "refresh:2;url=../main/main.php" );  ?>

</body>
</html>