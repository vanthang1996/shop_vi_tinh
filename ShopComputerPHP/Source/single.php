<?php 
@session_start();
ini_set("display_errors",1);
include("controllers/c_single.php");
if(isset($_POST["search_submit"])){
	$c_single = new  C_single();
	$c_single->hien_thi_tim_kiem_samn_pham();
}else{
	$c_single = new  C_single();
	$c_single->hien_thi_trang_single();
}
?>