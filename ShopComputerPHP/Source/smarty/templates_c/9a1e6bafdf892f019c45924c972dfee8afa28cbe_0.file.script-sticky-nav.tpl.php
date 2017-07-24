<?php
/* Smarty version 3.1.30, created on 2016-12-11 04:19:46
  from "C:\xampp\htdocs\src\LTW-PHP2\smarty\templates\script-sticky-nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584cc5d297fe02_35489034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a1e6bafdf892f019c45924c972dfee8afa28cbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2\\smarty\\templates\\script-sticky-nav.tpl',
      1 => 1479321435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584cc5d297fe02_35489034 (Smarty_Internal_Template $_smarty_tpl) {
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
