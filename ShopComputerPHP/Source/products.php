<?php 
@session_start();
include("controllers/c_products.php");
$c_products = new C_products();
if(isset($_GET["moi"]) ||isset($_GET["yeu_thich"])||isset($_GET["ban_chay"])){
	$c_products->hien_thi_san_pham_xem_them();
}
else{
$c_products->hien_thi_trang_products();
}

?>