<div class="content-box-header">
  <h3><?=$tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post" enctype="multipart/form-data" >
    <input type="hidden"   name="ma_nguoi_dung"  value="<?=$nguoi_dung->ma_nguoi_dung?>"/>
    <input type="hidden"  name="pass" value="<?=$nguoi_dung->mat_khau?>"/>
   
        <fieldset>
          <p>
            <label>Nhập họ tên người dùng</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tên loại bài viết" type="text" id="ho_ten" name="ho_ten" value="<?=$nguoi_dung->ho_ten?>" />
          </p>
          <p>
            <label>Tên đăng nhập</label>
            <input class="text-input small-input kiemtra " data_error="Nhập tên loại bài viết" type="text" id="ten_dang_nhap" name="ten_dang_nhap"  value="<?=$nguoi_dung->ten_dang_nhap?>"/>
          </p>
         
           <p>
            <label for="mat_khau">Mật khẩu</label>
            <input type="text" class="text-input small-input  " data_error="Nhập mật khẩu" id="mat_khau" name="mat_khau" ><input type="checkbox"  id="check" name="check" />
          </p>
           <p>
            <label for="email">Email</label>
            <input type="email" class="text-input small-input kiemtra "  data_error="Nhập email " id="email" name="email"value="<?=$nguoi_dung->email?>" >
          </p>
         
          <p>
            <label>Chọn loại người dùng</label>
         
             <select  class="text-input small-input  "  id="ma_loai_nguoi_dung" name="ma_loai_nguoi_dung">
             <?php  foreach($loai_nguoi_dungs as $loai){?>
             <option value="<?=$loai->ma_loai_nguoi_dung?>" <?=($loai->ma_loai_nguoi_dung==$nguoi_dung->ma_loai_nguoi_dung)?"selected":""?>><?=$loai->ten_loai_nguoi_dung?></option>
             <?php } ?>
             </select>
          </p>  
           
            <p>
            <label for="active">Active<input type="checkbox"  id="active" name="active"  <?=($nguoi_dung->active=="1")?"checked":""?>/></label>
            
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