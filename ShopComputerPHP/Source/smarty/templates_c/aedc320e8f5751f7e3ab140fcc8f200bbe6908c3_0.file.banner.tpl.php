<?php
/* Smarty version 3.1.30, created on 2016-12-11 07:43:12
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584cf580f0fd61_14914218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aedc320e8f5751f7e3ab140fcc8f200bbe6908c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\banner.tpl',
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
function content_584cf580f0fd61_14914218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- banner -->
<div class="banner">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29086584cf580f0ce83_31505911', "banner-nav-left");
?>

 <?php $_smarty_tpl->_subTemplateRender("file:banner-nav-right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
  <div class="clearfix"></div>
</div><?php }
/* {block "banner-nav-left"} */
class Block_29086584cf580f0ce83_31505911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:banner-nav-left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner-nav-left"} */
}
