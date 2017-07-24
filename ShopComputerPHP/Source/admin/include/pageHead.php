<?php
@session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh"); 

include("models/m_hoa_don.php");
$dh = new M_hoa_don();
$sl =$dh->dem_hoa_don_dang_xu_ly();
?>

<h2>Quản trị Website</h2>
<p id="page-intro" style="font-size:11px">Ngày cập nhật: <?php echo date("D") ." - " .date("d/m/Y h:i:s") ?> </p>
<ul class="shortcut-buttons-set">
 <li><a class="shortcut-button  cart" href="donhang.php" ><span class="label-red" style="" id="sldh"></span><span> <img src="public/layout/resources/images/icons/hinh1.png" alt="icon" /><br />
    Đơn hàng </span></a></li>
  <li><a class="shortcut-button" href="sanpham.php"><span> <img src="public/layout/resources/images/icons/hinh2.png" alt="icon" /><br />
    sản phẩm </span></a></li>
  <li><a class="shortcut-button" href="khachhang.php"><span> <img src="public/layout/resources/images/icons/hinh3.png" alt="icon" /><br />
    Khách hàng </span></a></li>
  <li><a class="shortcut-button" href="baiviet.php"> <span> <img src="public/layout/resources/images/icons/hinh4.png" alt="icon" /><br />
    Bài viết </span></a></li>
  <li><a class="shortcut-button" href="quantri.php" ><span> <img src="public/layout/resources/images/icons/hinh5.png" alt="icon" /><br />
    thống kê </span></a></li>
</ul>
<!-- End .shortcut-buttons-set --> 

