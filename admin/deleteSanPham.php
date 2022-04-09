<?php
require_once('../mySql_general/function_helper.php');
if(!empty($_POST))
{
 $id=$_POST['id'];
 $sql = "DELETE FROM sanPham WHERE id= $id";
execute($sql);
header("location: quanLySanPham.php");
}
?>