<?php
/* Smarty version 3.1.30, created on 2016-12-11 04:19:47
  from "C:\xampp\htdocs\src\LTW-PHP2\smarty\templates\bootstrap-script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584cc5d3025bb2_53825372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d1b0c84f6f90d8e12a1ff8937250bc740dc910' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2\\smarty\\templates\\bootstrap-script.tpl',
      1 => 1479353993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584cc5d3025bb2_53825372 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Bootstrap Core JavaScript --> 
<?php echo '<script'; ?>
 src="public/layout/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
$(document).ready(function(){
    $(".dropdown").hover(function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        });
});
<?php echo '</script'; ?>
> 
<!-- here stars scrolling icon --> 
<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	<?php echo '</script'; ?>
> 
<!-- //here ends scrolling icon --> 
<?php echo '<script'; ?>
 src="public/layout/js/minicart.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
