<?php
/* Smarty version 3.1.30, created on 2016-12-11 04:19:46
  from "C:\xampp\htdocs\src\LTW-PHP2\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584cc5d28cef63_86611607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64bfb9e542c678fecf3c1b3abbe4837c180c0137' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2\\smarty\\templates\\header.tpl',
      1 => 1481296492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:script-sticky-nav.tpl' => 1,
  ),
),false)) {
function content_584cc5d28cef63_86611607 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- header -->
<!--<?php echo '<script'; ?>
>
$(document).ready(function() {

var data = {}; 
$("#search option").each(function(i,el) {  
   data[$(el).data("value")] = $(el).val();
});
// `data` : object of `data-value` : `value`
console.log(data, $("#search option").val());


    $('#search_submit').click(function()
    {
        var value = $('#search_product').val();
        alert($('#search [value="' + value + '"]').data('value'));
    });
});
<?php echo '</script'; ?>
>-->

<div class="agileits_header">
  <div class="w3l_offers"> <a href="products.php">Khuyễn Mãi HOT!</a> </div>
  <div class="w3l_search">
    <form action="single.php" method="post">
      
      <input type="text" name="Product" list="search" id="search_product" value="Tìm kiếm..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm...';}" required>
      <datalist id="search"  name="search">
      </datalist>
      
      <input type="submit" name="search_submit" id="search_submit" value=" ">
    </form>
  </div>
  <div class="product_list_header"> 
    <!-- Cart item-->
    <form class="minicart-empty">
      <div style="width:130px;float:right;position:relative;padding-left:9em"> <a href="#" class="cart-box" id="cart-info" title="View Cart"> <?php if (isset($_SESSION['products'])) {?>
        <?php $_smarty_tpl->_assignInScope('number', 0);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['products'], 'pr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('number', $_smarty_tpl->tpl_vars['number']->value+$_smarty_tpl->tpl_vars['pr']->value["product_qty"]);
?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php echo $_smarty_tpl->tpl_vars['number']->value;?>

        <?php } else { ?>
        <?php echo 0;?>

        <?php }?> </a>
        <div class="shopping-cart-box"> <a href="#" class="close-shopping-cart-box" >Close</a>
          <h4>Giỏ hàng của bạn</h4>
          <div id="shopping-cart-results"></div>
        </div>
      </div>
    </form>
    <div style="clear:both"></div>
    <!-- End Cart item--> 
    
  </div>
  <div class="w3l_header_right">
    <ul class="login">
      <li class="dropdown profile_details_drop"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
        <div class="mega-dropdown-menu">
          <div class="w3ls_vegetables">
            <ul class="dropdown-menu drp-mnu">
              <li><a href="login.php">Đăng nhập</a></li>
              <li><a href="login.php">Đăng ký</a></li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
    <?php if (isset($_SESSION['khach_hang'])) {?>
    <style>
  .login{
  	display:none;
  }
  </style>
    <p style="display:block;padding: 13px 8px 9px 0px; font-size:12px; color:white;" class="out"> Chào bạn! <?php echo $_SESSION['khach_hang']->ten_khach_hang;?>
 | <a  href="javascript:void(0)"  class="logout">Thoát</a></p>
    <?php }?> </div>
  <div class="w3l_header_right1">
    <h2><a href="mail.php">Liên hệ</a></h2>
  </div>
  <div class="clearfix"> </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:script-sticky-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="logo_products">
  <div class="container">
    <div class="w3ls_logo_products_left">
      <h1><a href="index.php"><span>Technology</span> Store</a></h1>
    </div>
    <div class="w3ls_logo_products_left1">
      <ul class="special_items">
        <li><a href="events.php">Sự kiện</a><i>/</i></li>
        <li><a href="about.php">Thông tin</a><i>/</i></li>
        <li><a href="products.php">Nổi bật</a><i>/</i></li>
        <li><a href="bai_viet.php">Bài viết</a></li>
      </ul>
    </div>
    <div class="w3ls_logo_products_left1">
      <ul class="phone_email">
        <li><i class="fa fa-phone" aria-hidden="true"></i>(+84)120 394 7318</li>
        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">vanthang1996</a></li>
      </ul>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //header --> 
<?php }
}
