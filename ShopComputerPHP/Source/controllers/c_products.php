<?php  @session_start();
include("controllers/Smarty_vi_tinh.php");
include("Pager.php");
class C_products{
 function hien_thi_trang_products(){
 		//models
		include("models/m_products.php");
		$m_products  = new  M_products();
		$loai_pr = $m_products->doc_loai_san_pham();
		$ma_loai =  $loai_pr[0]->ma_loai;
		if(isset($_GET['ma_loai']))
			$ma_loai=$_GET['ma_loai'];
		$products= $m_products->doc_san_pham_theo_ma_loai($ma_loai);
		foreach ($loai_pr  as $s){
			if($s->ma_loai==$ma_loai){
				$ten_loai= $s->ten_loai;
			}
		}
		 if(!isset($ten_loai)){
			 $ten_loai="Sản phẩm hiện đang cập  nhật";
		 }
		$count=count($products);
		if($count>4)
		{
			$pager= new pager();;
			$limit=4;
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$pager->pageList($curpage,$pages);
			// Đọc lại
			$products= $m_products->doc_san_pham_theo_ma_loai($ma_loai,$vt,$limit);
		}
		//views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Vi tính online");
		$view = "views/products/v_products.tpl";
		
			include("controllers/c_nav.php");
		$smarty->assign("navs",$navs);
		$smarty->assign("ten_loai",$ten_loai);
		$smarty->assign("subs",$subs);
		$smarty->assign("view",$view);
		$smarty->assign("products",$products);
	if(isset($lst)){
			$smarty->assign("lst",$lst);
	}
		$smarty->display("products/layout.tpl");
 
 }
  function hien_thi_san_pham_xem_them(){
	  //models
		include("models/m_products.php");
		$m_products  = new  M_products();
		if(isset($_GET['moi'])){
			$products= $m_products->doc_san_pham_moi();
		$ten_loai= "Sản phẩm mới";
		}else if(isset($_GET["yeu_thich"])){
			$products= $m_products->doc_san_pham_yeu_thich();
		$ten_loai= "Sản phẩm yêu thích";
		} else if(isset($_GET["ban_chay"])){
			$products= $m_products->doc_san_pham_ban_chay();
		$ten_loai= "Sản phẩm bán chạy";
		}
		 
		 $count=count($products);
		if($count>4)
		{
			$pager= new pager();;
			$limit=4;
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$pager->pageList($curpage,$pages);
			// Đọc lại
			if(isset($_GET['moi'])){
				$products= $m_products->doc_san_pham_moi($vt,$limit);
				} else if(isset($_GET["yeu_thich"])){
				$products= $m_products->doc_san_pham_yeu_thich($vt,$limit);
			} else if(isset($_GET["ban_chay"])){
				$products= $m_products->doc_san_pham_ban_chay($vt,$limit);
			}
		}
		 
	  
	  
	  
  //views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Vi tính online");
			$view = "views/products/v_products.tpl";
		
			include("controllers/c_nav.php");
		$smarty->assign("navs",$navs);
		$smarty->assign("ten_loai",$ten_loai);
		$smarty->assign("subs",$subs);
		$smarty->assign("view",$view);
		$smarty->assign("products",$products);
	if(isset($lst)){
			$smarty->assign("lst",$lst);
	}
		$smarty->display("products/layout.tpl");
  }
  
}

?>