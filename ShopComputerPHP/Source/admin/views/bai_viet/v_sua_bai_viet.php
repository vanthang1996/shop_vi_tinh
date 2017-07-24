<div class="content-box-header">
  <h3><?=$tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post" enctype="multipart/form-data" >
    <input type="hidden"   name="ma_bai_viet" value="<?=$bai_viet->ma_bai_viet?>"/>
     <input type="hidden"   name="ma_nguoi_dung" value="<?=$bai_viet->ma_nguoi_dung?>"/>
      <input type="hidden"   name="ma_loai_bai_viet" value="<?=$bai_viet->ma_loai_bai_viet?>"/>
        <fieldset>
          <p>
            <label for="tieu_de">Tiêu đề</label>
            <input  style="" class="text-input small-input kiemtra " data_error="Nhập tiêu đề" type="text" id="tieu_de" name="tieu_de"  value="<?=$bai_viet->tieu_de?>"/>
          </p>
          <p>
            <label for="noi_dung_tom_tat">Nội dung tóm tắt</label>
            <textarea cols="50" rows="3" class="text-input textarea wysiwyg" data_error="Nhập nội dung tóm tắt" id="noi_dung_tom_tat" name="noi_dung_tom_tat"  ><?=$bai_viet->noi_dung_tom_tat?></textarea>
          </p>
           <p>
            <label  for="noi_dung_chi_tiet">Nội dung  chi tiết</label>
            <textarea cols="50" rows="5" class="text-input large-input ckeditor" data_error="Nhập nội dung chi tiêt" id="noi_dung_chi_tiet" name="noi_dung_chi_tiet"  ><?=$bai_viet->noi_dung_chi_tiet?></textarea>
          </p>
          <p>
            <label  for="ngay_het_han">Ngày hết hạn</label>
            <input class="text-input small-input"  id="ngay_het_han" data_error="Nhập ngày hết hạn" name="ngay_het_han" value="<?=date("Y-m-d",strtotime($bai_viet->ngay_het_han))?>" type="date"/>
          </p>
           <p>
            <label  for="xuat_ban">Xuất bản   <input  type="checkbox"  id="xuat_ban"  name="xuat_ban" <?=($bai_viet->xuat_ban=="1")?"checked":""?>/> </label>
           
          
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