<?php
/* Smarty version 3.1.30, created on 2016-12-11 10:35:18
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\views\gio_hang\v_cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584d1dd6adb997_16968826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c326e8cc0094914b55b05890ef1259d0c5f34409' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\views\\gio_hang\\v_cart.tpl',
      1 => 1480580845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584d1dd6adb997_16968826 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h1 style="text-align:center">Đơn hàng của bạn <?php echo '<?php ';?>echo $_SESSION["ten_khach_hang"] <?php echo '?>';?></h1>
<center>(cập nhật lại số lượng sản phẩm hay xóa sản phẩm)</center>
<?php if (isset($_SESSION['products']) && count($_SESSION['products']) > 0) {
echo $_smarty_tpl->tpl_vars['cart_box']->value;?>

<?php } else {
echo $_smarty_tpl->tpl_vars['null']->value;?>

<?php echo header("refresh:3;url=index.php");?>

<?php }
}
}
