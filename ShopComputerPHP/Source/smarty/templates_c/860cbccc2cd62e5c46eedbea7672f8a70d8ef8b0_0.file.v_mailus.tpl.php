<?php
/* Smarty version 3.1.30, created on 2016-12-16 18:14:13
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\views\mailus\v_mailus.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585420e592d450_64097724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '860cbccc2cd62e5c46eedbea7672f8a70d8ef8b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\views\\mailus\\v_mailus.tpl',
      1 => 1481908308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585420e592d450_64097724 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- mail -->

		<div class="mail">
			<h3>Liên hệ</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-4 agileinfo_mail_grid_left">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i></li>
						<li>Địa chỉ<span>357 LÊ HỒNG PHONG, Q10, TPHCM.</span></li>
					</ul>
					<ul>
						<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
						<li>Email<span><a href="mailto:info@example.com">technology@gmail.com</a></span></li>
					</ul>
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i></li>
						<li>Điện thoại<span>(+84) 120 3947 318</span></li>
					</ul>
				</div>
				<div class="col-md-8 agileinfo_mail_grid_right">
					<form action="#" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="th_hoten" placeholder="Họ tên...*" required>
							<input type="email" name="th_email" placeholder="Email...*" required>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="th_dienthoai" placeholder="Điện thoại...*" required>
							<input type="text" name="th_chude" placeholder="Chủ đề...*" required>
						</div>
						<div class="clearfix"> </div>
						<textarea  name="th_noidung" placeholder="Nội dung..." required></textarea>
						<input type="submit" name="th_gui" value="Gửi">
						<input type="reset" value="Nhập lại">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //mail --><?php }
}
