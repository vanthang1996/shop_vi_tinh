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
                  {if $thong_bao!=""}
                      <b >{$thong_bao}</b>
                      {/if}
				</div>
			</div>
			<script>
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
			</script>
		</div>
<!-- //login -->