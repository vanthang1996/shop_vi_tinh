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
          <label>Nhập tên loại người dùng:</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
        <th>Tên loại người dùng</th>
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
      <?php  foreach($loai_nguoi_dungs as $loai_nguoi_dung){?>
        <tr>
          <td><input type="checkbox" /></td>
       <td><?=$loai_nguoi_dung->ten_loai_nguoi_dung?></td>
          <td><!-- Icons --> 
            <a href="sualoainguoidung.php?ma_loai_nguoi_dung=<?=$loai_nguoi_dung->ma_loai_nguoi_dung?>" title="Edit" > <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" /> </a> <a href="javaScript:void(0)" title="Delete"  onClick="Xoadulieu(<?php echo $loai_nguoi_dung->ma_loai_nguoi_dung?>,'loai_nguoi_dung','ma_loai_nguoi_dung')"> <img src="public/layout/resources/images/icons/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
