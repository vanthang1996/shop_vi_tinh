<?php
/* Smarty version 3.1.30, created on 2016-12-11 10:35:02
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\views\login\v_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584d1dc6b35d14_92028149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f6d960fa4d39ea2415df998141f183776f9674' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\views\\login\\v_login.tpl',
      1 => 1481076734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584d1dc6b35d14_92028149 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- login -->
		<div class="w3_login">
			<h3>Đăng nhập & Đăng ký</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Đăng ký</div>
				  </div>
				  <div class="form">
					<h2>Đăng nhập vào tài khoản của bạn</h2>
					<form action="#" method="post">
					  <input type="text" name="dn_email" placeholder="Email.." required>
					  <input type="password" name="dn_mat_khau" placeholder="Mật khẩu" required>
					  <input type="submit" name="btnDangNhap" value="Đăng nhập">
                      
					</form>
				  </div>
				  <div class="form">
					<h2>Tạo tài khoản mới</h2>
					<form action="#" method="post">
					  <input type="email" name="dk_email"   class="dk_email" placeholder="Email" required>
                      <input type="password" name="dk_mat_khau" placeholder="Mật khẩu" required>
                      <input type="text" name="dk_ten_khach_hang" placeholder="Họ và tên" required>
                      <p>
                        <input type="radio" name="dk_phai" id="nam" value="0" checked="checked" />
                        <label for="nam">Nam</label>
                      
                        <input type="radio" name="dk_phai" id="nu" value="1" />
                        <label for="nu">Nữ</label>
                        </p>
                   
                      				  <input type="text" name="dk_dien_thoai" placeholder="Số điện thoại" required>
                       <input type="text" name="dk_dia_chi" placeholder="Địa chỉ" required>
                            <input type="text" id="datepicker" name="dk_ngay_sinh" placeholder="Ngày sinh" required>
					  <input type="submit" name="btnDangKy" value="Đăng ký">
                      					</form>
				  </div>
				  <div class="cta"><a href="login.php?forget=true">Quên mật khẩu?</a></div>
                  <?php if ($_smarty_tpl->tpl_vars['thong_bao']->value != '') {?>
                      <b ><?php echo $_smarty_tpl->tpl_vars['thong_bao']->value;?>
</b>
                      <?php }?>
				</div>
			</div>
			<?php echo '<script'; ?>
>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			<?php echo '</script'; ?>
>
		</div>
<!-- //login --><?php }
}
