<?php
/* Smarty version 3.1.30, created on 2016-12-11 10:34:25
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\mailus\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584d1da170c570_27580311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080185bc2f8bf8fc304a013e50857a137992c1bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\mailus\\layout.tpl',
      1 => 1479355849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products/layout.tpl' => 1,
    'file:mailus/breadcrum.tpl' => 1,
    'file:mailus/gift.tpl' => 1,
  ),
),false)) {
function content_584d1da170c570_27580311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3103584d1da1707956_99508662', "breadcrum");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19308584d1da170b7b5_77789005', "gift");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:products/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "breadcrum"} */
class Block_3103584d1da1707956_99508662 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:mailus/breadcrum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "breadcrum"} */
/* {block "gift"} */
class Block_19308584d1da170b7b5_77789005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:mailus/gift.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "gift"} */
}
