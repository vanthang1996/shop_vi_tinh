<?php
/* Smarty version 3.1.30, created on 2016-12-11 04:19:46
  from "C:\xampp\htdocs\src\LTW-PHP2\smarty\templates\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584cc5d25d1483_44443888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7aa2a5e6cacb7afca620aebe52dfbfbd89ee478' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2\\smarty\\templates\\head.tpl',
      1 => 1481196121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584cc5d25d1483_44443888 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
        <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="shortcut icon" href="public/layout/images/logo.jpg" type="image/x-icon" />
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
        <!-- //for-mobile-apps -->
        <link href="public/layout/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="public/layout/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome icons -->
        <link href="public/layout/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //font-awesome icons -->
        <!-- js -->
        <?php echo '<script'; ?>
 src="public/layout/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
        
        <link href="public/layout/css/cart.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="public/layout/css/styleCart.css">
        <!-- //js -->
        <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="public/layout/css/phantrang.css" type="text/css" >
        
        <!-- start-smoth-scrolling -->
        <?php echo '<script'; ?>
 type="text/javascript" src="public/layout/js/move-top.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="public/layout/js/easing.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <?php echo '<script'; ?>
 type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
		
		$( "#datepicker" ).datepicker();
		
		

		$('.add-to-cart').click(function() {
			
   var cart = $('.cart-box');
   var imgtofly = $(this).parents('div.cart_items').find('a.product-image img').eq(0);
    if (imgtofly) {
        var imgclone = imgtofly.clone()
            .offset({ top:imgtofly.offset().top, left:imgtofly.offset().left })
            .css({'opacity':'0.7', 'position':'absolute', 'height':'150px', 'width':'150px', 'z-index':'1000'})
            .appendTo($('body'))
            .animate({
                'top':cart.offset().top + 10,
                'left':cart.offset().left + 30,
                'width':55,
                'height':55
            }, 1500, 'easeInElastic');
        imgclone.animate({'width':0, 'height':0}, function(){ $(this).detach() });
    }
  
});
$(".dk_email").change(function(){
		var email =  $(this).val();
		$.ajax({
				url : "checkEmail.php",
				type:"POST",
				data :{email:email},
				success: function(data){
					if(parseInt(data)==1){
					 $(".dk_email").css("border", "1px solid red");
					}else{
						$(".dk_email").css("border", "1px solid green");
					}
				}
				});
		});
		
	});
<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/layout/js/JCart.js"><?php echo '</script'; ?>
>
        <!-- start-smoth-scrolling -->
        
        <style>
body {
	font-family: Arial, Helvetica, sans-serif;
}
table {
	font-size: 1em;
}
.ui-draggable, .ui-droppable {
	background-position: top;
}
</style>
        </head>
        <body>
        
        <?php echo '<script'; ?>
 type='text/javascript' data-cfasync='false'>
		
       $(function(){
	    window.purechatApi = {
  l: [],
  t: [],
  on: function() {
    this.l.push(arguments);
  }
};
(function() {
  var done = false;
  var script = document.createElement('script');
  script.async = true;
  script.type = 'text/javascript';
  script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
  document.getElementsByTagName('HEAD').item(0).appendChild(script);
  script.onreadystatechange = script.onload = function(e) {
    if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
      var w = new PCWidget({
        c: 'b36ba501-f844-48bb-b421-3b46794d8f67',
        f: true
      });
      done = true;
    }
  };
})();	
	   
	   
	   });
        
        <?php echo '</script'; ?>
>
        <?php }
}
