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
    <table width="804">
      <caption>
      <form method="post">
        <p>
          <label>Nhập tên sản phẩm:</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
          
          <th>Tên sản phẩm</th>
          <th >Loại sản phẩm</th>
          <th >Đơn giá</th>         
             <th >Số lần xem</th>              
               <th >Sản phẩm mới</th>
               <th >Thao tác</th>
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
      <?php foreach($san_phams as $san_pham){ ?>
        <tr>
          
          <td><?=$san_pham->ten_san_pham?></td>
          <td><?=(isset($loai_cha[$san_pham->ma_loai]->ten_loai))?($loai_cha[$san_pham->ma_loai]->ten_loai):""?></td>
           <td><?=$san_pham->don_gia?></td>
          <td><?=$san_pham->so_lan_xem?></td>
           <td><input type="checkbox" <?=($san_pham->san_pham_moi=="1")?"checked":""?>  disabled="disabled"/></td>
          <td><!-- Icons --> 
            <a href="suasanpham.php?ma_san_pham=<?=$san_pham->ma_san_pham?>" title="Edit" > <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" /> </a> <a href="javaScript:void(0)" title="Delete"  onClick="Xoadulieu(<?php echo $san_pham->ma_san_pham?>,'san_pham','ma_san_pham')" > <img src="public/layout/resources/images/icons/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
