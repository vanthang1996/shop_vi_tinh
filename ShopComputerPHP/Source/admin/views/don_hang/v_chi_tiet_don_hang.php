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
   					<h2 align="center">  Đơn hàng số <?=$so_hoa_don?></h2>
      </caption>
      <thead>
     
          <th>STT</th>
          <th>Tên sản phẩm</th>
          <th>Số lượng</th>
          <th>Đơn giá</th>
          <th>Thao tác</th>
        
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="6"><div class="pagination"  style="text-align:center;">
            
            </div>
            <div class="clear"></div></td>
        </tr>
      </tfoot>
      <tbody>
      <?php foreach ($chi_tiet_don_hang as $chi_tiet){?>
        <tr>
          <td><?=$chi_tiet->stt?></td>
         
          <td><?=$san_phams[$chi_tiet->ma_san_pham]->ten_san_pham?></td>
          <td><?=$chi_tiet->so_luong?></td>
            <td><?=number_format($chi_tiet->don_gia	,0,",",".")?> đ</td>
          <td><a href="javaScript:void(0)" title="Delete"  onClick="Xoadulieu(<?php echo $chi_tiet->stt?>,'ct_hoa_don','stt')" > <img src="public/layout/resources/images/icons/cross.png" alt="Delete" /> </a></td></td>
          
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>
