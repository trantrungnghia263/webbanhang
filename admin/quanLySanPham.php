
<?php
require_once("../mySql_general/function_helper.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="header.css">
    <title>Trang Quản LÝ Thông Tin Sản Phẩm</title>
</head>
<body>
<div id="container">
        <div id="viewport">
            <!-- Sidebar -->
            <div id="sidebar">
              <header>
                <a href="../main/main.php">Nghĩa Handsome</a>
              </header>
              <ul class="nav">
                <li id="nhapdanhmuc">
                  <a href="trangchuAdmin.php" > Thêm Khách Hàng
                   
                  </a>
                </li>
                <li id="">
                  <a href="quanLyThongTinKhachHang.php">
                    <i class="zmdi zmdi-link"></i> Quản lý Khách Hàng
    
                  </a>
                </li>
                <li id="">
                  <a class="nav-link active" href="addProduct.php">
                    <i class="zmdi zmdi-widgets"></i> Thêm Sản Phẩm
                  </a>
                </li>
                <li  style="background-color:rgba(63, 67, 73, 0.897);"> 
                  <a href="quanLySanPham.php">
                    <i class="zmdi zmdi-calendar"></i> Quản Lý sản Phẩm
                  </a>
                </li>
                <li>
                  <a href="themDanhMuc.php">
                    <i class="zmdi zmdi-info-outline"></i> Thêm Danh Mục
                  </a>
                </li>
                <li>
                  <a href="quanLyDanhMuc.php">
                    <i class="zmdi zmdi-settings"></i> Quản Lý Danh Mục
                  </a>
                </li>
                <li>
                  <a href="quanLyHoTroKhachHang.php">
                    <i class="zmdi zmdi-settings"></i> Quản Lý HTKH
                  </a>
                </li>
                <li>
                  <a href="donHang.php">
                    <i class="zmdi zmdi-comment-more"></i> Quản Lý Đơn Hàng
                  </a>
                </li>
                <li>
                  <a href="thongKe.php">
                    <i class="zmdi zmdi-comment-more"></i> Thống Kê
                  </a>
                </li>
              </ul>
            </div>

            <!-- Content -->
            <div id="content">
                <div class="title">
                    <h2>TRANG QUẢN TRỊ ADMIN</h2>
                  <a href="../main/main.php"> <P>VỀ TRANG CHỦ </P></a> 
                </div>
                <div class="noi_dung_main">
                  <div > 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center"> QUẢN LÝ THÔNG TIN SẢN PHẨM </h2>
                        </div>
                        <div class="panel-body">
                          <table class=" table table-bordered" >
                            <thead>
                          <tr>
                                <th> STT</th>
                                <th style="text-align: center;"> Hình ảnh</th>
                                <th style="text-align: center;"> Tên sản phẩm</th>
                                  <th> Danh Mục</th>
                                  <th style="text-align: center;"> Mô Tả</th>
                                  <th>  Giá Bán</th>
                                  <th> Số Lượng</th>
                                  <th> Ngày Update</th>
                                  <th width=60px style="text-align: center;">EDIT</th>
                                  <th width=60px>DELETE</th>

                                </tr>
                              </thead>
                                          <tbody>
                                        <?php
                      $limit=10;
                      $page=1;
                      if(isset($_GET['page'])){
                          $page=$_GET['page'];
                      }
                      if($page<0){
                          $page=1;
                      }
                      $firtIndex=($page-1)*10;
                        // $sql=" select * from sanpham limit  $firtIndex,$limit";
                        // $result=executeResult($sql ,true);
                        $sql1="select count(id) as 'total'  from sanpham";
                        $kq=executeResult($sql1);
                      
                      $count=($kq[0]['total']);// số lượng sản phẩm 
                      $pageNumber=ceil($count/$limit);


                                          



          date('d-m-Y H:i:s');
        
                      $sql= "select sanPham.id,sanPham.tenHang,sanPham.hinhAnh,sanPham.moTa,sanPham.soLuong,sanPham.donGia,sanPham.giaKhuyenMai,sanPham.ngayUpdate,nhomHang.tenNhom  tenNhomHang from sanpham, nhomHang where sanPham.maNhom=nhomHang.maNhom 
                      limit $firtIndex,$limit " ;
                      $product=executeResult($sql);
                      $index=0;
                      foreach($product as $item){
                       
                        echo '<tr>
                                <td>'.(++$firtIndex).'</td>
                                <td>  <img src='.$item['hinhAnh'].' width=120px></td>  
                                <td> '.$item['tenHang'].'</td>
                                <td>  '.$item['tenNhomHang'].'</td>
                                <td>  '.$item['moTa'].'</td>
                                <td>  '.number_format($item['donGia']).' </td>
                            
                                <td>  '.number_format($item['giaKhuyenMai']).' </td>
                                <td>  '.$item['soLuong'].'</td>
                                <td> '.date("d/m/Y H:i:s", strtotime($item['ngayUpdate'])).' </td> 
                                <td>  <a href="suaThongTinSanPham.php?id='.$item['id'].'"> <button  class="btn btn-warning" id="edit" >  Edit</button> </a></td>
                                <td>  <button  class="btn btn-danger" id="delete" onclick="deleteSanPham('.$item['id'].')"  > Delete </button> </td>
                              </tr> ';

                      }
                      ?>
                
                              </tbody>
                            </table>
                           <ul class="pagination justify-content-center">
                    <?php
                    for($i=1;$i<=$pageNumber;$i++){
                        if($page==$i){

                            echo ' <li class="page-item active"><a class="page-link" href="" >'.$i.'</a></li>';
                        }
                        else
                        {
                            echo ' <li class="page-item "><a class="page-link" href="?page='.$i.'" >'.$i.'</a></li>';

                        }
                    }
    
          
        
        ?>
                            </ul>
                            

                          <a href="addProduct.php"> <button class="btn btn-success" id="addkhach" style=" margin-left:300px ;" > <span style="font-style: 22px;"> THÊM SẢN PHẨM</span>   </button></a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
</div>
<script>
  function deleteSanPham(id){
    var option= confirm("Bạn có chắc chắn muốn xóa sản phẩm này không")
    if(!option)
    return;
    else
    $.post('deleteSanPham.php',{
      'id':id
    },function(data){
  location.reload();
    })
    
  }
</script>

</body>
</html>