<?php
@session_start();
ini_set("display_errors",1);
include("controllers/c_bai_viet.php");
if(isset($_GET["ma_bai_viet"])){
	$c_bai_viet  = new  C_bai_viet();
	$c_bai_viet->hien_thi_chi_tiet_bai_viet();
}else{
	$c_bai_viet  = new  C_bai_viet();
	$c_bai_viet->hien_thi_bai_viet();
}
?>