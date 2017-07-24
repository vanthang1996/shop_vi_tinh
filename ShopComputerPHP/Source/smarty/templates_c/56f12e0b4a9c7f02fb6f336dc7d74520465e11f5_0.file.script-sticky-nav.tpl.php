<?php
/* Smarty version 3.1.30, created on 2016-12-11 07:43:12
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\script-sticky-nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584cf580cfaf80_39151181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56f12e0b4a9c7f02fb6f336dc7d74520465e11f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\script-sticky-nav.tpl',
      1 => 1479321435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584cf580cfaf80_39151181 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- script-for sticky-nav --> 
<?php echo '<script'; ?>
>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	<?php echo '</script'; ?>
> 
<!-- //script-for sticky-nav -->
<?php }
}
