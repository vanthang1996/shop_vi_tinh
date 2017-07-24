<?php
/* Smarty version 3.1.30, created on 2016-12-12 20:14:29
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\about\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584ef7152e42b4_38922749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0f77f5d9bcac8f083bc1c4c0d556564b846f532' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\about\\layout.tpl',
      1 => 1481570067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products/layout.tpl' => 1,
    'file:about/breadcrum.tpl' => 1,
  ),
),false)) {
function content_584ef7152e42b4_38922749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20266584ef7152df3c8_38117267', "breadcrum");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:products/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "breadcrum"} */
class Block_20266584ef7152df3c8_38117267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:about/breadcrum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "breadcrum"} */
}
