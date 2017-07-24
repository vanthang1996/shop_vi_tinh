<?php
/* Smarty version 3.1.30, created on 2016-12-11 10:35:18
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\gio_hang\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584d1dd695ac81_08245850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9682f571e676a617316659008322002ec4bd5e22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\gio_hang\\layout.tpl',
      1 => 1480533580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products/layout.tpl' => 1,
    'file:single/breadcrum.tpl' => 1,
  ),
),false)) {
function content_584d1dd695ac81_08245850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14810584d1dd6957b10_69011971', "breadcrum");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15883584d1dd695a104_62584886', "gift");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:products/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "breadcrum"} */
class Block_14810584d1dd6957b10_69011971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:single/breadcrum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "breadcrum"} */
/* {block "gift"} */
class Block_15883584d1dd695a104_62584886 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "gift"} */
}
