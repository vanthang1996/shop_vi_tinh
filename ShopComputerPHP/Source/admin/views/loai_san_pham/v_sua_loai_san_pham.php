<div class="content-box-header">
  <h3><?=$tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post" enctype="multipart/form-data" >
    <input type="hidden" name="ma_loai" value="<?=$loai_san_pham->ma_loai?>"/>
     <input type="hidden"  name="hinh_tmp"  value="<?=($loai_san_pham->hinh=="")?"no_image.jpg":$loai_san_pham->hinh?>"/>
        <fieldset>
          <p>
            <label>Nhập tên loại sản phẩm</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tên loại sản phẩm" type="text" id="ten_loai" name="ten_loai" value="<?=$loai_san_pham->ten_loai?>"  style="width:100% !important;"/>
          </p>
           <p>
            <label for="mo_ta">Mô tả</label>
            <textarea cols="50" rows="3" class="text-input textarea wysiwyg" data_error="Nhập mô tả" id="mo_ta" name="mo_ta" ><?=$loai_san_pham->mo_ta?></textarea>
          </p>
          <p>
            <label>Chọn  loại sản phẩm(loại cha)</label>
         
             <select  class="text-input small-input  "  id="loai_cha" name="loai_cha">
            <?php if($loai_san_phams && $loai_san_pham->ma_loai_cha!=0){ foreach($loai_san_phams as $loai){ ?>
             <option <?=($loai->ma_loai==$loai_san_pham->ma_loai_cha)?"selected":""?> value="<?=$loai->ma_loai?>"><?=$loai->ten_loai?></option>
              <?php } }else { ?>
             <option value="0">Loại cha</option>
             
             <?php }?>
             </select>
          </p> 
           <p>
            <label>Hình loại sản phẩm</label>
            <input type="file" name="hinh" id="hinh"  link="../public/layout/images/<?=$loai_san_pham->hinh?>"/>
            <div class="image-holder" id="image-holder"></div>
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