	<?php 
include  ("models/m_khach_hang.php");
class C_khach_hang{
	function Hien_thi_khach_hang(){
		//models
		//include  ("../models/m_khach_hang.php");
		$m_khach_hang  = new M_khach_hang();
		
		$khach_hangs=$m_khach_hang->Doc_khach_hang();
		if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$khach_hangs=$m_khach_hang->Doc_khach_hang($gt);
		}
		
		
			$gt="";
			// Phân trang
		$count=count($khach_hangs);
	
		if($count>4)
		{
			if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$khach_hangs=$m_khach_hang->Doc_khach_hang($gt);
		}
			
			
			include("Pager.php");
			$pager=new pager();
			$limit=4;
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$pager->pageList($curpage,$pages);
				// Đọc lại
			$khach_hangs=$m_khach_hang->Doc_khach_hang($gt,$vt,$limit);
			
			
		}
		
		//views
		$title="Quản trị";
		$tieude="Danh sách khách hàng";
		$view="views/khach_hang/v_khach_hang.php";
		include("include/layout.php");	
		
	}
	function   Them_khach_hang(){
		
		 //models
		
				// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
	$ten_khach_hang =$_POST['ten_khach_hang'];
	$mat_khau = md5($_POST['mat_khau']);
		 $phai =(isset($_POST["phai"]) && $_POST["phai"]=="on")?"1":"0"; 
		$dia_chi= $_POST['dia_chi'];
 		$dien_thoai= $_POST['dien_thoai'];
		 $ngay_sinh= date("Y-m-d h:i:s",strtotime($_POST['ngay_sinh']));
		 $email =  $_POST['email'];
		
			
		
				// Ghi dữ liệu database
			$m_khach_hang=new M_khach_hang();
			$kq=$m_khach_hang->Them_khach_hang( $ten_khach_hang, $mat_khau, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email);
			
			if($kq)
				{
					// Thành công
					echo "<script>alert('Hệ thống cập nhật thành công...');window.location='khachhang.php'</script>";
			
					
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
		}
		 //views
		$title="Quản trị";
		$tieude="Thêm khách hàng";
		$view="views/khach_hang/v_them_khach_hang.php";
		include("include/layout.php");	
		
	}
	function   Sua_khach_hang(){
		
		 //models
		 $m_khach_hang=new M_khach_hang();
		if(isset($_GET["ma_khach_hang"]))
		{
			$ma_khach_hang=$_GET["ma_khach_hang"];
			$khach_hang = $m_khach_hang->Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang);	
			
		}
				
			// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
		$ma_khach_hang  =$_POST['ma_khach_hang'];
	$ten_khach_hang =$_POST['ten_khach_hang'];
		 $phai =(isset($_POST["phai"]) && $_POST["phai"]=="on")?"1":"0"; 
		$dia_chi= $_POST['dia_chi'];
 $dien_thoai= $_POST['dien_thoai'];
		 $ngay_sinh= date("Y-m-d h:i:s",strtotime($_POST['ngay_sinh']));
		 $email =  $_POST['email'];
		
			
		
				// Ghi dữ liệu database
			$m_khach_hang=new M_khach_hang();
			$kq=$m_khach_hang->Sua_khach_hang($ma_khach_hang,$ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email);
			
			if($kq)
				{
					// Thành công
					echo "<script>alert('Hệ thống cập nhật thành công...');window.location='khachhang.php'</script>";
			
					
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
		}
				
		
		 //views
		$title="Quản trị";
		$tieude="Sửa khách hàng";
		$view="views/khach_hang/v_sua_khach_hang.php";
		include("include/layout.php");	
		
	}

}


?> 