	<?php 
include  ("models/m_don_hang.php");
include  ("models/m_khach_hang.php");
class C_don_hang{
	function Hien_thi_don_hang(){
		//models
		//include  ("../models/m_don_hang.php");
		$m_don_hang  = new M_don_hang();
		$gt="";
		$don_hangs = $m_don_hang->Doc_don_hang();
		if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$don_hangs=$m_don_hang->Doc_don_hang($gt);
			}
		$khach_hangs = array();
		//include  ("../models/m_khach_hang.php");
		$m_khach_hang  = new M_khach_hang();
			foreach($don_hangs as $don_hang){
				
				$khach_hangs[$don_hang->ma_khach_hang] = $m_khach_hang->Doc_khach_hang_theo_ma_khach_hang($don_hang->ma_khach_hang);
			}
			
		// Phân trang
			$count=count($don_hangs);
			echo $count;
			if($count>4)
			{
				if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$don_hangs=$m_don_hang->Doc_don_hang($gt);
			}
		
				include("Pager.php");
				$pager=new pager();
				$limit=4;
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				// Đọc lại
					$don_hangs=$m_don_hang->Doc_don_hang($gt, $vt, $limit);
					$khach_hangs = array();
		//include  ("../models/m_khach_hang.php");
		$m_khach_hang  = new M_khach_hang();
			foreach($don_hangs as $don_hang){
				
				$khach_hangs[$don_hang->ma_khach_hang] = $m_khach_hang->Doc_khach_hang_theo_ma_khach_hang($don_hang->ma_khach_hang);
			}
			}	
			
			
		//views
		$title="Quản trị";
			$tieude="Danh sách đơn hàng";
			$view="views/don_hang/v_don_hang.php";
			include("include/layout.php");	
		
	}
	function Chi_tiet_don_hang(){
		//models
		 $m_don_hang=new M_don_hang();
			if(isset($_GET["so_hoa_don"]))
			{
				$so_hoa_don=$_GET["so_hoa_don"];
				$chi_tiet_don_hang = $m_don_hang->Doc_chi_tiet_don_hang_theo_so_hoa_don($so_hoa_don);	
							
			}
			include("models/m_san_pham.php");
			$m_san_pham= new M_san_pham();
			$san_phams= array();
			 foreach($chi_tiet_don_hang as $chi_tiet){
				 $san_phams[$chi_tiet->ma_san_pham] = $m_san_pham->Doc_san_pham_theo_ma_san_pham($chi_tiet->ma_san_pham);
			 }
			
			
		
		//views
		$title="Quản trị";
			$tieude="Chi tiết đơn hàng";
			$view="views/don_hang/v_chi_tiet_don_hang.php";
			include("include/layout.php");	
		
	}
	
}


?> 