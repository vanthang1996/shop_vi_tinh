<?php 
include("controllers/Smarty_vi_tinh.php");
class C_mailus{
 function hien_thi_trang_mailus(){
 		//models
		if(isset($_POST['th_gui']))
{
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
	$noidung=" Họ tên:" .$_POST["th_hoten"];	
	$noidung .=" Email:" .$_POST["th_email"];
	$noidung .="<hr><br> Chủ đề:" .$_POST["th_chude"];
	$noidung .="<br> Nội dung:" .$_POST["th_noidung"];
	$noidung .="<br> Số điện thoại:" .$_POST["th_dienthoai"];
	$mail->SetFrom($_POST["th_email"],$_POST["th_hoten"]);
	$mail->Subject=$_POST["th_chude"];
	$mail->MsgHTML($noidung);
	$mail->AddAddress("14130118@st.hcmuaf.edu.vn","Super Admin"); // Mail người nhận// mail người quan trị nhận xuqwr lý
	//$path="http://tophinhanhdep.net/wp-content/uploads/2015/12/anh-dep-mua-xuan-5.jpg";
//	$mail->AddAttachment($path,"Ảnh trên mạng");
	
		if(!$mail->Send())
		{
			$thong_bao =  "Mail lỗi".$mail->ErrorInfo;
		}
		else
		{
			$thong_bao =  "Gửi mail thành công";
		}
		if(isset($thong_bao)){
			echo "<script>alert($thong_bao)</script>";
		}
	
}
		
		//views
		$smarty=new Smarty_vi_tinh();
		$smarty->assign("title","Vi tính online");
		$view = "views/mailus/v_mailus.tpl";
			include("controllers/c_nav.php");
		$smarty->assign("navs",$navs);
		$smarty->assign("subs",$subs);
		$smarty->assign("view",$view);
		$smarty->display("mailus/layout.tpl");
 
 }

}

?>