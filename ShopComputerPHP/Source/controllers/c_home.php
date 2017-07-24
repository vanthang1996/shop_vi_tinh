<?php 
@session_start();
include("controllers/Smarty_vi_tinh.php");
class C_home{
 function hien_thi_trang_home(){
 		//models
		include("models/m_products.php");
		$m_products = new  M_products();
		$ban_chays = $m_products->doc_san_pham_ban_chay(0,4);
		$yeu_thichs = $m_products->doc_san_pham_yeu_thich(0,4);
		$mois=  $m_products->doc_san_pham_moi(0,4);
		
		
		//views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Technology Store");
		$view = "views/home/v_home.tpl";
		$smarty->assign("view",$view);
		include("controllers/c_nav.php");
		$smarty->assign("mois",$mois);
		$smarty->assign("yeu_thichs",$yeu_thichs);
		$smarty->assign("ban_chays",$ban_chays);
		
		$smarty->assign("navs",$navs);
		$smarty->assign("subs",$subs);
		$smarty->display("layout.tpl");
 
 }

}

?>