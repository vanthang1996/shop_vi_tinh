<?php 
@session_start();
include("controllers/Smarty_vi_tinh.php");
class C_about{
 function hien_thi_trang_about(){
 		//models
		
		//views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Vi tính online");
		$view = "views/about/v_about.tpl";
			include("controllers/c_nav.php");
		$smarty->assign("navs",$navs);
		$smarty->assign("subs",$subs);
		$smarty->assign("view",$view);
		$smarty->display("about/layout.tpl");
 
 }

}

?>