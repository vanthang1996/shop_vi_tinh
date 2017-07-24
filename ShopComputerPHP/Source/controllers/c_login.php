<?php 
@session_start();
include("controllers/Smarty_vi_tinh.php");
include("models/m_khach_hang.php");
class C_login{
 function hien_thi_trang_login(){
 		//models
		$thong_bao="";
		if(isset($_POST["btnDangNhap"]))
		{ 
		 
			$email=$_POST["dn_email"];
			$mat_khau=$_POST["dn_mat_khau"];	
			$m_khach_hang=new M_khach_hang();
			$kq=$m_khach_hang->Dang_nhap($email,md5($mat_khau));
			print_r($kq);
			if($kq)
			{
				// Lưu session 
				$_SESSION["khach_hang"] = $kq;	
				header("location:login.php");
			}else{
				$thong_bao="Email hoặc mật khẩu sai!";
			}
		}
		if(isset($_POST["btnDangKy"]))
		{
			$m_khach_hang=new M_khach_hang();
			
			$ten_khach_hang=$_POST["dk_ten_khach_hang"];
			$mat_khau=$_POST["dk_mat_khau"];
			$phai=$_POST["dk_phai"];
			$email=$_POST["dk_email"];
			$dia_chi=$_POST["dk_dia_chi"];
			$dien_thoai=$_POST["dk_dien_thoai"];
			$ngay_sinh=$_POST["dk_ngay_sinh"];
			// Kiểm tra mail là duy nhất
			$kq=$m_khach_hang->Kiem_tra_email($email);
			 $date = explode('/', $ngay_sinh);
			
			if(!$kq)
			{
				
				$kq=$m_khach_hang->Dang_ky($ten_khach_hang,$mat_khau,$phai,date("Y-m-d", mktime(0,0,0
,$date[0],$date[1],$date[2])),$dia_chi,$dien_thoai,$email);
				if($kq)
				{
					$thong_bao="Bạn đăng ký thành công. Đăng nhập vào website của chúng tôi để mua hàng";	
				}
				else
				{
					$thong_bao="Đã có lỗi xảy ra trong quá trình đăng ký. Bạn hãy làm lại...";
				}
			}
			else
			{
				$thong_bao="Email của bạn đã tồn tại trong hệ thống website của chúng tôi";	
			}
			}
		//views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Vi tính online");
		$view = "views/login/v_login.tpl";
			include("controllers/c_nav.php");
		$smarty->assign("navs",$navs);
		$smarty->assign("subs",$subs);
		$smarty->assign("view",$view);
		$smarty->assign("thong_bao",$thong_bao);
		$smarty->display("login/layout.tpl");
 
 }
  function hien_thi_trang_quen_mat_khau(){
	$thong_bao="";
	if(isset($_POST["btnForget"])){
		$email = $_POST["dn_email"];
		$m_khach_hang = new M_khach_hang();
		 if(count($m_khach_hang->Kiem_tra_email($email))>0){
			 
		
		$mk = rand();
		
		
		
		 $record =  $m_khach_hang->Doi_mat_khau($email,$mk);
		 
		 
		
		require_once("public/smtpgmail/class.phpmailer.php");
	$mail=new PHPMailer();
	$mail->IsSMTP(); // Chứng thực SMTP
	$mail->SMTPAuth=TRUE;
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;
	$mail->SMTPSecure="ssl";
	/* Server google*/
	$mail->Username="vanthang20437@gmail.com"; // Nhập mail 
	$mail->Password="Thang123"; // Mật khẩu
	/* Server google*/
	$mail->CharSet="utf-8";
	$noidung="Họ tên:  Xác nhận mail  " ;	
	$noidung .="Email: " .$email;
	$noidung .="<hr><br>Chủ đề: Yêu cầu đổi mật khẩu!" ;
	
	$noidung .="<br>Mật khẩu mới: ". $mk ;
	$mail->SetFrom($email,"Auto mail");
	$mail->Subject="Đăng ký nhận  tin!";
	$mail->MsgHTML($noidung);
	$mail->AddAddress($email,"Khách hàng"); // Mail người nhận// mail người quan trị nhận xuqwr lý
	//$path="http://tophinhanhdep.net/wp-content/uploads/2015/12/anh-dep-mua-xuan-5.jpg";
//	$mail->AddAttachment($path,"Ảnh trên mạng");
	$mail->send();
	$thong_bao= "Kiểm tra email của bạn";
}else {
	$thong_bao = "Email không tồn tại !";
	}
	}
		
		//views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Vi tính online");
		$view = "views/login/v_forget.tpl";
			include("controllers/c_nav.php");
		$smarty->assign("navs",$navs);
		$smarty->assign("subs",$subs);
		$smarty->assign("view",$view);
		$smarty->assign("thong_bao",$thong_bao);
		$smarty->display("login/layout.tpl");
  }



}?>