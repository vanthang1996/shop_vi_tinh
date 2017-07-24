	<?php 
	include  ("models/m_nguoi_dung.php");
	class C_loai_nguoi_dung{
		function Hien_thi_loai_nguoi_dung(){
		//models
			$m_nguoi_dung  = new M_nguoi_dung();
			
			$loai_nguoi_dungs=$m_nguoi_dung->Doc_loai_nguoi_dung();
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$loai_nguoi_dungs=$m_nguoi_dung->Doc_loai_nguoi_dung($gt);
			}
			
				$gt="";
			// Phân trang
		$count=count($loai_nguoi_dungs);
	
		if($count>4)
		{
			if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$nguoi_dungs=$m_nguoi_dung->Doc_nguoi_dung2($gt);
		}
			
			
			include("Pager.php");
			$pager=new pager();
			$limit=4;
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$pager->pageList($curpage,$pages);
				// Đọc lại
			$loai_nguoi_dungs=$m_nguoi_dung->Doc_loai_nguoi_dung($gt,$vt,$limit);
			
		}	
			
		//views
			$title="Quản trị";
			$tieude="Danh sách loại người dùng";
			$view="views/loai_nguoi_dung/v_loai_nguoi_dung.php";
			include("include/layout.php");	
			
		}
	function Them_loai_nguoi_dung(){
			$m_nguoi_dung  = new M_nguoi_dung();
		//models
		if(isset($_POST["btnCapnhat"])){
			$ten_loai_nguoi_dung =$_POST["ten_loai_nguoi_dung"];
			$m_nguoi_dung->them_loai_nguoi_dung($ten_loai_nguoi_dung);
		}
			
		//views
			$title="Quản trị";
			$tieude="Thêm loại người dùng";
			$view="views/loai_nguoi_dung/v_them_loai_nguoi_dung.php";
			include("include/layout.php");	
			
		}
		
		function Sua_loai_nguoi_dung(){
		//models
		$m_nguoi_dung  = new M_nguoi_dung();
		if(isset($_GET['ma_loai_nguoi_dung'])){
			$ma_loai_nguoi_dung  = $_GET['ma_loai_nguoi_dung'];
			$loai_nguoi_dung  = $m_nguoi_dung->Doc_loai_nguoi_dung_theo_ma_loai_nguoi_dung($ma_loai_nguoi_dung);
		}
					// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
		$ma_loai_nguoi_dung  =$_POST['ma_loai_nguoi_dung'];
		$ten_loai_nguoi_dung = $_POST["ten_loai_nguoi_dung"];

				// Ghi dữ liệu database
			$m_nguoi_dung=new M_nguoi_dung();
			$kq=$m_nguoi_dung->Sua_loai_nguoi_dung($ma_loai_nguoi_dung,$ten_loai_nguoi_dung);
			
			if($kq)
				{
					// Thành công
					echo "<script>alert('Hệ thống cập nhật thành công...');window.location='loainguoidung.php'</script>";
			

				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
		}
			
			
		//views
			$title="Quản trị";
			$tieude="Sửa loại người dùng";
			$view="views/loai_nguoi_dung/v_sua_loai_nguoi_dung.php";
			include("include/layout.php");	
			
		}
		
	}


	?> 