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
            <label>Nhập tên khách hàng</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tên khách hàng" type="text" id="ten_khach_hang" name="ten_khach_hang" />
          </p>
         
           <p>
            <label for="mat_khau">Mật khẩu</label>
            <input type="text" class="text-input small-input kiemtra " data_error="Nhập mật khẩu" id="mat_khau" name="mat_khau" >
          </p>
          
           <p>
            <label for="phai">Phái (Nam v)<input type="checkbox"  id="phai" name="phai" /></label>
            
          </p>
          
           <p>
            <label for="ngay_sinh">Ngày sinh</label>
            <input class="text-input small-input kiemtra "  type="date" data_error="Nhập ngày sinh" id="ngay_sinh" name="ngay_sinh" >
          </p>
            <p>
            <label for="dia_chi">Địa chỉ</label>
            <input type="text" class="text-input small-input kiemtra" data_error="Nhập địa chỉ " id="dia_chi" name="dia_chi" >
          </p>
           <p>
            <label for="dien_thoai">Điện thoại</label>
            <input type="text" class="text-input small-input kiemtra "  data_error="Nhập điện thoại " id="dien_thoai" name="dien_thoai" >
          </p>
           <p>
            <label for="email">Email</label>
            <input type="email" class="text-input small-input kiemtra "  data_error="Nhập email " id="email" name="email" >
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
  
</div>