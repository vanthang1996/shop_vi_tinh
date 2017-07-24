<?php 
include  ("models/m_bai_viet.php");
class C_bai_viet{
	function Hien_thi_bai_viet(){
		//models
		$m_bai_viet  = new M_bai_viet();
		$gt="";
		$bai_viets=$m_bai_viet->Doc_bai_viet();
		if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$bai_viets=$m_bai_viet->Doc_bai_viet($gt);
		}
			// Phân trang
		$count=count($bai_viets);
		if($count>4)
		{
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$bai_viets=$m_bai_viet->Doc_bai_viet($gt);
			}
			include("Pager.php");
			$pager=new pager();
			$limit=4;
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$pager->pageList($curpage,$pages);
				// Đọc lại
			$bai_viets=$m_bai_viet->Doc_bai_viet($gt, $vt, $limit);
		}
		
		//views
		$title="Quản trị";
		$tieude="Danh sách bài viết";
		$view="views/bai_viet/v_bai_viet.php";
		include("include/layout.php");	
		
	}
	function   Them_bai_viet(){
		
		 //models
			$m_bai_viet  = new M_bai_viet();
	$loai_bai_viets = $m_bai_viet->Doc_loai_bai_viet_khong_co_con();
	
	
	if(isset($_POST["btnCapnhat"]))
			{
				
			$tieu_de=$_POST["tieu_de"];
			$noi_dung_tom_tat =$_POST["noi_dung_tom_tat"];
			$noi_dung_chi_tiet=$_POST['noi_dung_chi_tiet'];
			$ngay_gui_bai = date("Y-m-d h:i:s");
			$ngay_xuat_ban = date("Y-m-d h:i:s");
			$ngay_het_han = date("Y-m-d h:i:s",strtotime($_POST["ngay_het_han"]));
			$xuat_ban=(isset($_POST["xuat_ban"]) && $_POST["xuat_ban"]=="on")?"1":"0";
			$ma_loai_bai_viet = $_POST['ma_loai_bai_viet'];
			$ma_nguoi_dung = $_SESSION['ma_nguoi_dung'];
		
				
				
				// Ghi dữ liệu database
				$m_bai_viet=new M_bai_viet();
				$kq=$m_bai_viet->Them_bai_viet( $ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, 0, $xuat_ban);
				if($kq)
				{
					// Thành công
					echo "<script>alert('Hệ thống cập nhật thành công...');window.location ='baiviet.php'</script>";
					
					
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
			}
	
	
		 //views
		$title="Quản trị";
		$tieude="Thêm bài viết";
		$view="views/bai_viet/v_them_bai_viet.php";
		include("include/layout.php");	
		
	}
	function Them_loai_bai_viet(){
		  //models
		  $m_bai_viet  = new M_bai_viet();
	$loai_bai_viets = $m_bai_viet->Doc_loai_bai_viet();


if(isset($_POST["btnCapnhat"]))
		{
		
			$ten_loai_bai_viet = $_POST['ten_loai_bai_viet'];
			$mo_ta  = $_POST['mo_ta'];
			$loai_cha=$_POST['loai_cha'];
							// Ghi dữ liệu database
			$m_bai_viet=new M_bai_viet();
				$kq=$m_bai_viet->Them_loai_bai_viet($ten_loai_bai_viet,$mo_ta,$loai_cha);
			if($kq)
			{
					// Thành công
				echo "<script>alert('Hệ thống cập nhật thành công...');window.location='loaibaiviet.php'</script>";

			}
			else
			{
					// Thông báo lỗi	
				echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
			}
		}

	
		  //views
		$title="Quản trị";
		$tieude="Thêm loại  bài viết";
		$view="views/bai_viet/v_them_loai_bai_viet.php";
		include("include/layout.php");	
	}
	function   Sua_bai_viet(){
		
		 //models
		$m_bai_viet=new M_bai_viet();
		if(isset($_GET["ma_bai_viet"]))
		{
			$ma_bai_viet=$_GET["ma_bai_viet"];
			$bai_viet = $m_bai_viet->Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet);	
			
		}
		
			// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_bai_viet=$_POST["ma_bai_viet"];
			$tieu_de=$_POST["tieu_de"];
			$noi_dung_tom_tat =$_POST["noi_dung_tom_tat"];
			$noi_dung_chi_tiet=$_POST['noi_dung_chi_tiet'];
			$ngay_gui_bai = date("Y-m-d h:i:s");
			$ngay_xuat_ban = date("Y-m-d h:i:s");
			$ngay_het_han = date("Y-m-d h:i:s",strtotime($_POST["ngay_het_han"]));
			$xuat_ban=(isset($_POST["xuat_ban"]) && $_POST["xuat_ban"]=="on")?"1":"0";
				// Ghi dữ liệu database
			$m_bai_viet=new M_bai_viet();
			$kq=$m_bai_viet-> Sua_bai_viet($ma_bai_viet,$tieu_de,$noi_dung_tom_tat,$noi_dung_chi_tiet,$ngay_gui_bai,$ngay_xuat_ban,$ngay_het_han,$xuat_ban);
			if($kq)
			{
					// Thành công
				echo "<script>alert('Hệ thống cập nhật thành công...');window.location='baiviet.php'</script>";
					
				
				
			}
			else
			{
					// Thông báo lỗi	
				echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
			}
		}
		 //views
		$title="Quản trị";
		$tieude="Sửa bài viết";
		$view="views/bai_viet/v_sua_bai_viet.php";
		include("include/layout.php");	
		
	}
	function Hien_thi_loai_bai_viet(){		  	 
		 //models
		$m_bai_viet  = new M_bai_viet();
		$gt="";
		$loai_bai_viets=$m_bai_viet->Doc_loai_bai_viet();
		if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$loai_bai_viets=$m_bai_viet->Doc_loai_bai_viet($gt);
		}
		$loai_cha = array();
			//include  ("../models/m_bai_viet.php");
		foreach($loai_bai_viets as $loai_bai_viet){
			
			$loai_cha[$loai_bai_viet->ma_loai_cha] = $m_bai_viet->Doc_loai_bai_viet_theo_ma_cha($loai_bai_viet->ma_loai_cha);
		}
			// Phân trang
		$count=count($loai_bai_viets);
		if($count>4)
		{
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$loai_bai_viets=$m_bai_viet->Doc_loai_bai_viet($gt);
			}
			
			include("Pager.php");
			$pager=new pager();
			$limit=4;
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$pager->pageList($curpage,$pages);
				// Đọc lại
			$loai_bai_viets=$m_bai_viet->Doc_loai_bai_viet($gt, $vt, $limit);
			$loai_cha = array();
			//include  ("../models/m_bai_viet.php");
			foreach($loai_bai_viets as $loai_bai_viet){
				
				$loai_cha[$loai_bai_viet->ma_loai_cha] = $m_bai_viet->Doc_loai_bai_viet_theo_ma_cha($loai_bai_viet->ma_loai_cha);
			}
		}
		
		 //views
		$title="Quản trị";
		$tieude="Loại bài viết";
		$view="views/bai_viet/v_loai_bai_viet.php";
		include("include/layout.php");	
	}
	function   Sua_loai_bai_viet(){
		
		 //models
		// include  ("../models/m_bai_viet.php");
		$m_bai_viet=new M_bai_viet();
		if(isset($_GET["ma_loai_bai_viet"]))
		{
			$ma_loai_bai_viet=$_GET["ma_loai_bai_viet"];
			$loai_bai_viet = $m_bai_viet->Doc_loai_bai_viet_theo_ma_loai_bai_viet($ma_loai_bai_viet);	
			$loai_chas =  $m_bai_viet->Doc_loai_bai_viet();		
			}	// Models
			
			// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_loai_bai_viet  = $_POST['ma_loai_bai_viet'];
			$ten_loai_bai_viet = $_POST['ten_loai_bai_viet'];
		$mo_ta  = $_POST['mo_ta'];
			$ma_loai_cha=($_POST['loai_cha']=="null")?0:$_POST['loai_cha'];
			
				// Ghi dữ liệu database
			$m_bai_viet=new M_bai_viet();
			if($ma_loai_bai_viet!=$ma_loai_cha){
				$kq=$m_bai_viet->Sua_loai_bai_viet($ma_loai_bai_viet,$ten_loai_bai_viet,$mo_ta,$ma_loai_cha);
			}
			if($kq)
			{
					// Thành công
				echo "<script>alert('Hệ thống cập nhật thành công...');window.location='loaibaiviet.php'</script>";

			}
			else
			{
					// Thông báo lỗi	
				echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
			}
		}
			
			
			
			
		 //views
			$title="Quản trị";
			$tieude="Sửa bài viết";
			$view="views/bai_viet/v_sua_loai_bai_viet.php";
			include("include/layout.php");	
			
		}
		

	}


	?> 