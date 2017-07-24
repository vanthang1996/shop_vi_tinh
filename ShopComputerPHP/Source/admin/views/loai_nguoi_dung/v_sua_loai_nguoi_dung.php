<div class="content-box-header">
  <h3><?=$tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post" enctype="multipart/form-data" >
    <input type="hidden" name="ma_loai_nguoi_dung" value="<?=$loai_nguoi_dung->ma_loai_nguoi_dung?>" />
        <fieldset>
         
          <p>
            <label>Nhập tên loại người dùng</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tên loại người dùng" type="text" id="ten_loai_nguoi_dung" name="ten_loai_nguoi_dung" value="<?=$loai_nguoi_dung->ten_loai_nguoi_dung?>"/>
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