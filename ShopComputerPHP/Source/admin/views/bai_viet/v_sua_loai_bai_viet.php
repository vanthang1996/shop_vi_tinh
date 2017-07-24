<div class="content-box-header">
  <h3><?=$tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post" enctype="multipart/form-data" >
    <input type="hidden"  name="ma_loai_bai_viet" value="<?=$loai_bai_viet->ma_loai_bai_viet?>"/>
        <fieldset>
          <p>
            <label>Nhập tên loại bài viết</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tên loại bài viết" type="text" id="ten_loai_bai_viet" name="ten_loai_bai_viet" value="<?=$loai_bai_viet->ten_loai_bai_viet?>"/>
          </p>
           <p>
            <label for="mo_ta">Mô tả</label>
            <textarea cols="50" rows="3" class="text-input textarea wysiwyg" data_error="Nhập mô tả" id="mo_ta" name="mo_ta" ><?=$loai_bai_viet->mo_ta?></textarea>
          </p>
          <p>
            <label>Chọn  loại bài viết(loại cha)</label>
         
             <select  class="text-input small-input  "  id="loai_cha" name="loai_cha">
             <?php if($loai_chas && $loai_bai_viet->ma_loai_cha!=0) foreach($loai_chas as $loai){?>
             <option value="<?=$loai->ma_loai_bai_viet?>" <?=($loai->ma_loai_bai_viet==$loai_bai_viet->ma_loai_cha)?"selected":""?>><?=$loai->ten_loai_bai_viet?></option>
             <?php } ?>
             </select>
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