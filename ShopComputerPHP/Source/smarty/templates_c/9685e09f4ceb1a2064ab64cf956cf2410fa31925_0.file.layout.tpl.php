<?php
/* Smarty version 3.1.30, created on 2016-12-11 10:35:02
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\login\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584d1dc6a33360_07746950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9685e09f4ceb1a2064ab64cf956cf2410fa31925' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\login\\layout.tpl',
      1 => 1479354481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products/layout.tpl' => 1,
    'file:login/breadcrum.tpl' => 1,
  ),
),false)) {
function content_584d1dc6a33360_07746950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28593584d1dc6a324d9_02062133', "breadcrum");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:products/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "breadcrum"} */
class Block_28593584d1dc6a324d9_02062133 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:login/breadcrum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "breadcrum"} */
}
