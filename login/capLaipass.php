<?php
   require_once("../mySql_general/function_helper.php");
 if(!empty($_POST)){
    if(isset($_POST['datlaiMK']))
    {
      $pass=$_POST['password'];
      $confirmpass=$_POST['confirmpassword'];
      $phone=$_POST['phone'];
      if($pass==$confirmpass){
        $sql="UPDATE khachhang set passWord='$pass' where phoneNumber='$phone'";
        execute($sql);
        header("location: ../login/Login.php");
      }
      else
    {
      echo '<div class="alert alert-success alert-dismissible fade show" style="width: 500px; margin: 0 auto; margin-top:0px; position: absolute; left: 420px;top:20px; " >
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>THÔNG BÁO!</strong> </br>Password của bạn không chính xác vui lòng kiểm tra lại.
    </div>';
    }
      
    }
  }
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>ĐẶT LẠI MẬT KHẨU</title>
  </head>
  <body>
  <div class="container" style="margin-top: 50px;">
		<div class="panel panel-primary">
      <div class="panel-heading">
        <h2 class="text-center">ĐẶT LẠI MẬT KHẨU</h2>
			</div>
			<div class="panel-body">
        <div class="form-group">
          <form action="" method="POST">
                             
                          <label for="userName">Mật khẩu mới: </label>
                          <input required="true" type="password" class="form-control" id="userName" name="password" placeholder=" Input password" >
                          </div> 
                          <input type="hidden" value="<?php echo $phoneNumber;?>" name="phone">
                           <input type="hidden" id="sl" value="<?php echo $total; ?>">
                          <div class="form-group">
                          <label for="passWord">xác nhận lại mật khẩu:</label>
                          <input required="true" type="password" class="form-control" id="birthday" name="confirmpassword" placeholder="Confirm Password">
                          </div> 
                     
                       <button  type="submit" class="btn btn-success" name="datlaiMK" id="confirmInfo" >XÁC NHẬN</button></a>
                      </form>
              </div>
		</div>
	</div>
    
  </body>
  </html>