<?php
        require_once("../mySql_general/function_helper.php");
        if(!empty($_POST)){
            if(isset($_POST['btn']))
            {
            if(isset($_POST['phoneNumber'])){
                $phoneNumber=$_POST['phoneNumber'];
            }
            if(isset($_POST['birthday'])){
                $birthday=$_POST['birthday'];
            }
        }
       $sql="select count(id) as 'total' from khachhang where phoneNumber='$phoneNumber' and birthday='$birthday'";
       $kq=executeResult($sql);
       $total=($kq[0]['total']);
       if($total==0){
        echo '<div class="alert alert-success alert-dismissible fade show" style="width: 500px; margin: 0 auto; margin-top:0px; position: absolute; left: 420px;top:270px; " >
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>THÔNG BÁO!</strong> </br>Thông tin của bạn không chính xác vui lòng kiểm tra lại.
      </div>';
       }
       else
       {
        header("location: ../login/capLaipass.php");
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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Xác minh thông tin </title>
</head>
<body>
  <div id="back" style="position: absolute; left: 50px; top: 50px;">
<a href="../login/Login.php">  <i class="fas fa-arrow-alt-square-left" style="font-size: 30px; color: brown;"></i> </a>
  <span>Back</span>
  </div>
  <div class="container" style="margin-top: 50px;">
		<div class="panel panel-primary">
      <div class="panel-heading">
        <h2 class="text-center">Xác nhận thông tin người dùng</h2>
			</div>
			<div class="panel-body">
        <div class="form-group">
          <form action="" method="POST">
                             
                          <label for="userName">Số điện thoại: </label>
                          <input required="true" type="text" class="form-control" id="userName" name="phoneNumber" placeholder=" Input phoneNumber" >
                          </div> 
                           <input type="hidden" id="sl" value="<?php echo $total; ?>" name="phone">
                          <div class="form-group">
                          <label for="passWord">Ngày Sinh</label>
                          <input required="true" type="date" class="form-control" id="birthday" name="birthday">
                          </div> 
                     
                       <button  type="submit" class="btn btn-success" name="btn" id="confirmInfo" >XÁC MINH</button></a>
                      </form>
              </div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
</html>