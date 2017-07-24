<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
</head>
<body>
<h2>Chúng tôi xin cám ơn quí khách đã mua hàng tại website ... </h2>
<p>Nhân viên chúng tôi sẽ giao hàng tại địa chỉ: {$khach_hang->dia_chi}</p>
<p>Người nhận hàng Anh/Chị:{$khach_hang->ten_khach_hang}</p>
<p>Điện thoại liên hệ:{$khach_hang->dien_thoai}</p>
<p>Hình thức thanh toán: {$hinh_thuc_thanh_toan}</p>
<p>Tổng tiền thanh toán: {number_format($tong_tien)}đồng</p>
<h3>Đơn hàng của quí khách</h3>
<table width="100%" border="1" cellspacing="2" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td>Sản phẩm</td>
    <td>&nbsp;</td>
    <td>Số lượng</td>
    <td>Đơn giá</td>
    <td>Thành tiền</td>
  </tr>
  {foreach $gio_hang as $item}
	
		{$thanhtien=$item["product_qty"]*$item["product_price"]}
  <tr>
    <td>{$item["product_name"]}</td>
    <td><img src="public/layout/images/{$item["product_image"]}" width="100" height="70"  /></td>
    <td>{$item["product_qty"]}</td>
    <td>{number_format($item["product_price"],0,",",".")} đồng</td>
    <td>{number_format($thanhtien,0,",",".")} đồng</td>
  </tr>
  {/foreach}
	
{header("refresh:10;url=index.php")}
 
</table>

</body>
</html>