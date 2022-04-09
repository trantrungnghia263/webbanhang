<?php
require_once('../mySql_general/function_helper.php');

if(!empty($_POST)){
    $maNhom= $_POST['maNhom'];
    $sql= "DELETE  from nhomhang where maNhom= $maNhom";
    execute($sql);
    header("location: quanLyDanhMuc.php");
    // echo $sql;
}
?>