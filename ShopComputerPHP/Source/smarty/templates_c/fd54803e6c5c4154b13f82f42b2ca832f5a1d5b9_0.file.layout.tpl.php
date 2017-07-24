<?php
/* Smarty version 3.1.30, created on 2016-12-11 10:26:44
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\products\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584d1bd4425a38_24219803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd54803e6c5c4154b13f82f42b2ca832f5a1d5b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\products\\layout.tpl',
      1 => 1479356116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
    'file:products/breadcrum.tpl' => 1,
  ),
),false)) {
function content_584d1bd4425a38_24219803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31696584d1bd441e881_55330095', "gift");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18377584d1bd44226d4_21326896', "breadcrum");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32462584d1bd4424b62_82404220', "banner_bottom");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "gift"} */
class Block_31696584d1bd441e881_55330095 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "gift"} */
/* {block "breadcrum"} */
class Block_18377584d1bd44226d4_21326896 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:products/breadcrum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "breadcrum"} */
/* {block "banner_bottom"} */
class Block_32462584d1bd4424b62_82404220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "banner_bottom"} */
}
