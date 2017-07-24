<?php 
@session_start();
include("controllers/c_login.php");
ini_set("display_errors",1);
if(isset($_GET["forget"])||isset($_POST["btnForget"])){
	$c_login = new  C_login();
	$c_login->hien_thi_trang_quen_mat_khau();
	return;
}else
if(!isset($_SESSION["khach_hang"])){
	
	$c_login = new  C_login();
	$c_login->hien_thi_trang_login();
	return;
}

if(isset($_GET["dat_hang"])){
	header("location:gio_hang.php");
}else{
	header("location:index.php");
}
?>