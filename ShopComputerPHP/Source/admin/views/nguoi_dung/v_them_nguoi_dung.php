<div class="content-box-header">
  <h3><?=$tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post" enctype="multipart/form-data" >
        <fieldset>
          <p>
            <label>Nhập họ tên người dùng</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tên loại bài viết" type="text" id="ten_nguoi_dung" name="ten_nguoi_dung" />
          </p>
          <p>
            <label>Tên đăng nhập</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tên loại bài viết" type="text" id="ten_dang_nhap" name="ten_dang_nhap" />
          </p>
           <p>
            <label>Loại người dùng</label>
            <select name="loai_nguoi_dung" id="loai_nguoi_dung" class="text-input small-input kiemtra" >
            	
            
            </select>
          </p>
         
           <p>
            <label for="mat_khau">Mật khẩu</label>
            <input type="password" class="text-input small-input kiemtra " data_error="Nhập mật khẩu" id="mat_khau" name="mat_khau" >
          </p>
           <p>
            <label for="email">Email</label>
            <input type="email" class="text-input small-input kiemtra "  data_error="Nhập email " id="email" name="email" >
          </p>
         
          
           
            <p>
            <label for="active">Active<input type="checkbox"  id="active" name="active" /></label>
            
          </p>
          
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()"/>
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='quantri.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  <script>
  $(document).ready(function(e) {
  		$.ajax({
			url:"xl_loai_nguoi_dung.php",
			success: function(data){
				$("#loai_nguoi_dung").html(data);
			}
			
			
			});  
});
  
  </script>
  
</div>