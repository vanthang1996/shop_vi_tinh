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
          <label>Nhập tên loại:</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
          <th>Tên loại</th>
          <th>Mô tả</th>
          <th>Loại sản phẩm(loại cha)</th>
          <th>Hình</th>
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
       <?php foreach($loai_san_phams  as $loai_san_pham){?>
        <tr>
        
          <td><?=$loai_san_pham->ten_loai?></td>
          <td><?=$loai_san_pham->mo_ta?></td>
          <td><?=(isset($loai_cha[$loai_san_pham->ma_loai_cha]->ten_loai))? ($loai_cha[$loai_san_pham->ma_loai_cha]->ten_loai):""?></td>
         
          <td><?=$loai_san_pham->hinh?></td>
          <td><!-- Icons --> 
            <a href="sualoaisanpham.php?ma_loai=<?=$loai_san_pham->ma_loai ?>" title="Edit" > <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" /> </a> <a href="javaScript:void(0)" 
             onClick="Xoadulieu(<?php echo $loai_san_pham->ma_loai?>,'loai_san_pham','ma_loai')" title="Delete" > <img src="public/layout/resources/images/icons/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
