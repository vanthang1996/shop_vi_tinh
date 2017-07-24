<div class="content-box-header">
  <h3><?=$tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post" enctype="multipart/form-data" >
    <input type="hidden"  name="hinh_tmp"  value="<?=($san_pham->hinh=="")?"no_image.jpg":$san_pham->hinh?>"/>
    <input type="hidden" name="ma_san_pham"  value="<?=$san_pham->ma_san_pham?>"/>
        <fieldset>
          <p>
            <label>Nhập tên sản phẩm</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tên sản phẩm" type="text" id="ten_san_pham" name="ten_san_pham" value="<?=$san_pham->ten_san_pham?>" style="width:100% !important;" />
          </p>
          <p>
            <label>Chọn  loại sản phẩm</label>
         
             <select  class="text-input small-input kiemtra "  id="ma_loai" name="ma_loai">
             <?php  foreach($loai_san_phams as $loai_san_pham){ ?>
             <option <?=($loai_san_pham->ma_loai==$san_pham->ma_loai)?"selected":""?>  value="<?=$loai_san_pham->ma_loai?>"><?=$loai_san_pham->ten_loai?></option>
              <?php } ?>
             </select>
          </p> 
           <p>
            <label for="mo_ta_tom_tat">Nội dung tóm tắt</label>
            <textarea cols="50" rows="3" class="text-input textarea wysiwyg" data_error="Nhập nội dung tóm tả" id="mo_ta_tom_tat" name="mo_ta_tom_tat" ><?=$san_pham->mo_ta_tom_tat?></textarea>
          </p>
           <p>
            <label  for="mo_ta_chi_tiet">Nội dung  chi tiết</label>
            <textarea cols="50" rows="5" class="text-input large-input ckeditor" data_error="Nhập nội dung chi tiêt" id="mo_ta_chi_tiet" name="mo_ta_chi_tiet"><?=$san_pham->mo_ta_chi_tiet?></textarea>
          </p>
           <p>
            <label>Đơn giá</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tên loại bài viết" type="number" min="0" id="don_gia" name="don_gia"  value="<?=$san_pham->don_gia?>" />
          </p>
           <p>
            <label>Hình sản phẩm</label>
            <input type="file" name="hinh" id="hinh" link="../public/layout/images/<?=$san_pham->hinh?>"  />
            <div class="image-holder" id="image-holder"></div>
		  </p> 
           <p>
            <label for="san_pham_moi">Sản phẩm mới  <input type="checkbox" name="san_pham_moi"  id="san_pham_moi" /></label>
          
           
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