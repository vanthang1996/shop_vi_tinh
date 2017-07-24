<?php
/* Smarty version 3.1.30, created on 2016-12-14 15:21:59
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\single\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585155879355a6_00643470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26bb7e41eea3bbb4548b3eae5ba1d3622a22c91f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\single\\layout.tpl',
      1 => 1480186780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products/layout.tpl' => 1,
    'file:single/head.tpl' => 1,
    'file:single/breadcrum.tpl' => 1,
    'file:single/gift.tpl' => 1,
  ),
),false)) {
function content_585155879355a6_00643470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_266505851558792b749_14316490', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_284915851558792fde8_55725459', "breadcrum");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27944585155879341b8_72259305', "gift");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:products/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "head"} */
class Block_266505851558792b749_14316490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:single/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
}
/* {/block "head"} */
/* {block "breadcrum"} */
class Block_284915851558792fde8_55725459 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:single/breadcrum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "breadcrum"} */
/* {block "gift"} */
class Block_27944585155879341b8_72259305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:single/gift.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "gift"} */
}
