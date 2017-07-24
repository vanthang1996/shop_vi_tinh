<?php
/* Smarty version 3.1.30, created on 2016-12-11 04:19:46
  from "C:\xampp\htdocs\src\LTW-PHP2\views\home\gift.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584cc5d2be1412_02758913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de116456bd90bb917b1c47898e22282fe8526853' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2\\views\\home\\gift.tpl',
      1 => 1481200239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584cc5d2be1412_02758913 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- top-brands -->
<div id="banchay"></div>
<div class="top-brands" >

  <div class="container" >
    <h3>Sản phẩm bán chạy</h3>
    <div class="agile_top_brands_grids"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ban_chays']->value, 'bc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bc']->value) {
?>
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid cart_items">
            <div class="tag"><img src="public/layout/images/tag.png" alt=" " class="img-responsive" /></div>
            <div class="agile_top_brand_left_grid1">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="single.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['bc']->value->ma_san_pham;?>
"  class="product-image" ><img title="<?php echo $_smarty_tpl->tpl_vars['bc']->value->ten_san_pham;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bc']->value->ten_san_pham;?>
" src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['bc']->value->hinh;?>
" /></a>
                    <p><?php echo $_smarty_tpl->tpl_vars['bc']->value->ten_san_pham;?>
</p>
                    <h4><?php echo number_format($_smarty_tpl->tpl_vars['bc']->value->don_gia);?>
VNĐ <span>$10.00</span></h4>
                  </div>
                  <div class="snipcart-details top_brand_home_details">
                    <!--<form action="#" method="post">
                      <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="business" value=" " />
                        <input type="hidden" name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['bc']->value->ten_san_pham;?>
" />
                        <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['bc']->value->don_gia;?>
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
                      <input name="product_code" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['bc']->value->ma_san_pham;?>
">
                       <input type="submit" name="submit" class="add-to-cart button" value="Thêm vào giỏ"  />
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
  </div>
</div>
<!-- //top-brands -->
<div id="moi"></div>
<div class="top-brands" id="moi">

  <div class="container" >
    <h3>Sản phẩm mới</h3>
    <div class="agile_top_brands_grids"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mois']->value, 'moi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['moi']->value) {
?>
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid cart_items">
            <div class="tag"><img src="public/layout/images/offer.png" alt=" " class="img-responsive" /></div>
            <div class="agile_top_brand_left_grid1">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="single.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['moi']->value->ma_san_pham;?>
" class="product-image"><img title="<?php echo $_smarty_tpl->tpl_vars['moi']->value->ten_san_pham;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['moi']->value->ten_san_pham;?>
" src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['moi']->value->hinh;?>
" /></a>
                    <p><?php echo $_smarty_tpl->tpl_vars['moi']->value->ten_san_pham;?>
</p>
                    <h4><?php echo number_format($_smarty_tpl->tpl_vars['moi']->value->don_gia);?>
VNĐ <span>$10.00</span></h4>
                  </div>
                  <div class="snipcart-details top_brand_home_details">
                    <!--<form action="#" method="post">
                      <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="business" value=" " />
                        <input type="hidden" name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['moi']->value->ten_san_pham;?>
" />
                        <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['moi']->value->don_gia;?>
" />
                        <input type="hidden" name="discount_amount" value="0" />
                        <input type="hidden" name="currency_code" value="VND" />
                        <input type="hidden" name="return" value=" " />
                        <input type="hidden" name="cancel_return" value=" " />
                        <input type="hidden" name="submit" value="Thêm vào giỏ" class="button" />
                      </fieldset>
                    </form>-->
                     <form class="form-item">
                    <input type="hidden" name="product_qty" min="1" value="1" style="width:30px" />
                    <input name="product_code" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['moi']->value->ma_san_pham;?>
">
                     <input type="submit" name="submit" value="Thêm vào giỏ" class="button add-to-cart" />
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
  </div>
</div>
<!-- //top-brands --> 
<!-- top-brands -->
<div  id="yeuthich"></div>
<div class="top-brands"  id="yeuthich">

  <div class="container">
    <h3>Sản phẩm yêu thích</h3>
    <div class="agile_top_brands_grids"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yeu_thichs']->value, 'yeu_thich');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['yeu_thich']->value) {
?>
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid cart_items">
            <div class="tag"><img src="public/layout/images/tag.png" alt=" " class="img-responsive" /></div>
            <div class="agile_top_brand_left_grid1">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="single.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['yeu_thich']->value->ma_san_pham;?>
" class="product-image"><img title="<?php echo $_smarty_tpl->tpl_vars['yeu_thich']->value->ten_san_pham;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['yeu_thich']->value->ten_san_pham;?>
" src="public/layout/images/<?php echo $_smarty_tpl->tpl_vars['yeu_thich']->value->hinh;?>
" /></a>
                    <p><?php echo $_smarty_tpl->tpl_vars['yeu_thich']->value->ten_san_pham;?>
</p>
                    <h4><?php echo number_format($_smarty_tpl->tpl_vars['yeu_thich']->value->don_gia);?>
VNĐ <span>$10.00</span></h4>
                  </div>
                  <div class="snipcart-details top_brand_home_details">
                   <!-- <form action="#" method="post">
                      <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="business" value=" " />
                        <input type="hidden" name="item_name" value="<?php echo $_smarty_tpl->tpl_vars['yeu_thich']->value->ten_san_pham;?>
" />
                        <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['yeu_thich']->value->don_gia;?>
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
                      <input name="product_code" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['yeu_thich']->value->ma_san_pham;?>
">
                        <input type="submit" name="submit" value="Thêm vào giỏ" class="button add-to-cart" />
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
  </div>
</div>
<!-- //top-brands --> <?php }
}
