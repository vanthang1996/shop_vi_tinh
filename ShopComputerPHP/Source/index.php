<?php 
@session_start();
ini_set("display_errors",1);
include("controllers/c_home.php");
$c_home = new  C_home();
$c_home->hien_thi_trang_home();
?>