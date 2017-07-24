<?php
/* Smarty version 3.1.30, created on 2016-12-11 10:26:38
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\views\home\v_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584d1bce04a5c5_03603679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c7319b49f568da2fc410b52f5116f0e253045f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\views\\home\\v_home.tpl',
      1 => 1481448395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584d1bce04a5c5_03603679 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="slider">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="w3l_banner_nav_right_banner">
             
            </div>
          </li>
          <li>
            <div class="w3l_banner_nav_right_banner1">
             
            </div>
          </li>
          <li>
            <div class="w3l_banner_nav_right_banner2">
              
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
