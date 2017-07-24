<?php
/* Smarty version 3.1.30, created on 2016-12-11 10:35:35
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\views\dat_hang\v_giao_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584d1de75b6b20_30830892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9fbb187456b6414b1765c8eb6b7ca51d9c3cd39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\views\\dat_hang\\v_giao_hang.tpl',
      1 => 1481304112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584d1de75b6b20_30830892 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<h2>Chúng tôi xin cám ơn quí khách đã mua hàng tại website ... </h2>
<p>Nhân viên chúng tôi sẽ giao hàng tại địa chỉ: <?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->dia_chi;?>
</p>
<p>Người nhận hàng Anh/Chị:<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ten_khach_hang;?>
</p>
<p>Điện thoại liên hệ:<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->dien_thoai;?>
</p>
<p>Hình thức thanh toán: <?php echo $_smarty_tpl->tpl_vars['hinh_thuc_thanh_toan']->value;?>
</p>
<p>Tổng tiền thanh toán: <?php echo number_format($_smarty_tpl->tpl_vars['tong_tien']->value);?>
đồng</p>
<h3>Đơn hàng của quí khách</h3>
<table width="100%" border="1" cellspacing="2" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td>Sản phẩm</td>
    <td>&nbsp;</td>
    <td>Số lượng</td>
    <td>Đơn giá</td>
    <td>Thành tiền</td>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gio_hang']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
	
		<?php $_smarty_tpl->_assignInScope('thanhtien', $_smarty_tpl->tpl_vars['item']->value["product_qty"]*$_smarty_tpl->tpl_vars['item']->value["product_price"]);
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value["product_name"];?>
</td>
    <td><img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['item']->value["product_image"];?>
" width="100" height="70"  /></td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value["product_qty"];?>
</td>
    <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value["product_price"],0,",",".");?>
 đồng</td>
    <td><?php echo number_format($_smarty_tpl->tpl_vars['thanhtien']->value,0,",",".");?>
 đồng</td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	
<?php echo header("refresh:10;url=index.php");?>

 
</table>

</body>
</html><?php }
}
