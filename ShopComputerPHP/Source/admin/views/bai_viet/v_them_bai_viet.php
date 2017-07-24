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
            <label for="tieu_de">Tiêu đề</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tiêu đề" type="text" id="tieu_de" name="tieu_de" />
          </p>
          <p>
            <label for="noi_dung_tom_tat">Nội dung tóm tắt</label>
            <textarea cols="50" rows="3" class="text-input textarea wysiwyg" data_error="Nhập nội dung tóm tắt" id="noi_dung_tom_tat" name="noi_dung_tom_tat" ></textarea>
          </p>
           <p>
            <label  for="noi_dung_chi_tiet">Nội dung  chi tiết</label>
            <textarea cols="50" rows="5" class="text-input large-input ckeditor" data_error="Nhập nội dung chi tiêt" id="noi_dung_chi_tiet" name="noi_dung_chi_tiet"></textarea>
          </p>
          <p>
            <label  for="ngay_het_han">Ngày hết hạn</label>
            <input class="text-input small-input datepicker"  type="date" id="ngay_het_han" data_error="Nhập ngày hết hạn" name="ngay_het_han" />
          </p>
           <p>
            <label>Chọn  loại bài viết</label>
         
             <select  class="text-input small-input  "  id="ma_loai_bai_viet" name="ma_loai_bai_viet">
             <?php  foreach($loai_bai_viets as $loai){?>
             <option value="<?=$loai->ma_loai_bai_viet?>" ><?=$loai->ten_loai_bai_viet?></option>
             <?php } ?>
             </select>
          </p>  
           <p>
            <label  for="xuat_ban">Xuất bản   <input  type="checkbox"  id="xuat_ban"  name="xuat_ban"/> </label>
           
          
          </p>
       
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiemtradulieu()"/>
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='khoahoc.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>