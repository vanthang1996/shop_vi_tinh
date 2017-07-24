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
          <label>Nhập tiêu đề bài viết:</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
          <th>Tiêu đề</th>
          <th>Ngày hết hạn</th>
          <th>Số lần xem</th>
          <th>Xuất bản</th>
          <th>Thao tác</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="6"><div class="pagination"  style="text-align:center;">
             <div style="clear:both; text-align:center"><?=(isset($lst))?$lst:"" ?></div>  
            </div>
            <div class="clear"></div></td>
        </tr>
      </tfoot>
      <tbody>
      <?php  foreach($bai_viets  as $bai_viet){?>
        <tr>
          <td><?=$bai_viet->tieu_de?></td>
          <td><?=$bai_viet->ngay_het_han?></td>
          <td><?=$bai_viet->so_lan_xem?></td>
          <td><input  type="checkbox"  id="xuat_ban"  name="xuat_ban"  disabled="disabled"  <?=($bai_viet->xuat_ban=="1")?"checked":""?>/></td>
          <td><!-- Icons --> 
            <a href="suabaiviet.php?ma_bai_viet=<?=$bai_viet->ma_bai_viet?>" title="Edit" > <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" /> </a> <a href="javaScript:void(0)"  onClick="Xoadulieu(<?php echo $bai_viet->ma_bai_viet?>,'bai_viet','ma_bai_viet')" title="Delete" > <img src="public/layout/resources/images/icons/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
