<?php
$email = $_POST["Email"];

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
	$noidung="Họ tên:  auto mail" ;	
	$noidung .="Email:" .$email;
	$noidung .="<hr><br>Chủ đề: Đăng ký nhận  tin!" ;
	$noidung .="<br>Nội dung: Bạn sẽ được cập nhật những thông tin sản phẩm  của websites chúng tôi!" ;
	$mail->SetFrom($email,"Auto mail");
	$mail->Subject="Đăng ký nhận  tin!";
	$mail->MsgHTML($noidung);
	$mail->AddAddress($email,"Khách hàng"); // Mail người nhận// mail người quan trị nhận xuqwr lý
	/*$path="http://tophinhanhdep.net/wp-content/uploads/2015/12/anh-dep-mua-xuan-5.jpg";
	$mail->AddAttachment($path,"Ảnh trên mạng");*/
	if(!$mail->Send())
	{
		echo "0";
	}
	else
	{
		include("models/m_nhan_tin.php");
		  $x = new M_nhan_tin();
			$x->Them_nhan_tin($email);
	}

	?>
