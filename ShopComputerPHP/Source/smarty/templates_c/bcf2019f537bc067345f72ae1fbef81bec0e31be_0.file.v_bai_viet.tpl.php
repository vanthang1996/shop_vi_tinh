<?php
/* Smarty version 3.1.30, created on 2016-12-12 20:18:48
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\views\bai_viet\v_bai_viet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584ef818ad39d6_06337637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf2019f537bc067345f72ae1fbef81bec0e31be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\views\\bai_viet\\v_bai_viet.tpl',
      1 => 1481570326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584ef818ad39d6_06337637 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- events -->
		<div class="events">
			<h3>Bài viết</h3>
		
			<div class="events-bottom">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bai_viets']->value, 'bai_viet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bai_viet']->value) {
?>
				<a href="bai_viet.php?ma_bai_viet=<?php echo $_smarty_tpl->tpl_vars['bai_viet']->value->ma_bai_viet;?>
">
                <div class="col-md-6 events_bottom_left">
					<div class="col-md-4 events_bottom_left1">
						<div class="events_bottom_left1_grid">
							<h4><?php echo date("d",strtotime($_smarty_tpl->tpl_vars['bai_viet']->value->ngay_xuat_ban));?>
</h4>
							<p><?php echo date("M, Y",strtotime($_smarty_tpl->tpl_vars['bai_viet']->value->ngay_xuat_ban));?>
</p>
						</div>
					</div>
					<div class="col-md-8 events_bottom_left2">	
					<!--	<img src="images/15.jpg" alt=" " class="img-responsive" />-->
						<h4><?php echo $_smarty_tpl->tpl_vars['bai_viet']->value->tieu_de;?>
</h4>
						<ul>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo date("g:i a",strtotime($_smarty_tpl->tpl_vars['bai_viet']->value->ngay_xuat_ban));?>
</li>
							<li><i class="fa fa-user" aria-hidden="true"></i><a href="#"><?php echo $_smarty_tpl->tpl_vars['nguoi_dungs']->value[$_smarty_tpl->tpl_vars['bai_viet']->value->ma_nguoi_dung]->ho_ten;?>
</a></li>
						</ul>
						<p><?php echo $_smarty_tpl->tpl_vars['bai_viet']->value->noi_dung_tom_tat;?>
</p>
					</div>
					<div class="clearfix"> </div>
				</div></a>
                
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
  
			
				<div class="clearfix"> </div>
			</div>
              <div style="clear:both; text-align:center"><?php if (isset($_smarty_tpl->tpl_vars['lst']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
 <?php }?></div>  
		</div>
<!-- //events --><?php }
}
