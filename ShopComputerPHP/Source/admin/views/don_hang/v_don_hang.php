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
          <label>Nhập tên khách hàng:</label>
          <input type="text" name="tim" class="text-input small-input" />
          &nbsp;
          <input class="button" type="submit" value="Tìm " name="btnTim" />
        </p>
      </form>
      </caption>
      <thead>
        <tr>
          <th>Ngày hóa đơn</th>
          <th>Khách hàng</th>
          <th>Trị giá</th>
          <th>Tiền đặt cọc</th>
          <th>Còn lại</th>
          <th>Hình thức thanh toán</th>
          <th>Ghi chú</th>
          <th>Trạng thái</th>
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
      <?php foreach($don_hangs  as $don_hang){?>
        <tr>
         
          <td><?=$don_hang->ngay_hd ?></td>
          <td><?=$khach_hangs[$don_hang->ma_khach_hang]->ten_khach_hang ?></td>
          <td><?=number_format($don_hang->tri_gia ,0,",",".")?> đ</td>
          <td><?=$don_hang->tien_dat_coc ?></td>
          <td><?=$don_hang->con_lai ?></td>
          <td><?=$don_hang->hinh_thuc_thanh_toan ?></td>
            <td><?=$don_hang->ghi_chu ?></td>
          <td><?=($don_hang->trang_thai=="0")?"Đang xử lý":(($don_hang->trang_thai=="1")?"Đã giao":"Hủy") ?></td>
          <td><!-- Icons --> 
            <a href="chitietdonhang.php?so_hoa_don=<?=$don_hang->so_hoa_don?>" title="View Detail" > <img src="public/layout/resources/images/icons/pencil.png" alt="View Detail" /> </a> <a href="javaScript:void(0)" title="Delete"  onClick="Xoadulieu(<?php echo $don_hang->so_hoa_don?>,'hoa_don','so_hoa_don')" > <img src="public/layout/resources/images/icons/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
