<?php
/* Smarty version 3.1.30, created on 2016-12-11 04:19:46
  from "C:\xampp\htdocs\src\LTW-PHP2\smarty\templates\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584cc5d29bba94_73805583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ae61177c10eee9ab003734ee5ea0811bfd235e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2\\smarty\\templates\\banner.tpl',
      1 => 1479349516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:banner-nav-left.tpl' => 1,
    'file:banner-nav-right.tpl' => 1,
  ),
),false)) {
function content_584cc5d29bba94_73805583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- banner -->
<div class="banner">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11314584cc5d29b8cb3_56294449', "banner-nav-left");
?>

 <?php $_smarty_tpl->_subTemplateRender("file:banner-nav-right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
  <div class="clearfix"></div>
</div><?php }
/* {block "banner-nav-left"} */
class Block_11314584cc5d29b8cb3_56294449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:banner-nav-left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner-nav-left"} */
}
