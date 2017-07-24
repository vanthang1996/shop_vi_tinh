<?php
/* Smarty version 3.1.30, created on 2016-12-14 15:55:05
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\single\gift.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58515d49df0e78_59646006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ee2291ff77f846b9b592f5f32b42b9acd6f9f88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\single\\gift.tpl',
      1 => 1481727302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58515d49df0e78_59646006 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- brands -->
<?php if (null !== $_smarty_tpl->tpl_vars['cung_loais']->value) {?>
	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container">
			<h3>Sản phẩm cùng loại</h3>
          
				<div class="w3ls_w3l_banner_nav_right_grid1">
				<!--	<h6>food</h6> -->
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cung_loais']->value, 'cl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cl']->value) {
?>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid cart_items">
							<div class="agile_top_brand_left_grid_pos">
								<img src="public/layout/images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['cl']->value->ma_san_pham;?>
" class="product-image" ><img src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['cl']->value->hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cl']->value->ten_san_pham;?>
" class="img-responsive" /></a>
											<p><?php echo $_smarty_tpl->tpl_vars['cl']->value->ten_san_pham;?>
</p>
											<h4><?php echo number_format($_smarty_tpl->tpl_vars['cl']->value->don_gia);?>
VNĐ </h4>
										</div>
										<div class="snipcart-details">
											<!--<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['cl']->value->ten_san_pham;?>
" />
													<input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['cl']->value->don_gia;?>
" />
													<input type="hidden" name="discount_amount" value="0" />
													<input type="hidden" name="currency_code" value="VND" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
												</fieldset>
											</form>-->
                                            <form class="form-item">
                      <input type="hidden" name="product_qty" min="1" value="1" style="width:30px" />
                      <input name="product_code" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cl']->value->ma_san_pham;?>
">
                       <input type="submit" name="submit" value="Thêm vào giỏ" class="add-to-cart button" />
                    </form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
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
	</div>
 <?php }?>   
<!-- //brands --><?php }
}
