<?php 
include  ("models/m_san_pham.php");
class C_loai_san_pham{
	function Hien_thi_loai_san_pham(){
		//models
		
		$m_san_pham  = new M_san_pham();
		
		$loai_san_phams=$m_san_pham->Doc_loai_san_pham();
		if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$loai_san_phams=$m_san_pham->Doc_loai_san_pham($gt);
		}
		$loai_cha = array();
		
		foreach($loai_san_phams as $loai_san_pham){
			
			$loai_cha[$loai_san_pham->ma_loai_cha] = $m_san_pham->Doc_loai_san_pham_theo_ma_loai_cha($loai_san_pham->ma_loai_cha);
		}
		
		
		$gt="";
			// Phân trang
		$count=count($loai_san_phams);
		if($count>4)
		{
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$loai_san_phams=$m_san_pham->Doc_loai_san_pham($gt);
			}
			
			
			include("Pager.php");
			$pager=new pager();
			$limit=4;
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$pager->pageList($curpage,$pages);
				// Đọc lại
			$loai_san_phams=$m_san_pham->Doc_loai_san_pham($gt,$vt,$limit);
			$loai_cha = array();
			
			foreach($loai_san_phams as $loai_san_pham){
				
				$loai_cha[$loai_san_pham->ma_loai_cha] = $m_san_pham->Doc_loai_san_pham_theo_ma_loai_cha($loai_san_pham->ma_loai_cha);
			}
		}	
		
		
		//views
		$title="Quản trị";
		$tieude="Danh sách loại sản phẩm";
		$view="views/loai_san_pham/v_loai_san_pham.php";
		include("include/layout.php");	
		
	}
	function   Them_loai_san_pham(){
		
		 //models
		 
		 $m_san_pham  = new M_san_pham();
		 $loai_san_phams =  $m_san_pham->Doc_loai_san_pham();
		 
		 		// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
			$ten_loai =$_POST['ten_loai'];
			$mo_ta= $_POST['mo_ta'];
			$ma_loai_cha = $_POST['loai_cha'];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"no_image.jpg";
				// Ghi dữ liệu database
			$m_san_pham=new M_san_pham();
			
			$kq=$m_san_pham->Them_loai_san_pham($ten_loai,$mo_ta,$ma_loai_cha,$hinh);
		
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
							echo "<script>alert('Di chuyển hình thành công...');window.location='loaisanpham.php'</script>";
						}	
						else
						{
							echo "<script>alert('Di chuyển hình bị lỗi...');window.location='loaisanpham.php'</script>";
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
		$tieude="Thêm loại sản phẩm";
		$view="views/loai_san_pham/v_them_loai_san_pham.php";
		include("include/layout.php");	
		
	}
	
	function   Sua_loai_san_pham(){
		
		 //models
		$m_san_pham=new M_san_pham();
		if(isset($_GET["ma_loai"]))
		{
			$ma_loai=$_GET["ma_loai"];
			$loai_san_pham = $m_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai);	
			
		}
		$loai_san_phams = $m_san_pham->Doc_loai_san_pham();
		
			// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
			$ma_loai=$_POST['ma_loai'];
			$ten_loai =$_POST['ten_loai'];
			$mo_ta= $_POST['mo_ta'];
			$ma_loai_cha = ($_POST['loai_cha']=="null")?0:$_POST['loai_cha'];;
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]: $_POST["hinh_tmp"];
				// Ghi dữ liệu database
			$m_san_pham=new M_san_pham();
			if($ma_loai!=$ma_loai_cha){
			$kq=$m_san_pham->Sua_loai_san_pham($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha,$hinh);
			}
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
							echo "<script>alert('Di chuyển hình thành công...');window.location='loaisanpham.php'</script>";
						}	
						else
						{
							echo "<script>alert('Di chuyển hình bị lỗi...');window.location='loaisanpham.php'</script>";
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
		$tieude="Sửa loại sản phẩm";
		$view="views/loai_san_pham/v_sua_loai_san_pham.php";
		include("include/layout.php");	
		
	}
	

}


?> 