<?php
/* Smarty version 3.1.30, created on 2016-12-11 04:19:46
  from "C:\xampp\htdocs\src\LTW-PHP2\views\home\v_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584cc5d2b32535_76342168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11b85373561b8cdee5cce1376f11db9d91aa7e7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2\\views\\home\\v_home.tpl',
      1 => 1479923225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584cc5d2b32535_76342168 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="slider">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="w3l_banner_nav_right_banner">
              <h3>Make your <span>food</span> with Spicy.</h3>
              <div class="more"> <a href="products" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a> </div>
            </div>
          </li>
          <li>
            <div class="w3l_banner_nav_right_banner1">
              <h3>Make your <span>food</span> with Spicy.</h3>
              <div class="more"> <a href="products" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a> </div>
            </div>
          </li>
          <li>
            <div class="w3l_banner_nav_right_banner2">
              <h3>upto <i>50%</i> off.</h3>
              <div class="more"> <a href="products" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a> </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- flexSlider -->
    <link rel="stylesheet" href="public/layout/css/flexslider.css" type="text/css" media="screen" property="" />
    <?php echo '<script'; ?>
 defer src="public/layout/js/jquery.flexslider.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  <?php echo '</script'; ?>
> 
    <!-- //flexSlider --> 
    <!-- top-brands -->
<?php }
}
