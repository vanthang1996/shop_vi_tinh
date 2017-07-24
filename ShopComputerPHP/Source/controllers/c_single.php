<?php @session_start();
include("controllers/Smarty_vi_tinh.php");
include("Pager.php");
include("models/m_products.php");
class C_single{
 function hien_thi_trang_single(){
 		//models
		$m_products = new M_products();
		$ma_san_pham;
		if(isset($_GET['ma_san_pham'])){
			$ma_san_pham  = $_GET['ma_san_pham'];
		}
		if(isset($_POST["search"])){
			$ma_san_pham = $_POST["search"];
		}
		if(empty($ma_san_pham)){
			$sp_tmp =($m_products->doc_san_pham(0,1));
			$ma_san_pham = $sp_tmp[0]->ma_san_pham;
			
			}
			$san_pham  = $m_products->doc_san_pham_theo_ma_san_pham($ma_san_pham);
			$cung_loais = $m_products->doc_san_pham_cung_loai($san_pham->ma_loai,$san_pham->ma_san_pham);
			$count=count($cung_loais);
			if($count>4)
			{
				$pager= new pager();;
				$limit=4;
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				// Đọc lại
				$cung_loais = $m_products->doc_san_pham_cung_loai($san_pham->ma_loai,$san_pham->ma_san_pham,$vt,$limit);
			}
		
		
		//views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Vi tính online");
		$view = "views/single/v_single.tpl";
			include("controllers/c_nav.php");
		$smarty->assign("navs",$navs);
		$smarty->assign("subs",$subs);
		$smarty->assign("view",$view);
			$smarty->assign("san_pham",$san_pham);
				$smarty->assign("cung_loais",$cung_loais);
		if(isset($lst)){
			$smarty->assign("lst",$lst);
		}
		$smarty->display("single/layout.tpl");
 
 }
 function hien_thi_tim_kiem_samn_pham(){
	 //models
		
		$m_products = new M_products();
		$ten_san_pham = $_POST["Product"];
		
		if(!empty($ten_san_pham)){
			$san_pham  = $m_products->tim_kiem_san_pham_theo_ten2($ten_san_pham);
			$cung_loais =$san_pham? $m_products->doc_san_pham_cung_loai($san_pham->ma_loai,$san_pham->ma_san_pham):NULL;
			$count=count($cung_loais);
			if($count>4)
			{
				$pager= new pager();;
				$limit=4;
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				// Đọc lại
				$cung_loais = $m_products->doc_san_pham_cung_loai($san_pham->ma_loai,$san_pham->ma_san_pham,$vt,$limit);
			}
		}
		
		//views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Vi tính online");
		$view = "views/single/v_single.tpl";
			include("controllers/c_nav.php");
		$smarty->assign("navs",$navs);
		$smarty->assign("subs",$subs);
		$smarty->assign("view",$view);
			$smarty->assign("san_pham",$san_pham);
				$smarty->assign("cung_loais",$cung_loais);
		if(isset($lst)){
			$smarty->assign("lst",$lst);
		}
		$smarty->display("single/layout.tpl");
 }

}

?>