<?php
/* Smarty version 3.1.30, created on 2016-12-11 10:26:54
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\bai_viet\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584d1bde540ec9_81318592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25354e8ae36b95734ccb7ef9c405201f4f0e4cfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\bai_viet\\layout.tpl',
      1 => 1481296456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products/layout.tpl' => 1,
    'file:single/breadcrum.tpl' => 1,
  ),
),false)) {
function content_584d1bde540ec9_81318592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18115584d1bde53f825_81290684', "breadcrum");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:products/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "breadcrum"} */
class Block_18115584d1bde53f825_81290684 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:single/breadcrum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "breadcrum"} */
}
