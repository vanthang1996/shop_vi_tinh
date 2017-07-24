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
         
          <th>Tên khách hàng</th>
          <th>Phái</th>
          <th>Ngày sinh</th>
           
             <th>Địa chỉ</th>
              <th>Điện thoại</th>
               <th>Email</th>
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
      <?php foreach($khach_hangs  as $khach_hang){ ?>
        <tr>
         
          <td><?=$khach_hang->ten_khach_hang?></td>
          <td><?=($khach_hang->phai==1)?"Nam":"Nữ"?></td>
           <td><?=$khach_hang->ngay_sinh?></td>
          <td><?=$khach_hang->dia_chi?></td>
          <td><?=$khach_hang->dien_thoai?></td>
         
          <td><?=$khach_hang->email?></td>
       
          <td><!-- Icons --> 
            <a href="suakhachhang.php?ma_khach_hang=<?=$khach_hang->ma_khach_hang?>" title="Edit" > <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" /> </a> <a href="javaScript:void(0)" title="Delete"  onClick="Xoadulieu(<?php echo $khach_hang->ma_khach_hang?>,'khach_hang','ma_khach_hang')" > <img src="public/layout/resources/images/icons/cross.png" alt="Delete" /> </a></td>
        </tr>
        <?php  } ?>
      </tbody>
    </table>
  </div>
</div>
