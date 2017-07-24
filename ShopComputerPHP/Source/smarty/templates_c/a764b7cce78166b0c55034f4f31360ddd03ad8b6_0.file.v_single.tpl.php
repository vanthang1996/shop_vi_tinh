<?php
/* Smarty version 3.1.30, created on 2016-12-16 17:31:01
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\views\single\v_single.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585416c508df01_69686097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a764b7cce78166b0c55034f4f31360ddd03ad8b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\views\\single\\v_single.tpl',
      1 => 1481905827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585416c508df01_69686097 (Smarty_Internal_Template $_smarty_tpl) {
if (null != $_smarty_tpl->tpl_vars['san_pham']->value) {?>

			<div class="agileinfo_single">
				<h5><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
" class="img-responsive" width="242"  height="242" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5"  checked="checked">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" >
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Mô tả :</h4>
						<p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->mo_ta_chi_tiet;?>
</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
 </h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<!--<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
" />
									<input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
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
                      <input name="product_code" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
">
                       <input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
                    </form>
						</div>
					</div>
				</div>
                
				<div class="clearfix"> </div>
                <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Thông tin chi tiết</a></li>
    <li><a href="#tabs-2">Bình luận </a></li>
  </ul>
  <div id="tabs-1">
    <p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->mo_ta_chi_tiet;?>
</p>
  </div>
  <div id="tabs-2">
    <p><div id="fb-root"></div>
<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
<div class="fb-comments" data-href="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fvanthang1996%2Fposts%2F1312559012129544" data-width="100%" data-numposts="10"></div>
</p>
  </div>
  
</div>
			</div>
            

<?php }
}
}
