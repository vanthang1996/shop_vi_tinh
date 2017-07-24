<?php
/* Smarty version 3.1.30, created on 2016-12-11 07:43:13
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\banner-nav-left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584cf581036258_23581501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b55f4fd2dd191e2070568e4489580e97a5add1ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\banner-nav-left.tpl',
      1 => 1479731947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584cf581036258_23581501 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if (isset($_smarty_tpl->tpl_vars['navs']->value)) {?>
 <div class="w3l_banner_nav_left">
    <nav class="navbar nav_bottom"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header nav_2">
        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navs']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
          <li class="dropdown mega-dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['nav']->value->ten_loai;?>
<span class="caret"></span></a>
            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
              <div class="w3ls_vegetables">
                <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subs']->value[$_smarty_tpl->tpl_vars['nav']->value->ma_loai], 'sub');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
?>
                  <li><a href="products.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['sub']->value->ma_loai;?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value->ten_loai;?>
</a></li>
  				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </div>
            </div>
          </li>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

         
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
   <?php }
}
}
