<?php @session_start();
include("controllers/Smarty_vi_tinh.php");
include("Pager.php");
include("models/m_bai_viet.php");
class C_bai_viet{
 function hien_thi_bai_viet(){
 		
		include("models/m_nguoi_dung.php");
		$m_bai_viet = new  M_bai_viet();
		$bai_viets= $m_bai_viet->Doc_bai_viet();
		$m_nguoi_dung = new M_nguoi_dung();
		$nguoi_dungs = array();
		foreach($bai_viets as $bai_viet){
			$nguoi_dungs[$bai_viet->ma_nguoi_dung] = $m_nguoi_dung->Doc_nguoi_dung_theo_ma_nguoi_dung($bai_viet->ma_nguoi_dung);
		}
		//phân trang
		$count=count($bai_viets);
		if($count>4)
		{
			$pager= new pager();;
			$limit=4;
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$pager->pageList($curpage,$pages);
			// Đọc lại
			$bai_viets= $m_bai_viet->Doc_bai_viet($vt,$limit);
		$m_nguoi_dung = new M_nguoi_dung();
		$nguoi_dungs = array();
		foreach($bai_viets as $bai_viet){
			$nguoi_dungs[$bai_viet->ma_nguoi_dung] = $m_nguoi_dung->Doc_nguoi_dung_theo_ma_nguoi_dung($bai_viet->ma_nguoi_dung);
		}
		}
		 
		
		
		
		//views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Vi tính online");
		$view = "views/bai_viet/v_bai_viet.tpl";
			include("controllers/c_nav.php");
		$smarty->assign("navs",$navs);
		$smarty->assign("subs",$subs);
		$smarty->assign("view",$view);
			$smarty->assign("bai_viets",$bai_viets);
				$smarty->assign("nguoi_dungs",$nguoi_dungs);
				$smarty->assign("lst",$lst);
		

		$smarty->display("bai_viet/layout.tpl");
 
 }
  function hien_thi_chi_tiet_bai_viet(){
 		
		$m_bai_viet = new  M_bai_viet();
		$bai_viet= $m_bai_viet->Doc_bai_viet_theo_ma_bai_viet($_GET["ma_bai_viet"]);
  				
		//views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Vi tính online");
		$view = "views/bai_viet/v_chi_tiet_bai_viet.tpl";
			include("controllers/c_nav.php");
		$smarty->assign("navs",$navs);
		$smarty->assign("subs",$subs);
		$smarty->assign("view",$view);
			$smarty->assign("bai_viet",$bai_viet);
		
		

		$smarty->display("bai_viet/layout.tpl");
 
 }

}

?>