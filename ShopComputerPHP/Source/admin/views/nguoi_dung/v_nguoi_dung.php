<div class="content-box-header">
  <h3>
    <?=$tieude ?>
    <label id="kqXoa"></label>
  </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <caption>
      <form method="post">
        <p>
          <label>Nhập tên người dùng:</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
         
          <th>Họ tên</th>
          <th>Tên đăng nhập</th>
          <th>Email</th>
          <th>Ngày đăng ký</th>
          <th>Ngày đăng nhập cuối</th>
          <th>Loại người dùng</th>
          <th>Active</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="6"><div class="pagination"  style="text-align:center;">
            <?=(isset($lst)?$lst:"")?>
            </div>
            <div class="clear"></div></td>
        </tr>
      </tfoot>
      <tbody>
      <?php foreach($nguoi_dungs as $nguoi_dung){?>
        <tr>
         
          <td><?=$nguoi_dung->ho_ten?></td>
          <td><?=$nguoi_dung->ten_dang_nhap?></td>
          <td><?=$nguoi_dung->email?></td>
          <td><?=$nguoi_dung->ngay_dang_ky?></td>
          <td><?=$nguoi_dung->ngay_dang_nhap_cuoi?></td>
  <td><?=$loai_nguoi_dung[$nguoi_dung->ma_loai_nguoi_dung]->ten_loai_nguoi_dung?></td>
          <td><input type="checkbox"  <?=($nguoi_dung->active=="1")?"checked":""?>  disabled="disabled" /></td>
          <td><!-- Icons --> 
            <a href="suanguoidung.php?ma_nguoi_dung=<?=$nguoi_dung->ma_nguoi_dung?>" title="Edit" > <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" /> </a> <a href="javaScript:void(0)" title="Delete"  onClick="Xoadulieu(<?php echo $nguoi_dung->ma_nguoi_dung?>,'nguoi_dung','ma_nguoi_dung')"> <img src="public/layout/resources/images/icons/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
