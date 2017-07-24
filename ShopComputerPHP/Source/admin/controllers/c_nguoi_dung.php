<?php
@session_start();
include_once("models/m_nguoi_dung.php");
class C_nguoi_dung {
	
	function Hien_thi_dang_nhap()
	{
		
		if(isset($_POST["login"]))
		{
			$ten=$_POST["name"];
			$mk=$_POST["password"];
			$this->luu_dang_nhap($ten,$mk);

		}
		if(isset($_SESSION["fullname"]) )
		{
			$title="shop máy tính | Admin";
			include("include/layout.php");	
		}
		else
		{
			$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
			header("location:index.php");	
		}
	}
	
	
	function luu_dang_nhap($ten,$mk)
	{
		$m_user=new M_nguoi_dung();
		$user=$m_user->Doc_admin($ten,$mk);
		$_SESSION['fullname']=$user->ho_ten;
		$_SESSION['ma_nguoi_dung']=  $user->ma_nguoi_dung;
		$_SESSION["loai_nguoi_dung"]=($m_user->Doc_loai_nguoi_dung_theo_ma_loai_nguoi_dung($user->ma_loai_nguoi_dung)->ten_loai_nguoi_dung);
	}
	
	
	function thoat_dang_nhap()
	{
		session_destroy();
		header("location:index.php");	
	}
	
	
	function Hien_thi_nguoi_dung(){
		//models
		//include  ("../models/m_nguoi_dung.php");
		$m_nguoi_dung  = new M_nguoi_dung();
		$nguoi_dungs = $m_nguoi_dung->Doc_nguoi_dung2();
		if(isset($_POST["tim"]))
		{
			$gt=$_POST["tim"];
			$nguoi_dungs=$m_nguoi_dung->Doc_nguoi_dung2($gt);
		}
		$loai_nguoi_dung = array();
		//include  ("../models/m_nguoi_dung.php");
		
		foreach($nguoi_dungs as $nguoi_dung){
			
			$loai_nguoi_dung[$nguoi_dung->ma_loai_nguoi_dung] = $m_nguoi_dung->	Doc_loai_nguoi_dung_theo_ma_loai_nguoi_dung($nguoi_dung->ma_loai_nguoi_dung);
		}
		
		
		
		$gt="";
			// Phân trang
		$count=count($nguoi_dungs);
	
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
			$nguoi_dungs=$m_nguoi_dung->Doc_nguoi_dung2($gt,$vt,$limit);
			$loai_nguoi_dung = array();
		//include  ("../models/m_nguoi_dung.php");
		
		foreach($nguoi_dungs as $nguoi_dung){
			
			$loai_nguoi_dung[$nguoi_dung->ma_loai_nguoi_dung] = $m_nguoi_dung->	Doc_loai_nguoi_dung_theo_ma_loai_nguoi_dung($nguoi_dung->ma_loai_nguoi_dung);
		}
		}	
		
		//views
		$title="Quản trị";
		$tieude="Danh sách người dùng";
		$view="views/nguoi_dung/v_nguoi_dung.php";
		include("include/layout.php");	
		
	}
	function Them_nguoi_dung(){
			$m_nguoi_dung  = new M_nguoi_dung();
			if(isset($_POST["btnCapnhat"])){
				$ma_loai_nguoi_dung =$_POST["loai_nguoi_dung"];
				$ho_ten =$_POST["ten_nguoi_dung"];
				$ten_dang_nhap=$_POST["ten_dang_nhap"];
				$mat_khau=md5($_POST["mat_khau"]);
				$email =$_POST["email"];
				$active=(isset($_POST["active"]) && $_POST["active"]=="on")?"1":"0";
				
				$ngay_dang_ky=date("Y-m-d h:i:s");
			
				
			$kq=$m_nguoi_dung->Them_nguoi_dung($ma_loai_nguoi_dung,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$ngay_dang_ky,$active);
				
			if($kq)
				{
					// Thành công
					echo "<script>alert('Hệ thống cập nhật thành công...')window.location='nguoidung.php'</script>";
			

				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}

			
			
			
			}
			$title="Quản trị";
		$tieude="Thêm người dùng";
		$view="views/nguoi_dung/v_them_nguoi_dung.php";
		include("include/layout.php");	
			}
	
	function   Sua_nguoi_dung(){
		
		 //models
		 $m_nguoi_dung=new M_nguoi_dung();
		if(isset($_GET["ma_nguoi_dung"]))
		{
			$ma_nguoi_dung=$_GET["ma_nguoi_dung"];
			$nguoi_dung = $m_nguoi_dung->Doc_nguoi_dung_theo_ma_nguoi_dung($ma_nguoi_dung);	
			
		}
		$loai_nguoi_dungs =  $m_nguoi_dung->Doc_loai_nguoi_dung();
		
				// Cập nhật
		if(isset($_POST["btnCapnhat"]))
		{
		$ma_nguoi_dung  =$_POST['ma_nguoi_dung'];
		$ma_loai_nguoi_dung = $_POST["ma_loai_nguoi_dung"];
		$ho_ten =$_POST['ho_ten'];
		$ten_dang_nhap =$_POST['ten_dang_nhap'];
		$mat_khau= (isset($_POST['check'])&&$_POST['check']=="on")?md5($_POST['mat_khau']):$_POST['pass'];
 
		 $email =  $_POST['email'];
		 $active = (isset($_POST['active'])&& $_POST['active']=="on") ? "1":"0";
		
			
		
				// Ghi dữ liệu database
			$m_nguoi_dung=new M_nguoi_dung();
			$kq=$m_nguoi_dung->Sua_nguoi_dung($ma_nguoi_dung,$ma_loai_nguoi_dung,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$active);
			
			if($kq)
				{
					// Thành công
					echo "<script>alert('Hệ thống cập nhật thành công...');window.location='nguoidung.php'</script>";
			

				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
		}
			
		
		 //views
		$title="Quản trị";
		$tieude="Sửa người dùng";
		$view="views/nguoi_dung/v_sua_nguoi_dung.php";
		include("include/layout.php");	
		
	}
	
	
	
	
}




?>