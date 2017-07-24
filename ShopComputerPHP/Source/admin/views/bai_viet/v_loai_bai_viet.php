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
          <label>Nhập tên loại bài viết</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
         <th>Tên loại bài viết</th>
            <th>Mô tả</th>
            <th>Loại cha</th>
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
      <?php foreach($loai_bai_viets as $loai_bai_viet){ ?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><?=$loai_bai_viet->ten_loai_bai_viet?></td>
          <td><?=$loai_bai_viet->mo_ta?></td>
     
        
          <td><?=(isset($loai_cha[$loai_bai_viet->ma_loai_cha]->ten_loai_bai_viet)?$loai_cha[$loai_bai_viet->ma_loai_cha]->ten_loai_bai_viet:"")?></td>
          <td><!-- Icons --> 
            <a href="sualoaibaiviet.php?ma_loai_bai_viet=<?=$loai_bai_viet->ma_loai_bai_viet?>" title="Edit" > <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" /> </a> <a href="javaScript:void(0)" title="Delete"  onClick="Xoadulieu(<?php echo $loai_bai_viet->ma_loai_bai_viet?>,'loai_bai_viet','ma_loai_bai_viet')" > <img src="public/layout/resources/images/icons/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php  }?>
      </tbody>
    </table>
  </div>
</div>
