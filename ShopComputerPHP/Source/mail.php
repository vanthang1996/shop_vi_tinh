<?php 
@session_start();
ini_set("display_errors",1);
include("controllers/c_mailus.php");
$c_mailus = new  C_mailus();
$c_mailus->hien_thi_trang_mailus();
?>