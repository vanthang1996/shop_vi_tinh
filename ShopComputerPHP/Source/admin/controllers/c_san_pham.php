	<?php 
	include  ("models/m_san_pham.php");
	class C_san_pham{
		function Hien_thi_san_pham(){
		//models
		//include  ("../models/m_san_pham.php");
			$m_san_pham  = new M_san_pham();
			$san_phams = $m_san_pham->Doc_san_pham();
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$san_phams=$m_san_pham->Doc_san_pham($gt);
			}
			$loai_cha = array();
			//include  ("../models/m_bai_viet.php");
			foreach($san_phams as $san_pham){
				
				$loai_cha[$san_pham->ma_loai] = $m_san_pham->Doc_loai_san_pham_theo_ma_loai_cha($san_pham->ma_loai);}
				
				$gt="";
			// Phân trang
		$count=count($san_phams);
	
		if($count>4)
		{
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$san_phams=$m_san_pham->Doc_san_pham($gt);
			}
			
			
			include("Pager.php");
			$pager=new pager();
			$limit=4;
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$pager->pageList($curpage,$pages);
				// Đọc lại
			$san_phams=$m_san_pham->Doc_san_pham($gt,$vt,$limit);
			$loai_cha = array();
			
			//include  ("../models/m_bai_viet.php");
			foreach($san_phams as $san_pham){
				
				$loai_cha[$san_pham->ma_loai] = $m_san_pham->Doc_loai_san_pham_theo_ma_loai_cha($san_pham->ma_loai);}
		}	
		//views
				$title="Quản trị";
				$tieude="Danh sách sản phẩm";
				$view="views/san_pham/v_san_pham.php";
				include("include/layout.php");	
				
			}
			function   Them_san_pham(){
				
		 //models
		 
		 $m_san_pham  = new M_san_pham();
		 $loai_san_phams = $m_san_pham->Doc_loai_san_pham();
						
			// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
	
		$ten_san_pham =$_POST['ten_san_pham'];
		 $ma_loai =$_POST['ma_loai'];
			$mo_ta_tom_tat= $_POST['mo_ta_tom_tat'];
 		$mo_ta_chi_tiet= $_POST['mo_ta_chi_tiet'];
		 $don_gia= $_POST['don_gia'];
		 $hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"no_image.jpg";
			$san_pham_moi =(isset($_POST["san_pham_moi"]) && $_POST["san_pham_moi"]=="on")?"1":"0"; 
		$ngay_tao =date("Y-m-d h:i:s");
				// Ghi dữ liệu database
			$m_san_pham=new M_san_pham();
			$kq=$m_san_pham->Them_san_pham($ten_san_pham ,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi,0,$ngay_tao);
			
			if($kq)
				{
					// Thành công
					echo "<script>alert('Hệ thống cập nhật thành công...')</script>";
					// Di chuyển hình...
						if($_FILES["hinh"]["error"]==0)
						{
							$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/layout/images/$hinh");
							
						}
						if($kq)
						{
							echo "<script>alert('Di chuyển hình thành công...');window.location='sanpham.php'</script>";
						}	
						else
						{
							echo "<script>alert('Di chuyển hình bị lỗi...');window.location='sanpham.php'</script>";
						}
					
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
			}
					
		 //views
				$title="Quản trị";
				$tieude="Thêm sản phẩm";
				$view="views/san_pham/v_them_san_pham.php";
				include("include/layout.php");	
				
			}
			
			function   Sua_san_pham(){
				
		 //models
				$m_san_pham=new M_san_pham();
				if(isset($_GET["ma_san_pham"]))
				{
					$ma_san_pham=$_GET["ma_san_pham"];
					$san_pham = $m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);	
					
				}
				$loai_san_phams = $m_san_pham->Doc_loai_san_pham_khong_co_con();
				
				
			// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
		$ma_san_pham  =$_POST['ma_san_pham'];
	$ten_san_pham =$_POST['ten_san_pham'];
		 $ma_loai =$_POST['ma_loai'];
		$mo_ta_tom_tat= $_POST['mo_ta_tom_tat'];
 $mo_ta_chi_tiet= $_POST['mo_ta_chi_tiet'];
		 $don_gia= $_POST['don_gia'];
		 $hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$_POST["hinh_tmp"];
			$san_pham_moi =(isset($_POST["san_pham_moi"]) && $_POST["san_pham_moi"]=="on")?"1":"0"; 
		
				// Ghi dữ liệu database
			$m_san_pham=new M_san_pham();
			$kq=$m_san_pham->Sua_san_pham($ma_san_pham,$ten_san_pham,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi);
			
			if($kq)
				{
					// Thành công
					echo "<script>alert('Hệ thống cập nhật thành công...')</script>";
					// Di chuyển hình...
						if($_FILES["hinh"]["error"]==0)
						{
							$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/layout/images/$hinh");
							
						}
						if($kq)
						{
							echo "<script>alert('Di chuyển hình thành công...');window.location='sanpham.php'</script>";
						}	
						else
						{
							echo "<script>alert('Di chuyển hình bị lỗi...');window.location='sanpham.php'</script>";
						}
					
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
			}
				
				
		 //views
				$title="Quản trị";
				$tieude="Sửa sản phẩm";
				$view="views/san_pham/v_sua_san_pham.php";
				include("include/layout.php");	
				
			}

		}


		?> 