<?php
/* Smarty version 3.1.30, created on 2016-12-14 13:29:52
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\views\login\v_forget.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58513b408fdbe9_73171975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2ee035e64b9a83c97727f200de55baeb51ed8b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\views\\login\\v_forget.tpl',
      1 => 1481077141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58513b408fdbe9_73171975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- login -->

<div class="w3_login">
  <h3>Xác nhận email	</h3>
  <div class="w3_login_module">
    <div class=" form-module">
        <form action="#" method="post">
          <input type="text" name="dn_email" placeholder="Email.." required>
          <input type="submit" name="btnForget" value="Xác nhận">
        </form>
    
      <?php if ($_smarty_tpl->tpl_vars['thong_bao']->value != '') {?> <b ><?php echo $_smarty_tpl->tpl_vars['thong_bao']->value;?>
</b> <?php }?> </div>
  </div>
</div>
<!-- //login --><?php }
}
